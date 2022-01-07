<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <style>
            html, body {
              font-family: 'Montserrat Alternates', sans-serif;
              color: #FFFFFF;
              width: 100%;
              max-width: 100%;
              height: auto;
              min-height: 100%;
              padding: 0;
              margin: 0;
            }
            /**, *:before, *:after {
              -webkit-tap-highlight-color: transparent;
              -webkit-tap-highlight-color: rgba(0,0,0,0);
              user-select: none;
              -webkit-user-select: none;
              -khtml-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              -o-user-select: none;
              box-sizing: border-box;
              -webkit-box-sizing: border-box;
              padding: 0;
              margin: 0;
            }
            a, a:visited, a:hover {
              color: inherit;
              text-decoration: none;
            }
            main {
              position: absolute;
              top: 0;
              left: 0;
              margin: 0 auto;
              padding: 0 26px;
              width: 100%;
              height: auto;
              min-height: 100%;
              background: rgba(154,57,163,1);
              background: -moz-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
              background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(154,57,163,1)), color-stop(100%, rgba(65,103,168,1)));
              background: -webkit-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
              background: -o-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
              background: -ms-linear-gradient(-45deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
              background: linear-gradient(135deg, rgba(154,57,163,1) 0%, rgba(65,103,168,1) 100%);
              filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9a39a3', endColorstr='#4167a8', GradientType=1 );
            }
            h1 {
              display: block;
              margin: 0 auto 25px auto;
              text-align: center;
              font-size: 1.92em;
              font-weight: 600;
              letter-spacing: -0.055em;
            }
            h2 {
              display: block;
              margin: 0 auto 60px auto;
              text-align: center;
              font-weight: 400;
              font-size: 1.25em;
              letter-spacing: -0.015em;
            }
            .container {
              position: relative;
              margin: calc(75px + 2vh + 2vw) auto 0 auto;
              padding: 0;
              width: 100%;
              max-width: 840px;
            }
            .search-box {
              position: relative;
              width: 100%;
              max-width: 360px;
              height: 60px;
              border-radius: 120px;
              margin: 0 auto;
            }
            .search-icon, .go-icon {
              position: absolute;
              top: 0;
              height: 60px;
              width: 86px;
              line-height: 61px;
              text-align: center;
            }
            .search-icon {
              left: 0;
              pointer-events: none;
              font-size: 1.22em;
              will-change: transform;
              transform: rotate(-45deg);
              -webkit-transform: rotate(-45deg);
              -moz-transform: rotate(-45deg);
              -o-transform: rotate(-45deg);
              transform-origin: center center;
              -webkit-transform-origin: center center;
              -moz-transform-origin: center center;
              -o-transform-origin: center center;
              transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -webkit-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -moz-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -o-transition: transform 400ms 220ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
            }
            .si-rotate {
              transform: rotate(0deg);
              -webkit-transform: rotate(0deg);
              -moz-transform: rotate(0deg);
              -o-transform: rotate(0deg);
            }
            .go-icon {
              right: 0;
              pointer-events: none;
              font-size: 1.38em;
              will-change: opacity;
              cursor: default;
              opacity: 0;
              transform: rotate(45deg);
              -webkit-transform: rotate(45deg);
              -moz-transform: rotate(45deg);
              -o-transform: rotate(45deg);
              transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -webkit-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -moz-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -o-transition: opacity 190ms ease-out, transform 260ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
            }
            .go-in {
              opacity: 1;
              pointer-events: all;
              cursor: pointer;
              transform: rotate(0);
              -webkit-transform: rotate(0);
              -moz-transform: rotate(0);
              -o-transform: rotate(0);
              transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -webkit-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -moz-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
              -o-transition: opacity 190ms ease-out, transform 260ms 20ms cubic-bezier(0.190, 1.000, 0.220, 1.000);
            }
            .search-border {
              display: block;
              width: 100%;
              max-width: 360px;
              height: 60px;
            }
            .border {
              fill: none;
              stroke: #FFFFFF;
              stroke-width: 5;
              stroke-miterlimit: 10;
            }
            .border {
              stroke-dasharray: 740;
              stroke-dashoffset: 0;
              transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
              -webkit-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
              -moz-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
              -o-transition: stroke-dashoffset 400ms cubic-bezier(0.600, 0.040, 0.735, 0.990);
            }
            .border-searching .border {
              stroke-dasharray: 740;
              stroke-dashoffset: 459;
              transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
              -webkit-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
              -moz-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
              -o-transition: stroke-dashoffset 650ms cubic-bezier(0.755, 0.150, 0.205, 1.000);
            }
            #search {
              font-family: 'Montserrat Alternates', sans-serif;
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              border-radius: 120px;
              border: none;
              background: rgba(255,255,255,0);
              padding: 0 68px 0 68px;
              color: #FFFFFF;
              font-size: 1.32em;
              font-weight: 400;
              letter-spacing: -0.015em;
              outline: none;
            }
            #search::-webkit-input-placeholder {color: #FFFFFF;}
            #search::-moz-placeholder {color: #FFFFFF;}
            #search:-ms-input-placeholder {color: #FFFFFF;}
            #search:-moz-placeholder {color: #FFFFFF;}
            #search::-moz-selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}
            #search::selection {color: #FFFFFF; background: rgba(0,0,0,0.25);}*/
            /*****************************************************************************************************************/
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
    <!-<body>
        
        <main>
            <div class="container">
                <h1>ค้นหาทะเบียนรถ กฟต.1</h1>
                <div class="search-box">
                    <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                    <form action="#" method="get" class="search-form">
                        <input type="text" placeholder="หมายเลขทะเบียนรถ" id="search" name="search" autocomplete="off">
                    </form>
                    <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
                     xml:space="preserve">
                  <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                  <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
                </svg>
                    <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
                </div>

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
        </main>
        
        <script>
            $(document).ready(function(){
                $("#search").focus(function() {
                  $(".search-box").addClass("border-searching");
                  $(".search-icon").addClass("si-rotate");
                });
                $("#search").blur(function() {
                  $(".search-box").removeClass("border-searching");
                  $(".search-icon").removeClass("si-rotate");
                });
                $("#search").keyup(function() {
                    if($(this).val().length > 0) {
                      $(".go-icon").addClass("go-in");
                    }
                    else {
                      $(".go-icon").removeClass("go-in");
                    }
                });
                $(".go-icon").click(function(){
                  $(".search-form").submit();
                });
            });

        </script>
        
    </body>-->
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
    </body>
</html>
