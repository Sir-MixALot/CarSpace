<?php
session_start();
require_once 'connection.php';

$user_id = $_SESSION['user']['id'];
$car_id = $_SESSION['car']['id'];
$all_carts = mysqli_query($connect, "SELECT * FROM `carts` WHERE `id` = '$user_id'" );

if ( mysqli_num_rows( $all_carts) > 0 ) {

    $cart_values = mysqli_fetch_assoc($all_carts);
    $cart_id = $cart_values['cart_id'];
    $all_cart_items = mysqli_query($connect, "SELECT * FROM `cart_items` WHERE `cart_id` = '$cart_id' AND `car_id` = '$car_id'" );
    if(mysqli_num_rows( $all_cart_items) == 0 ){

        mysqli_query($connect, "INSERT INTO `cart_items` (`cart_item_id`, `cart_id`, `car_id`, `count`) VALUES (NULL, '$cart_id', '$car_id', 1)");
        header('Location: ../cart.php');
    }
    else if(mysqli_num_rows( $all_cart_items) > 0 ){

        $cart_item_values = mysqli_fetch_assoc($all_cart_items);
        $count = $cart_item_values['count'];
        $count = $count + 1;
        mysqli_query($connect, "UPDATE `cart_items` SET `count` = '$count' WHERE `cart_id` = '$cart_id' AND `car_id` = '$car_id'");
        header('Location: ../cart.php');
    }
}