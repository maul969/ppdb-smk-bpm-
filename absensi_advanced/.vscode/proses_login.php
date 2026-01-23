<?php

$correct_email = "maul@gmail.com";
$correct_password = "2609";

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $correct_email && $username === $correct_username && $password === $correct_password) {
    header("Location: home.php");
    exit(); 
} else {
    echo "Login failed! Incorrect email, username, or password.";
}
?>
