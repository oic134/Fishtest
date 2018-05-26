<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--viewport是因為響應式網頁所以一定要加入-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_ok.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.toast.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
    <style>
    .modal-header,
    h4,
    .close {
        background-color: #5cb85c;
        color: white;
        text-align: center;
        font-size: 2em;
    }
    
    .modal-footer {
        background-color: #f9f9f9;
    }
    
    body {
        background: rgba(214, 220, 255, .8);
    }
    
    
    
    .modal-header,
    h4,
    .close {
        background-color: #a94442;
        color: white;
        text-align: center;
        font-size: 2em;
    }
    
    .modal-footer {
        background-color: #f9f9f9;
    }
    
    body {
        background-image: url("666.jpg");
       
        /*background-repeat:no-repeat;*/
        background-size: cover;
        
    }
    
    #navbar {
        background-color: #CCFFFF;
    }
    
    .carousel img {
        margin-left: auto;
        margin-right: auto;
    }
    
    .carousel-caption p {
        font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", "微软雅黑", "メイリオ", "맑은 고딕", sans-serif;
        font-size: 1.5em;
    }
    h3{
        color: orange;
        font-family:新細明體字型;
    }
    </style>
</head>

<body>
    
    <nav id="navbar" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bydr.wingame.com.tw/game.html" target="_blank">遊戲簡介</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://bydr.wingame.com.tw/video.html" target="_blank">遊戲教學 <span class="sr-only">(current)</span></a></li>
                    <li><a href="http://bydr.wingame.com.tw/stored_value.html" target="_blank">官網儲值</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">遊戲內容 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://bydr.wingame.com.tw/introduction.html#i2"target="_blank">魚群列表</a></li>
                            <li><a href="http://bydr.wingame.com.tw/introduction.html"target="_blank">裝備種類</a></li>
                            <li><a href="http://bydr.wingame.com.tw/introduction.html#i3"target="_blank">奧義技能</a></li>
                            <!--<li role="separator" class="divider"></li>-->
                            <!--<li><a href="#">Separated link</a></li>-->
                            <!--<li role="separator" class="divider"></li>-->
                            <!--<li><a href="#">One more separated link</a></li>-->
                        </ul>
                    </li>
                </ul>
                <!--<form class="navbar-form navbar-left">-->
                <!--    <div class="form-group">-->
                <!--        <input type="text" class="form-control" placeholder="Search">-->
                <!--    </div>-->
                <!--    <button type="submit" class="btn btn-default">關鍵字</button>-->
                <!--</form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新/舊會員登入 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="triggerLoginButton">捕魚大師(已是會員)</a></li>
                            <li><a href="https://practice-oic1314.c9users.io/Fish/%E6%9C%83%E5%93%A1%E7%99%BB%E5%85%A5.html">新手上路(註冊會員)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <img src="fishlog.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">最新消息</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group list-group">
                            <li class="list-group-item"><a href="http://taichung.iiiedu.org.tw/" target="_blank">17/03/29報名資策會課程,送寶石,讓您盡情買武器,抓大魚</a></li>
                            <li class="list-group-item"><a href="https://zh.wikipedia.org/wiki/%E5%A4%A7%E7%99%BD%E9%B2%A8" target="_blank">17/03/24大西洋區新增魚類:深海大白鯊</a></li>
                            <li class="list-group-item"><a href="">17/03/09 例行性維護開機公告</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- HTML 內容放這邊 -->
                <div id="petCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- 圖面下方的小圓點 -->
                    <ol class="carousel-indicators">
                        <li data-target="#petCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#petCarousel" data-slide-to="1"></li>
                        <li data-target="#petCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 輪播的圖文清單 -->
                    <div class="carousel-inner" role="listbox">
                        <!-- 0 -->
                        <div class="item active">
                            <a href="https://en.wikipedia.org/wiki/Dog" target="_blank">
                                <img src="888.jpg" />
                                <div class="carousel-caption">
                                    <h3>砲台狂射</h3>
                                    <p>遊戲爽度無極限</p>
                                </div>
                            </a>
                        </div>
                        <!-- 1 -->
                        <div class="item">
                            <a href="https://en.wikipedia.org/wiki/Cat" target="_blank">
                                <img src="999.png">
                                <div class="carousel-caption">
                                    <h3>超口愛</h3>
                                    <p>魚類QQ版</p>
                                </div>
                            </a>
                        </div>
                        <!-- 2 -->
                        <div class="item">
                            <a href="https://en.wikipedia.org/wiki/Rabbit" target="_blank">
                                <img src="345.jpg">
                                <div class="carousel-caption">
                                    <h3>遊戲儲值</h3>
                                    <p>讓你武器滿滿,殺到爆</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- 左右兩側的翻頁按鈕 -->
                    <a class="left carousel-control" href="#petCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#petCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
             <div class="container">
             <div class="row">
            <div class="col-sm-3">
                
                 <img src="1.png">
                 <img src="2.png">
                 <img src="3.png">
                 
                </div>
                <div class="col-sm-3">
                 <img src="4.png">
                
                </div>
                <div class="col-sm-3">
                 
                
                </div>
                <div class="col-sm-3">
                
                 
                </div>
                </div>
                </div>
             </div>
            <!-- 對話盒放這邊 -->
            <div id="loginModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            <h4>請登入</h4>
                        </div>
                        <div class="modal-body">
                            <form  action=""  method="POST">
                                <div class="form-group">
                                    <label for="userNameTextBox">
                                        <span class="glyphicon glyphicon-user"></span> 帳號
                                    </label>
                                    <input type="text" id="userNameTextBox" class="form-control" name="account"placeholder="輸入帳號或E-mail" />
                                </div>
                                <div class="form-group">
                                    <label for="passwordTextBox">
                                        <span class="glyphicon glyphicon-lock"></span> 密碼
                                    </label>
                                    <input type="password" id="passwordTextBox" class="form-control" name="password"placeholder="請在此輸入密碼">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="rememberMeCheckBox" checked /> 記住我(下次自動登入)
                                    </label>
                                </div>
                                <div class="pull-right">
                                    <input type="submit" id="loginButton" class="btn btn-success" action=""  method="POST">
                                        <span class="glyphicon glyphicon-off"></span> 登入
                                    </button>
                                    <button type="submit" id="cancelButton" class="btn btn-default" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> 取消
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p>
                                還不是會員嗎? <a href="https://practice-oic1314.c9users.io/Fish/%E6%9C%83%E5%93%A1%E7%99%BB%E5%85%A5.html">加入我們</a> |
                                <a href="#">忘記密碼?</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>
    // init.
    $(function() {

            // Lab 程式:

            $("#triggerLoginButton").click(function() {
                $("#loginModal").modal({
                    backdrop: "static"
                });
            });

            $("#loginButton").click(function() {
                // 資料檢查
                // if (OK) {
                $("#loginModal").modal("hide");
            })

            // $("#loginModal").on("hidden.bs.modal", function () {
            //     alert("對話盒已關閉");
            // })











        }) // end of init.
        
        
    </script>
        <?php                      
    require_once('mysqltest.php');
    $account=$_POST["account"];
    $password=$_POST["password"];
    
    if($account!='' && $password!=''){
        $result=$db->query("SELECT * FROM myfish WHERE account='$account' AND password='$password'");
        if(mysqli_num_rows($result)==0){
            echo "<script>alert('抱歉 帳密錯誤 在試看看');</script>";
            mysqli_close($db);
        }else{
            echo"<script>location.href = 'https://practice-oic1314.c9users.io/Fish/%E7%99%BB%E5%85%A5%E6%88%90%E5%8A%9F.php';</script>";
            mysqli_close($db);
        }
    }else {
        echo "<script>alert('請輸入帳密喔!');</script>";
    }

    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.toast.js"></script>
    

</body>

</html>
