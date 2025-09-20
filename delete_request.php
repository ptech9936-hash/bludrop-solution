<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn = new mysqli("localhost", "root", "", "myshop");

    $stmt = $conn->prepare("DELETE FROM requests WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: admin.php?msg=Request+deleted");
        exit();
    } else {
        echo "Error deleting request: " . $conn->error;
    }
} else {
    header("Location: admin.php");
    exit();
}
?>
