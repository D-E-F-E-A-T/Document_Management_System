<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notes->editNoteSave($_POST["title"], $_POST["note"], $_GET["id"]);
    header("Location: index.php?page=notes&action=view");
}
?>