<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <style>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
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
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>

        <div class="search-box">
          <input class="s-box" type="text" name="search" placeholder="Type keyword">
          <a class="s-btn" href="">
          <i class="fab fa-searchengin"></i>
          </a>
        </div>
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
            if(!empty($_GET)){
                foreach($values AS $key){
                    //print_r($key[7]);
                    //print_r(strpos($key[7], $search));
                    if(strpos($key[7], $_GET['search']) !== FALSE && strpos($key[10], "ไม่") === FALSE){
                        echo "<center style='padding-top:10px;font-size:25px'><b>".$key[2]."<br>(".$key[7].") <a href='tel:".$key[3]."'><i class='fa fa-phone fa-2x' style='color:#83FF33;padding-left15px'></i></a><hr style='margin-top:10px'></b></center>";
                    }
                }
            }
            ?>

        
    </body>

</html>
