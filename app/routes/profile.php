<?php
if (isset($_GET["action"]) && !empty($_GET["action"])) {
    if ($_GET["action"] === "view") {
        $views->load("global/head");
        $views->load("profile/view");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "password") {
        $controller->load("profile/password");
        $views->load("global/head");
        $views->load("profile/password");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "log") {
        $controller->load("profile/log");
        $views->load("global/head");
        $views->load("profile/log");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "db") {
        $controller->load("profile/db");
        $views->load("global/head");
        $views->load("profile/db");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "settings") {
        $controller->load("profile/settings");
        $views->load("global/head");
        $views->load("profile/settings");
        $views->load("global/footer");
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
