<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profile->passwordChange(
        $_SESSION["dms_username"],
        null,
        $_POST["new_password_1"],
        $_POST["new_password_2"]
    );
    header("Location: index.php?page=profile&action=view");
}
?>
