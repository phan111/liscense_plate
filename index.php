<html>
    <head></head>
    <body>
        <form action="#" method="get">
            <input type="text" name="search">
            <input type="submit" value="ค้นหา">
        </form>
    </body>
</html>
<?php
error_reporting(0);
require __DIR__ . '/vendor/autoload.php';
//Reading data from spreadsheet.
$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "18YfUWVh4UWmD_xbNOy1FaT-mlnjjzgo8ov-dfeIsCWE"; //It is present in your URL
$get_range = "A1:K";
//Request to get data from spreadsheet.
$response = $service->spreadsheets_values->get($spreadsheetId, $get_range);
$values = $response->getValues();

echo "<pre>";
if(!empty($_GET)){
    foreach($values AS $key){
        //print_r($key[7]);
        //print_r(strpos($key[7], $search));
        if(strpos($key[7], $_GET['search']) !== FALSE && strpos($key[10], "ไม่") === FALSE){
            print_r($key);
        }
    }
}
?>
