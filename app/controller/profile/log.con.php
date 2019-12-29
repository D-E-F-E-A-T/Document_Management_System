<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $logs->clean();
    header("Location: index.php?page=profile&action=log");
}
?>
