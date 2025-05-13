<?php
session_start();


require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;


$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        header("Location: panel.php");
        exit();
    } else {
        echo "your password incorrect";
    }
} else {
    echo "no match email";
}

$conn->close();


