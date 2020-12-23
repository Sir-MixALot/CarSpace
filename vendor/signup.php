<?php
session_start();
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password=md5($password);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    $check_mail = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($check_user) > 0){
            $_SESSION['message'] = 'This login is already taken! Please choose another one.';
            header('Location: ../index.php');
            }else if(mysqli_num_rows($check_mail) > 0){
            $_SESSION['message'] = 'A user with such MAIL is already registered! Please choose another one.';
            header('Location: ../index.php');
            }else{
            mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
            $check_user = mysqli_query( $connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'" );
            $user = mysqli_fetch_assoc( $check_user );
            $id = $user['id'];
            $_SESSION['user'] = [
                'id' => $id,
                'login' => $user['login'],
                'email' => $user['email'],
                'password' => $user['password']
            ];
            mysqli_query($connect, "INSERT INTO `carts` (`cart_id`, `id`) VALUES (NULL, '$id')");
            header('Location: ../main.php');
        }
    