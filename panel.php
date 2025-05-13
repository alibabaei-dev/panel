<?php
session_start();
require 'db.php';

$conn = new mysqli("localhost", "root", "", "user_register_db");

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "کاربر پیدا نشد!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Panel</title>
    <link rel='stylesheet' href='style-panel.css'>
</head>
<body>
<header class="topbar">
    <div class="user-info">
        <span>You are login with <?php echo $user['email']; ?>!</span>
    </div>
</header>

<div class="container">
    <aside class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="panel.php">Dashboard</a></li>
            <li><a href="?page=notepad">Note pad training</a></li>
            <li><a href="#">API training</a></li>
            <li><a href="panel.php?page=filemanager">File Manager training</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <section class="content">
        <?php
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'filemanager') {
        include 'filemanager.php';
    } elseif ($_GET['page'] === 'notepad') {
        include 'notepad.php';
    } else {
        echo "<h1>صفحه مورد نظر پیدا نشد</h1>";
    }
} else {
    echo "<h1>Welcome to your panel</h1>";
    echo "<p>Here show your content</p>";
}
?>

        </section>
    </main>
</div>
</body>
</html>
