<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($user->doSignIn($_POST["username"], $_POST["password"]) === true) {
        echo $user->loginCorrect();
    } else {
        echo $user->loginError();
        $user->logActivity($_POST["username"]);
    }
}
?>
