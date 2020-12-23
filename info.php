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
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="info.css">
        <link rel="icon" href="img/icon.png">
        <title>Информация</title>

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
    <?php
        echo
        '<img src="'.$_SESSION['car']['img'].'"/>
        <div class="info">
        <form>
        <h1>'.$_SESSION['car']['model'].'</h1>
        <h1>Тип: '.$_SESSION['car']['type'].'</h1>
        <h1>Макс. скорость: '.$_SESSION['car']['speed'].'</h1>
        <h1>Цена: '.$_SESSION['car']['price'].'$</h1>
        <h1>Описание</h1>
        <p>'.$_SESSION['car']['description'].'</p>
        <button formaction="vendor/addition.php">Добавить в корзину</button>
        </form>
        </div>';
    ?>
    </div>
    </body>
</html>