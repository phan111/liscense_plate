<html>
    <head>
        <title>ค้นหาทะเบียนรถ กฟต.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <style>
            *
            {
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                box-sizing: border-box;
            }
            body
            {
                margin: 100px;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #fff;
            }
            #click{ display: none; }
            .main
            {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .main label
            {
                position: absolute;
                background-color: rgb(30, 166, 245);
                height: 50px;
                width: 50px;
                line-height: 50px;
                text-align: center;
                border-radius: 50%;
                cursor: pointer;
                transition: .6s;
            }
            span:nth-child(1)
            {
                display: flex;
                position: absolute;
                top: 11px;
                left: 11px;
                width: 22px;
                height: 22px;
                border-radius: 50%;
                border: 4px solid #fff;
                transition: .4s;
            }
            span:nth-child(2), span:nth-child(3)
            {
                display: flex;
                position: absolute;
                top: 31px;
                left: 26px;
                width: 12px;
                height: 4px;
                border-radius: 3px;
                background: #fff;
                transform: rotate(45deg);
                transition: .5s;
            }
            .main #search
            {
                position:absolute;
                height: 50px;
                width: 50px;
                font-size: 22px;
                padding: 0 20px;
                background: #fff;
                border-radius: 50px;
                color: rgb(22, 123, 182);
                transition: .6s;
            }
            #click:checked ~ .main #search 
            {

                width: 300px; 
            }
            #click:checked ~ .main label 
            {

                margin-left: 125px;
            }
            #click:checked ~ .main span:nth-child(1)
            {

                opacity: 0; 
            }
            #click:checked ~ .main span:nth-child(2), 
            #click:checked ~ .main span:nth-child(3)
            {

                top: 22px;
                left: 15px;
                width: 20px;
                height: 5px;
            }
            #click:checked ~ .main #search 
            {

                box-shadow: 0 0 40px rgb(90, 217, 255);
            }
            #click:checked ~ .main span:nth-child(3)
            {

                transform: rotate(-45deg);
            }

        </style>
    </head>
    <body>

        <input id="click" type="checkbox">
        <div class="main">
          <input type="text" id="search">
          <label for="click">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>

    </body>

</html>
