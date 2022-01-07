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
    </head>
    <body>

        <div class="search-box">
          <input class="s-box" type="text" name="search" placeholder="Type keyword">
          <a class="s-btn" href="">
          <i class="fab fa-searchengin"></i>
          </a>
        </div>

    </body>

</html>
