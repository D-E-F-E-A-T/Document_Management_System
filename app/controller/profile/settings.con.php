<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $settings->save("color", $_POST["color"]);
    header("Location: index.php?page=profile&action=view");
}
?>
