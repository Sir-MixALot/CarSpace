<?php
session_start();

    if(!$_SESSION['user']){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="icon" href="img/icon.png">
        <title>Профиль</title>

    </head>
    <body>
    <nav class="navbar">
        <script src="mainNav.js"></script>
        <a href="main.php" class="logo">АвтоКаталог</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="news.php" class="nav-links">Новости</a>
            </li>
            <li>
                <a href="about.php" class="nav-links">О программе</a>
            </li>
            <li>
                <a href="" onclick="msg();" class="nav-links">Справка</a>
                <script src="js/reference.js"></script>
            </li>
            <li>
                <a href="cart.php" class="nav-links" title="Ваша корзина">Корзина</a>
            </li>
            <li>
                <a href="profile.php" class="nav-links" title="Профиль"><?= $_SESSION['user']['login'] ?></a>
            </li>
            <li>
                <a href="vendor/logout.php" class="nav-links">Выйти</a>
            </li>
        </ul>
    </nav>
    <div class="content">
        <h1 id="main-h1">Привет, <?= $_SESSION['user']['login'] ?>!</h1>
        <h1>Здесь вы можете изменить свои данные:</h1>
        <div class="navigation-row">
            <form method="POST" action="vendor/c_pass.php">
            <input type="password" id="password" name="password" placeholder="Новый пароль" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Должно быть 8 символов верхнего и нижнеего регистра и цифры!"/>
            <input type="password" id="confirm-pass" name="confirm-pass" placeholder="Повторите пароль" required />
            <button type="submit">Сменить</button>
            <script src="js/form_validation.js"></script>
            </form>
        </div>
        <h1>Или можете удалить аккаунт:</h1>
        <form>
        <button formaction="vendor/deletion.php">Удалить</button>
        </form>
    </div>
    </body>
</html>