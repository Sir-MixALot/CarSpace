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
        <title>Главная</title>

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
    require_once 'vendor/connection.php';
    $all  = mysqli_query($connect, "SELECT * FROM `cars`");
    if($all){
        $rows = mysqli_num_rows($all);
        for ($i = 0 ; $i < $rows ; $i++)
        {
            $row = mysqli_fetch_row($all);
                for ($j = 0 ; $j < count($rows) ; $j++){
                    echo
                    '<form method="POST" action="vendor/transition.php"><div class="card"><img src="' .$row[6]. '"/>
                    <p><input type="text" name="model" value="'.$row[1].'" readonly></input></p>
                    <button>Подробнее</button></div></form>';
                }
        }
        
    }
    ?>   
    </div>
    </body>
</html>