<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notes->makeNoteSave($_POST["title"], $_POST["note"]);
    header("Location: index.php?page=notes&action=view");
}
?>
