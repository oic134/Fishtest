<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>捕魚達人登入</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Sniglet|Raleway:900);
    body,
    html {
        height: 100%;
        padding: 0;
        margin: 0;
        font-family: 'Sniglet', cursive;
    }
    
    h1 {
        font-weight: normal;
        font-size: 4em;
        font-family: 'Raleway', sans-serif;
        margin: 0 auto;
        margin-top: 30px;
        width: 500px;
        color: #F90;
        text-align: center;
    }
    /* Animation webkit */
    
    @-webkit-keyframes myfirst {
        0% {
            margin-left: -235px
        }
        90% {
            margin-left: 100%;
        }
        100% {
            margin-left: 100%;
        }
    }
    /* Animation */
    
    @keyframes myfirst {
        0% {
            margin-left: -235px
        }
        70% {
            margin-left: 100%;
        }
        100% {
            margin-left: 100%;
        }
    }
    
    .fish {
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
        width: 235px;
        height: 104px;
        margin-left: -235px;
        position: absolute;
        animation: myfirst 24s;
        -webkit-animation: myfirst 24s;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
        animation-timing-function: linear;
        -webkit-animation-timing-function: linear;
    }
    
    #fish {
        top: 120px;
    }
    
    #fish2 {
        top: 260px;
        animation-delay: 12s;
        -webkit-animation-delay: 12s;
    }
    
    header {
        height: 160px;
        background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
    }
    
    #form {
        height: 100%;
        background-color: #98d4f3;
        overflow: hidden;
        position: relative;
    }
    
    form {
        margin: 0 auto;
        width: 500px;
        padding-top: 40px;
        color: white;
        position: relative;
    }
    
    label,
    input,
    textarea {
        display: block;
    }
    
    input,
    textarea {
        width: 500px;
        border: none;
        border-radius: 20px;
        outline: none;
        padding: 10px;
        font-family: 'Sniglet', cursive;
        font-size: 1em;
        color: #676767;
        transition: border 0.5s;
        -webkit-transition: border 0.5s;
        -moz-transition: border 0.5s;
        -o-transition: border 0.5s;
        border: solid 3px #98d4f3;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    input:focus,
    textarea:focus {
        border: solid 3px #77bde0;
    }
    
    textarea {
        height: 100px;
        resize: none;
        overflow: auto;
    }
    
    input[type="submit"] {
        background-color: #F90;
        color: white;
        height: 50px;
        cursor: pointer;
        margin-top: 30px;
        font-size: 1.29em;
        font-family: 'Sniglet', cursive;
        -webkit-transition: background-color 0.5s;
        -moz-transition: background-color 0.5s;
        -o-transition: background-color 0.5s;
        transition: background-color 0.5s;
    }
    
    input[type="submit"]:hover {
        background-color: #e58f0e;
    }
    
    label {
        font-size: 1.5em;
        margin-top: 20px;
        padding-left: 20px;
    }
    
    .formgroup,
    .formgroup-active,
    .formgroup-error {
        background-repeat: no-repeat;
        background-position: right bottom;
        background-size: 10.5%;
        transition: background-image 0.7s;
        -webkit-transition: background-image 0.7s;
        -moz-transition: background-image 0.7s;
        -o-transition: background-image 0.7s;
        width: 566px;
        padding-top: 2px;
    }
    
    .formgroup {
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');
    }
    
    .formgroup-active {
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
    }
    
    .formgroup-error {
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
        color: red;
    }
    
    input {
        width: calc(100% - 2em);
        margin: 1em;
        display: block;
        font-size: 14pt;
        padding: .5em;
    }
    </style>
</head>

<body>
  
    <div id="form">
        <h1>註冊會員</h1>
        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>
        <form id="waterform" method="post">
            <div class="formgroup" id="name-form">
                <label for="name">帳號*</label>
                <input type="text" id="name" name="account" />
            </div>
            <div class="formgroup" id="email-form">
                <label for="email"> e-mail*</label>
                <input type="email" id="email" name="email" />
            </div>
            <div class="formgroup" id="message-form">
                <label for="text">密碼*</label>
                <input type="password" id="password" name="password" />
            </div>
            <input type="submit" value="恭喜您 即將成為捕魚大師!">
             <a href="https://practice-oic1314.c9users.io/Fish/%E7%99%BB%E5%85%A5%E6%88%90%E5%8A%9F.php"></a>
            
        </form>
    </div>
</body>

</html>
