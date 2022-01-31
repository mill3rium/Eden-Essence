<?php


require_once '../config/connect.php';

$email = $_POST['footer_email'];

mysqli_query($connect, "INSERT INTO `emails` (`id`, `email`) VALUES (NULL, '$email')
");

header('location: /');