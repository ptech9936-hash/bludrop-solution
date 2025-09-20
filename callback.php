<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);

    // 1. Save to Database
    $conn = new mysqli("localhost", "root", "", "myshop");

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO callback_requests (name, phone, service) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $phone, $service);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // 2. Send Email Notification
    $to = "Ptech9936@gmail.com";  // Replace with admin email
    $subject = "New Call Back Request";
    $body = "You have a new callback request:\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n\n";
    $body .= "Check your dashboard for details.";
    $headers = "From: no-reply@myshop.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Request submitted successfully! We will contact you soon.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Request saved, but email could not be sent.'); window.location.href='index.php';</script>";
    }
}
?>
