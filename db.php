<?php
$host = "localhost"; 
$user = "root";      // change if you set a DB user
$pass = "";          // change if you have a password
$dbname = "myshop";

$conn = new mysqli('localhost', 'root', '', 'myshop');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
