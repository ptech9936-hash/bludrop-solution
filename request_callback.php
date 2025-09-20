<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "myshop");

// Collect form data
$full_name = $_POST['full_name'];
$phone     = $_POST['phone'];
$email     = $_POST['email'];
$service   = $_POST['service'];

// Insert into database
$stmt = $conn->prepare("INSERT INTO callback_requests (full_name, phone, email, service) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $full_name, $phone, $email, $service);
$stmt->execute();

// Send email to Admin
$adminEmail = "ptech9936@gmail.com";
$subject = "New Callback Request - $service";
$message = "
You have a new callback request:

Full Name: $full_name
Phone: $phone
Email: $email
Service Interested: $service

Login to the admin dashboard to take action.
";
$headers = "From: noreply@bluedrop.com";

mail($adminEmail, $subject, $message, $headers);

// Send confirmation to Customer
$customerMsg = "Dear $full_name,\n\nThank you for requesting a callback regarding $service. Our team will contact you soon.\n\n- BlueDrop Solutions";
mail($email, "Callback Request Confirmation", $customerMsg, $headers);

// Redirect
header("Location: thankyou.php");
exit();
?>
