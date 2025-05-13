<div class="notepad-container">

<h1>Add New Note</h1>

<form action="notepad-save.php" method="post" class="notepad-form">
    <label for="title">Note Title :</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Note :</label>
    <textarea name="content" id="content" rows="6" required></textarea>

    <button type="submit" class="button">Save Note </button>
</form>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <p class="note-success">✅ یادداشت با موفقیت ذخیره شد.</p>
<?php endif; ?>

<hr>

<?php
$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<?php if ($result->num_rows > 0): ?>
    <h3>Note List  :</h3>
    <div class="note-list">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="note-item">
                <h4><?= htmlspecialchars($row['title']) ?></h4>
                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                <small>time: <?= $row['created_at'] ?></small>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p> No have Note  .</p>
<?php endif; ?>

</div>
