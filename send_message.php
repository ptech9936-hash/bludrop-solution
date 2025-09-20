<?php
// send_message.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Recipient email
    $to = "Ptech9936@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Message: " . $subject;

    // Email body
    $email_body = "
    You have received a new message from the contact form on your website.

    Full Name: $name
    Email: $email
    Subject: $subject
    Message:
    $message
    ";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Your message has been sent successfully. Thank you for contacting us!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Sorry, your message could not be sent. Please try again later.'); window.location.href='contact.php';</script>";
    }
} else {
    // If someone tries to access the script directly
    header("Location: contact.php");
    exit();
}
?>
