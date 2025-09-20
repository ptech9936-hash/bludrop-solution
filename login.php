<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $fullname, $hashed);
    if($stmt->num_rows == 1){
        $stmt->fetch();
        if(password_verify($password, $hashed)){
            $_SESSION['customer'] = $id;
            $_SESSION['customer_name'] = $fullname;
            header("Location: myshop.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Email not registered'); window.history.back();</script>";
    }
}
?>
