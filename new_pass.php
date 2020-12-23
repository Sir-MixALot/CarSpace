<?php
session_start();
if($_SESSION['user']){
    header('Location: main.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="img/icon.png">
    <title>Новый пароль</title>
    </head>
    <body>
        <h2 id="n_p">Забыли пароль?</h2>
        <h2 id="n_p">Введите свой логин и email и выберите новый пароль:</h2>
        <div class="container" id="container">
            <form method="POST" action="vendor/f_pass.php">
                <input type="text" name="login" placeholder="Login" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" id="password" name="password" placeholder="Новый пароль" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Должно быть 8 символов верхнего и нижнего регистра, а так же цифры!"/>
                <input type="password" id="confirm-pass" name="confirm-pass" placeholder="Повторить пароль" required />
                <button type="submit" id="btn1">Сменить</button>
                <?php
                if($_SESSION['message']){
                    echo '<p id="message"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
                <script src="js/form_validation.js"></script>
            </form>
        </div>  
    </body>
</html>