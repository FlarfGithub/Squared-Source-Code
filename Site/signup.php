<?php
session_start();

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    $_SESSION['messages'][] = 'Please fill all required fields';
    header('Location: register.php');
    exit;
}

if ($data['password'] !== $data['password_confirm']) {
    header('Location: register.php');
    $_SESSION['messages'][] = 'Password and Confirm password should match!';
    exit;
}

$dsn = 'mysql:dbname=www7874_exoro;host=54.38.50.59';
$dbUser = 'www7874_exoro';
$dbPassword = 'dYuX9eN7vhG6B4JRAagi';

try {
$connection = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $exception) {
    $_SESSION['messages'][] = 'Connection failed: '. $exception->getMessage();
    header('Location: register.php');
    exit;
}