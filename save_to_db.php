<?php

$servername = "localhost";
$db_username = "vimal";
$db_password = "1234";
$db_name = "electric_user";
$connection = new mysqli($servername, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("Connection Failed:- " . $connection->error);
}
$name = $_POST["name"];
$number = $_POST["number"];
$password = $_POST["password"];

$user = "insert into user values((select max(ID)+1 from password), '$name', '$number');";
$pass = "insert into password values((select max(ID) from user), '$password');";

mysqli_query($connection, $user);
mysqli_query($connection, $pass);
header('location: login.php');
$connection->close();