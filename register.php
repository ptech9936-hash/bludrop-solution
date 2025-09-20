<?php
session_start();
include 'db.php'; // Your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check passwords match
    if($password !== $confirm_password){
        echo "<script>alert('Passwords do not match'); window.history.back();</script>";
        exit();
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0){
        echo "<script>alert('Email already registered'); window.history.back();</script>";
        exit();
    }

    // Hash password and insert user
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashed);
    if($stmt->execute()){
        // Redirect to login modal or login page
        header("Location: login.php");
        exit();
    } else {
        echo "<script>alert('Registration failed'); window.history.back();</script>";
    }
}
?>
