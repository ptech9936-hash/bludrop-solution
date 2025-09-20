<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "myshop");

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];

// Save to DB
$sql = "INSERT INTO requests (name, phone, service) VALUES ('$name', '$phone', '$service')";
$conn->query($sql);

// Email Notification
$adminEmail = "ptech9936@gmail.com";
$subject = "New Call Back Request - BlueDrop Solutions";
$message = "
Hello Admin,

A new customer has requested a call back:

Name: $name
Phone: $phone
Service Interested: $service

Please log in to your admin panel to manage this request.

BlueDrop Solutions System
";

$headers = "From: no-reply@bluedrop.com";
mail($adminEmail, $subject, $message, $headers);

// Confirmation to user
echo "<script>alert('Your request has been received. We will call you soon!'); window.location.href='index.php';</script>";
?>
