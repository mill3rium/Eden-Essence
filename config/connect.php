<?php


// $connect = mysqli_connect(host: "localhost", user: "root", password: "root", database: "crud");
$connect = mysqli_connect("localhost","root", "root", "crud");


if(!$connect){
	die("Error: wrong data!");	
}