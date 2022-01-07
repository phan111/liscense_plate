<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <style>
            body{
              background:#7D26CD;
              .search-box{
                position: absolute;
                top: 50%;
                left: 50%;
                transform:translate(-50%,-50%);
                background: #ccc;
                height: 40px;
                border-radius:40px;
                padding: 10px;
                &:hover{
                  .s-box{
                    width: 240px;
                    padding: 0 6px;
                  }
                  .s-btn{
                    background:#fff;
                  }
                }
                .s-btn{
                  color: #7D26CD;
                  float:right;
                  width: 40px;
                  height: 40px;
                  transition:.4s;
                  border-radius:50%;
                  background: #ccc;
                  display:flex;
                  justify-content:center;
                  align-items:center;
                  i{
                    font-size:20px;
                  }
                }
                .s-box{
                  border: none;
                  background:none;
                  outline:none;
                  float:left;
                  padding: 0;
                  color:#7D26CD;
                  font-size:16px;
                  transition:.5s;
                  line-height:40px;
                  width: 0px;
                }
              }
            }

        </style>
    </head>
    <body>
        <form action="#" method="get">
            <div class="search-box">
                <input type="text" class="s-box" name="search" placeholder="ทะเบียนรถ">
                  <a class="s-btn" href="">
                    <i class="fab fa-searchengin"></i>
                  </a>
            </div>
        </form>
    </body>
</html>
<?php
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
