<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_register_db";

// ساخت اتصال
$conn = new mysqli($servername, $username, $password, $database);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال برقرار نشد: " . $conn->connect_error);
}
?>
