<?php

$servername = "localhost";
$db_username = "vimal";
$db_password = "1234";
$db_name = "electric_user";
$connection = new mysqli($servername, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("Connection Failed:- " . $connection->error);
}
$number = $_POST["number"];
$password = $_POST["password"];
$query = "select Name from user,
            (select ID from password where password.password = '$password') pass 
                where user.Mobile_number = '$number' and pass.ID=user.ID";

$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) == 1) {
    header('location: home.html');
} else {
    echo "You are not a registered user. Redirecting to sign up page.";
    sleep(2);
    header('location: signup.php');
}
$connection->close();