<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <style>
            @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);
            @import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);
    
            body {
                background: #DDD;
                font-size: 15px;
            }
            #wrap {
              margin: 50px 100px;
              display: inline-block;
              position: relative;
              height: 60px;
              float: right;
              padding: 0;
              position: relative;
            }

            input[type="text"] {
              height: 60px;
              font-size: 55px;
              display: inline-block;
              font-family: "Lato";
              font-weight: 100;
              border: none;
              outline: none;
              color: #555;
              padding: 3px;
              padding-right: 60px;
              width: 0px;
              position: absolute;
              top: 0;
              right: 0;
              background: none;
              z-index: 3;
              transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
              cursor: pointer;
            }

            input[type="text"]:focus:hover {
              border-bottom: 1px solid #BBB;
            }

            input[type="text"]:focus {
              width: 700px;
              z-index: 1;
              border-bottom: 1px solid #BBB;
              cursor: text;
            }
            input[type="submit"] {
              height: 67px;
              width: 63px;
              display: inline-block;
              color:red;
              float: right;
              background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
              text-indent: -10000px;
              border: none;
              position: absolute;
              top: 0;
              right: 0;
              z-index: 2;
              cursor: pointer;
              opacity: 0.4;
              cursor: pointer;
              transition: opacity .4s ease;
            }

            input[type="submit"]:hover {
              opacity: 0.8;
            }
        </style>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        
        <div id="wrap">
          <form action="#" method="get">
            <input id="search" name="search" type="text" placeholder="กรอกหมายเลขทะเบียนรถ">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>
        
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
            echo $key[2]." (".$key[7].") <a href='tel:".$key[3]."'><i class='fa fa-phone'></i></a><hr>";
        }
    }
}
?>
