<?php
session_start();
require_once 'connection.php';
$user_id = $_SESSION['user']['id'];
$all_carts = mysqli_query($connect, "SELECT * FROM `carts` WHERE `id` = '$user_id'" );

if ($all_carts){

    $cart_values = mysqli_fetch_assoc($all_carts);
    $cart_id = $cart_values['cart_id'];
    mysqli_query($connect, "DELETE FROM `cart_items` WHERE `cart_id` = '$cart_id'" );
    $_SESSION['message'] = 'Заказ был оформлен успешно!';
    $_SESSION['message2'] = 'Дополнительная информация по поводу вашего заказа будет выслана на вашу почту.';
    $_SESSION['message3'] = 'Удачного дня!';
    header('Location: ../cart.php');
}