<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mysql->query("DELETE FROM dms_note WHERE archive = 1");
    header("Location: index.php?page=profile&action=view");
}
?>
