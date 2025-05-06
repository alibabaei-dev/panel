<?php
// اتصال به دیتابیس
require 'db.php';

// گرفتن اطلاعات از فرم
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

// چک کردن اینکه رمز عبور و تکرار آن یکی باشند
if ($password !== $password_repeat) {
    echo "password repeat is not match";
    exit(); // متوقف کردن اجرای اسکریپت اگر رمزها یکی نباشند
}

// هش کردن رمز عبور برای امنیت بیشتر
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// آماده کردن دستور SQL برای وارد کردن اطلاعات در دیتابیس
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

// اجرای دستور SQL
if ($conn->query($sql) === TRUE) {
    echo "register sucsesfully";
} else {
    echo "error " . $conn->error;
}

// بستن اتصال
$conn->close();
?>
