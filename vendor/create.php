<?php


require_once '../config/connect.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password')");

header('location: /');