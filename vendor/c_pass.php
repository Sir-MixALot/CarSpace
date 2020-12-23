<?php
    session_start();
    require_once 'connection.php';

    $newpassword = $_POST['password'];

    $login = $_SESSION['user']['login'];
    $email = $_SESSION['user']['email'];

    $newpassword = md5( $newpassword);
    mysqli_query( $connect, "UPDATE `users` SET `password` = '$newpassword' WHERE `login` = '$login' and `email` = '$email'" );
    header( 'Location: ../index.php' );
    $_SESSION['message3'] = 'Пароль успешно изменен!';
    unset ($_SESSION['user']);
?>