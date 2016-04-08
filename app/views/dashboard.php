<?php
session_start();
if($_SESSION['is_auth'] != true){
    header("Location: ../pi/");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <meta http-equiv=content-type content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Регистрация</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script style="text/javascript">

            $(document).on('click',"#demoView",function(){
                $("#ifr").attr('src', 'http://78.85.71.32:8082/vis/#DemoView');
            });
        $(document).on('click',"#ex",function(){
            $("#ifr").attr('src', 'http://78.85.71.32:8082/vis/#Start');
        });
    </script>


    <script src="js/bootstrap.min.js"></script>
    <script style="text/javascript" src="js/auth.js"></script>
    <script style="text/javascript" src="js/start.js"></script>
    <script style="text/javascript" src="js/send.js"></script>
</head>
<body>
<!--<div id="hid">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
        </div>
    </div>
</div>-->
<!--<button id='demoView'>demoView</button>
<button id='ex'>ex</button>-->
<!--<iframe width="300" height="300" frameborder="0" id="tt"></iframe>-->
<iframe style="display:none;" id="ifr" src="http://78.85.71.32:8082/vis/auth.html" width="100%" frameborder="none"></iframe>
<!--<iframe id="ifr2" width="300px" height="300px" src="http://78.85.71.32:8082/vis/#DemoView"></iframe>-->
<a href="/pi/logout">Выйти</a>
<a onclick="send();">Отправить</a>
</body>
</html>