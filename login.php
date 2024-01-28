<?php
session_start();

// Hardcoded credentials (replace with your actual credentials)
$valid_username = "admin";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
