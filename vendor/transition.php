<?php
session_start();
require_once 'connection.php';
$model = $_POST['model'];
$check_car = mysqli_query( $connect, "SELECT * FROM `cars` WHERE `model` = '$model'" );
if ( mysqli_num_rows( $check_car ) > 0 ) {

    $car = mysqli_fetch_assoc( $check_car );

    $_SESSION['car'] = [
        'id' => $car['car_id'],
        'model' => $car['model'],
        'speed' => $car['speed'],
        'type' => $car['type'],
        'description' => $car['description'],
        'price' => $car['price'],
        'img' => $car['img']
    ];

    if ( $_SESSION['user']) {
        header( 'Location: ../info.php' );
    } 

}