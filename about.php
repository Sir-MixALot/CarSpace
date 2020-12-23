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
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="icon" href="img/icon.png">
        <title>О программе</title>

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
    <h1 id="about">Сайт АвтоКаталог - это онлайн-каталог, который в доступной форме содержит всю необходимую информацию о новых автомобилях.
С помощью нашего сайта вы легко сможете выбрать и купить самый оптимальный для вас новый автомобиль.
Также на нашем сайте актуальные новости из мира автомобилей.
АвтоКаталог избавит вас от просмотра десятков сайтов в поисках интересующей информации. Будем рады, если Вы сможете выбрать автомобиль своей мечты с помощью нашего автомобильного каталога!
Мы предлагаем принципиально новый и удобный формат подачи информации о новых автомобилях.
АвтоКаталог - выбирайте новые автомобили здесь!</h1>
    </body>
</html>