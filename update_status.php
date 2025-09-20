<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = intval($_GET['id']);
    $status = $_GET['status'];

    $conn = new mysqli("localhost", "root", "", "myshop");

    // Protect against SQL injection
    $stmt = $conn->prepare("UPDATE requests SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);
    if ($stmt->execute()) {
        header("Location: admin.php?msg=Status+updated");
        exit();
    } else {
        echo "Error updating status: " . $conn->error;
    }
} else {
    header("Location: admin.php");
    exit();
}
?>
