<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <style>
            @use postcss-color-function;
            @use postcss-nested;
            @import url('https://fonts.googleapis.com/css?family=Raleway:400,700,900');

            /* Base styling */

            body {
                width: 430px;
                margin: 0 auto;
                background-color: #F7CAC9;
                font-family: 'Raleway', sans-serif;
            }

            .search {
                &__container {
                    padding-top: 64px;
                }

                &__title {
                    font-size: 22px;
                    font-weight: 900;
                    text-align: center;
                    color: #ff8b88;
                }

                &__input {
                    width: 100%;
                    padding: 12px 24px;

                    background-color: transparent;
                    transition: transform 250ms ease-in-out;
                    font-size: 14px;
                    line-height: 18px;

                    color: #575756;
                    background-color: transparent;
            /*         background-image: url(http://mihaeltomic.com/codepen/input-search/ic_search_black_24px.svg); */

                  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
                    background-repeat: no-repeat;
                    background-size: 18px 18px;
                    background-position: 95% center;
                    border-radius: 50px;
                    border: 1px solid #575756;
                    transition: all 250ms ease-in-out;
                    backface-visibility: hidden;
                    transform-style: preserve-3d;

                    &::placeholder {
                        color: color(#575756 a(0.8));
                        text-transform: uppercase;
                        letter-spacing: 1.5px;
                    }

                    &:hover,
                    &:focus {
                        padding: 12px 0;
                        outline: 0;
                        border: 1px solid transparent;
                        border-bottom: 1px solid #575756;
                        border-radius: 0;
                        background-position: 100% center;
                    }
                }
            }

            .credits {
                &__container {
                    margin-top: 24px;
                }

                &__text {
                    text-align: center;
                    font-size: 13px;
                    line-height: 18px;
                }

                &__link {
                    color: #ff8b88;
                    text-decoration: none;
                    transition: color 250ms ease-in;

                    &:hover,
                    &:focus {
                        color: color(#ff8b88 blackness(+25%));
                    }
                }
            }
        </style>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="search__container">
            <p class="search__title">
                Go ahead, hover over search
            </p>
            <input class="search__input" type="text" placeholder="Search">
        </div>

        <div class="credits__container">
            <p class="credits__text">Background color: Pantone Color of the Year 2016 <a href="https://www.pantone.com/color-of-the-year-2016" class="credits__link">Rose Quartz</a></p>
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
