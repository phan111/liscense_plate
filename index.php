<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <style>
            /*** COLORS ***/
            @bg-color: #913D88;
            @txt-color: #FFFFFF;
            @icn-color: #FFFFFF;

            /*** DEMO ***/
            html,body{height:100%;margin:0;}body{background:@bg-color;font:13px monospace;color:@txt-color}p{margin-top:30px}.cntr{display:table;width:100%;height:100%;.cntr-innr{display:table-cell;text-align:center;vertical-align:middle}}

            /*** STYLES ***/
            .search {
                display: inline-block;
                position: relative;
                height: 35px;
                width: 35px;
                box-sizing: border-box;
                margin: 0px 8px 7px 0px;
                padding: 7px 9px 0px 9px;
                border: 3px solid @icn-color;
                border-radius: 25px;
                transition: all 200ms ease;
                cursor: text;

                &:after {
                    content: "";
                    position: absolute;
                    width: 3px;
                    height: 20px;
                    right: -5px;
                    top: 21px;
                    background: @icn-color;
                    border-radius: 3px;
                    transform: rotate(-45deg);
                    transition: all 200ms ease;
                }

                &.active,
                &:hover {
                    width: 200px;
                    margin-right: 0px;

                    &:after {
                        height: 0px;	
                    }
                }

                input {
                    width: 100%;
                    border: none;
                    box-sizing: border-box;
                    font-family: Helvetica;
                    font-size: 15px;
                    color: inherit;
                    background: transparent;
                    outline-width: 0px;
                }
            }

        </style>
    </head>
    <body>
        
        <div class="cntr">
            <div class="cntr-innr">
              <label class="search" for="inpt_search">
                    <input id="inpt_search" type="text" />
                </label>
                <p>Hover to see the magic.</p>
            </div>
        </div>
        
        <script>
            $("#inpt_search").on('focus', function () {
                $(this).parent('label').addClass('active');
            });

            $("#inpt_search").on('blur', function () {
                if($(this).val().length == 0)
                    $(this).parent('label').removeClass('active');
            });
        </script>
        
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
