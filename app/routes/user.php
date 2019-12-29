<?php
if (isset($_GET["action"]) && !empty($_GET["action"])) {
    if ($_GET["action"] === "sign-in") {
        $controller->load("user/sign-in");
        $views->load("user/sign-in");
    } elseif ($_GET["action"] === "sign-out") {
        $controller->load("user/sign-out");
        $views->load("user/sign-out");
    } else {
        $views->load("global/head");
        $views->load("global/404");
        $views->load("global/footer");
    }
} else {
    $views->load("global/head");
    $views->load("global/404");
    $views->load("global/footer");
}
?>
