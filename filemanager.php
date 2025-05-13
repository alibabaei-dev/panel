

<div class="filemanager-box">

<?php

if (isset($_POST['delete_file'])) {
    $fileToDelete = basename($_POST['delete_file']); // امنیت
    $fullPath = 'files/uploads/' . $fileToDelete;

    if (file_exists($fullPath)) {
        unlink($fullPath);
        echo "<p style='color: green;'>File remove: $fileToDelete</p>";
    } else {
        echo "<p style='color: red;'>File Not Found!</p>";
    }
}
?>

<?php
// آپلود فایل
if (isset($_POST['upload_btn']) && isset($_FILES['upload_file'])) {
    $upload_dir = 'files/uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $filename = basename($_FILES['upload_file']['name']);
    $targetFile = $upload_dir . $filename;

    if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $targetFile)) {
        echo "<p style='color: green;'> upload has been sucsesfully!</p>";
    } else {
        echo "<p style='color: red;'>upload failde.</p>";
    }
}
?>

<!-- فرم آپلود فایل -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_file" required>
    <button type="submit" name="upload_btn">upload file </button>
</form>

<?php
// لیست فایل‌ها
$directory = 'files/uploads/';
if (is_dir($directory)) {
    $files = array_diff(scandir($directory), ['.', '..']);
    echo "<h2>files list :</h2><ul>";
    foreach ($files as $file) {
        $filepath = $directory . '/' . $file;
        $size = filesize($filepath);
        $size_kb = round($size / 1024, 2);
    
        echo "<li>" . htmlspecialchars($file) . " - " . $size_kb . " KB";
        echo " <form method='post' style='display:inline'>
                <input type='hidden' name='delete_file' value='" . htmlspecialchars($file) . "'>
                <button type='submit'> Delete</button>
            </form></li>";
    }
    
    echo "</ul>";
} else {
    echo "<p>folder not found  !</p>";
}
?>
</div>
