<?header("Content-type: text/html; charset=utf-8");
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

    </script>
    <script src="js/bootstrap.min.js"></script>
    <script style="text/javascript" src="js/auth.js"></script>
</head>
<body>
<form id="auth_form">
    <div id = "response"></div>
    <input type="text" name="login" id="login" placeholder="Введите логин"/><br /><br />
    <input type="password" name="pass" id="pass" placeholder="Введите пароль"/><br />
    <a href="#">Забыли пароль?</a><br />
    <input type="button" value="Войти" class="butn" onclick="auth();">
</form>



</body>
</html>