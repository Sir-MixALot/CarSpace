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
        <link rel="stylesheet" href="cart.css">
        <link rel="icon" href="img/icon.png">
        <title>Корзина</title>

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
        $fullprice = 0;
        $user_id = $_SESSION['user']['id'];
        $all_carts = mysqli_query($connect, "SELECT * FROM `carts` WHERE `id` = '$user_id'" );
        if ( mysqli_num_rows( $all_carts) > 0 ) {
            $cart_values = mysqli_fetch_assoc($all_carts);
            $cart_id = $cart_values['cart_id'];
            $all_cart_items = mysqli_query($connect, "SELECT * FROM `cart_items` WHERE `cart_id` = '$cart_id'" );
                if(mysqli_num_rows( $all_cart_items) > 0 ){
                    echo"<h1>Ваш заказ:</h1>";
                    $items_count = mysqli_num_rows($all_cart_items);
                    for($i = 0; $i<$items_count; $i++){
                        $item_row = mysqli_fetch_assoc($all_cart_items);
                        $car_id = $item_row['car_id'];
                            $count = $item_row['count'];
                            $img = mysqli_query($connect, "SELECT `img` FROM `cars` WHERE `car_id` = '$car_id'");
                            $img_value = mysqli_fetch_assoc($img);
                            $car_img = $img_value['img'];
                            $model = mysqli_query($connect, "SELECT `model` FROM `cars` WHERE `car_id` = '$car_id'");
                            $model_value = mysqli_fetch_assoc($model);
                            $car_model = $model_value['model'];
                            $price = mysqli_query($connect, "SELECT `price` FROM `cars` WHERE `car_id` = '$car_id'");
                            $price_value = mysqli_fetch_assoc($price);
                            $car_price = $price_value['price'];
                            $full_car_price = $car_price*$count;
                            echo
                            '<div class="order">
                            <img src="'.$car_img.'"/>
                            <h2>'.$car_model.'</h2>
                            <h2>Кол-во: '.$count.'</h2>
                            <h2>Цена: '.$full_car_price.'$</h2>
                            </div>';   
                            $fullprice = $fullprice+$full_car_price;
                    }
                    echo '<h1 class="full_price">Полная стоимость: '.$fullprice.'$</h1>
                    <form>
                    <button id="btn2" formaction="vendor/clear.php">Очистить</button>
                    <button id="btn1" formaction="vendor/ordering.php">Купить!</button>
                    </form>';           
                }
                else if(mysqli_num_rows( $all_cart_items) == 0 ){
                    echo '<h1 id="empty">Ваша корзина пуста!</h1>';
                    if($_SESSION['message']){
                        echo '<div class="order2"><h1> ' . $_SESSION['message'] . ' </h1>';
                    }
                    unset($_SESSION['message']);
                    if($_SESSION['message2']){
                        echo '<h1> ' . $_SESSION['message2'] . ' </h1>';
                    }
                    unset($_SESSION['message2']);
                    if($_SESSION['message3']){
                        echo '<h1> ' . $_SESSION['message3'] . ' </h1></div>';
                    }
                    unset($_SESSION['message3']);
                }
        }
    ?>
    </div>
    </body>
</html>