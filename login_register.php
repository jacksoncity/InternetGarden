<?php

session_start();
require_once 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username = '$user'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];

            if ($user['role'] === 'admin') {
                header("Location: admin-page.php");
            } else {
                header("Location: main.html");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = 'Incorrect username or password';
    header("Location: adminlogin.php");
    exit;
}
