<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $profile->passwordChange($_SESSION["dms_username"], null, $_POST["new_password_1"], $_POST["new_password_2"]);
} else {}
?>