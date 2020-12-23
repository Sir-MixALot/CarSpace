<?php
session_start();    
    require_once 'connection.php';

    $login = $_POST['login'];
    $email = $_POST['email'];  
    $password = md5($_POST['password']);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `email` = '$email'");
    if (mysqli_num_rows($check_user) == 0){
        header('Location: ../new_pass.php');
        $_SESSION['message'] = 'Нет пользователей с таким логином и email!';
    }
    else{
        mysqli_query($connect, "UPDATE `users` SET `password` = '$password' WHERE `login` = '$login' and `email` = '$email'");
        header('Location: ../index.php');
        $_SESSION['message3'] = 'Пароль успешно изменен!';
    }
    

    ?>