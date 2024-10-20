<?php
$servername = "localhost";
$db_username = "root"; // Default XAMPP username
$db_password = "@Aditri_1165"; // Your database password
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
