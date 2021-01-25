<?php
include_once('dbFunction.php');

$funObj = new dbFunction();
if($_POST['login']){
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $user = $funObj->Login($emailid, $password);
    if ($user) {
        header("location:home.php");
    } else {
        echo "<script>alert('Почта / пароль не совподает')</script>";
    }
}
if($_POST['register']){
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if($password == $confirmPassword){
        $email = $funObj->isUserExist($emailid);
        if(!$email){
            $register = $funObj->UserRegister($username, $emailid, $password);
            if($register){
                echo "<script>alert('Вы успешно прошли регистрацию!')</script>";
            }else{
                echo "<script>alert('Вы не прошли регистрацию!')</script>";
            }
        } else {
            echo "<script>alert('Выберите другую почту!')</script>";
        }
    } else {
        echo "<script>alert('Пароль не правильный!')</script>";

    }
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
            <header>
                <h1>Форма Авторизации и Регистрации</h1>
            </header>
            <section>
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form name="login" method="post" action="">
                                <h1>Авторизация</h1>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" >Ведите свою почту</label>
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="vasya@pupkin.ru"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p">Ведите свой пароль</label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Например. 123qwerTY" />
                                </p>
                                <p class="keeplogin">
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                    <label for="loginkeeping">Не выходить из системы?</label>
                                </p>
                                <p class="login button">
                                    <input type="submit" name="login" value="Войти" />
                                </p>
                                <p class="change_link">
                                    Не зарегистрированы ?
                                    <a href="#toregister" class="to_register">Присоединяйтесь</a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form name="login" method="post" action="">
                                <h1>Регистрация</h1>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Ведите логин</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Василий Пупкин" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" >Ведите свою почту</label>
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="vasya@pupkin.ru"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Предумайте свой пароль</label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Например. 123qwerTY"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Потвердите пароль</label>
                                    <input id="passwordsignup_confirm" name="confirm_password" required="required" type="password" placeholder="Например. 123qwerTY"/>
                                </p>
                                <p class="signin button">
                                    <input type="submit" name="register" value="Зарегистрироваться"/>
                                </p>
                                <p class="change_link">
                                    Уже зарегистрированы?
                                    <a href="#tologin" class="to_register">Пройдите и войдите</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
