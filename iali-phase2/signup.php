<?php
session_start();
require_once('db_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT userID FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        // User already exists with this email
        $_SESSION['signup_error'] = 'User with this email already exists';
        header('Location: signup.html');
        exit();
    } else {
        // Insert user into database
        $stmt = $conn->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();

        $_SESSION['signup_success'] = 'User created successfully';
        header('Location: login.html');
        exit();
    }
} else {
    // Invalid request
    header('Location: signup.html');
    exit();
}