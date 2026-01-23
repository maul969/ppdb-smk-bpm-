<?php
session_start(); 

$valid_users = [
    'hugo@gmail.com' => ['password' => '1234', 'role' => 'student', 'name' => 'Hugo'],
    'sugiarto@gmail.com' => ['password' => '4321', 'role' => 'teacher', 'name' => 'Sugiarto']
];

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    $name = $_POST['name'];

    if (isset($valid_users[$email]) && $valid_users[$email]['password'] === $password) {
        if ($valid_users[$email]['role'] === $userType) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $userType;
            $_SESSION['name'] = $valid_users[$email]['name']; 

            header('Location: home.php');
            exit;
        } else {
            $error_message = "Role does not match the email provided.";
        }
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>
