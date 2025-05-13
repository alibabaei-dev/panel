<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_register_db";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD' ] == 'POST') {

    $title = trim($_POST["title"]);
    $content = trim($_POST["content"]);


    if (!empty($title) && !empty($content)) {


        $stmt = $conn->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $content);

    if ($stmt->execute()) {
        header("Location: panel.php?page=notepad&success=1");
        exit();
    } else {
        echo"error in save note" . $stmt->error;
    }

    $stmt ->close();
} else {
    echo "It should not be empty.";
}
}

$conn->close();
?>

