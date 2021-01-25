<?php
include_once('dbFunction.php');
if($_POST['logout']){

    session_unset();

    session_destroy();
}
if(!($_SESSION)){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title>Авторизация и Регистрация ООП</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<div class="container">
    <section>
        <div id="container" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form name="login" method="post" >
                        <h1>Добро пожаловать!</h1>
                        <p>
                            <label for="emailid" class="uname"><?=$_SESSION['username']?></label>
                        </p>
                        <p>
                            <label for="email" class="youpasswd"><?=$_SESSION['email']?></label>
                        </p>
                        <p class="login button">
                            <input type="submit" name="logout" value="Выйти" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
