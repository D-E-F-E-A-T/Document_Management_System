<?php echo $notes->deleteNote($_GET["id"]); ?>
<?php header("Location: index.php?page=notes&action=view");