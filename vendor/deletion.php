<?php
session_start();
require_once 'connection.php';
$login=$_SESSION['user']['login'];
mysqli_query($connect, "DELETE FROM `users` WHERE `login` = '$login'");
unset($_SESSION['user']);
header('Location: ../index.php');
?>