<?php
if(isset($_GET["action"]) && !empty($_GET["action"])) {
    if($_GET["action"] === "dashboard") {

        $views->load("global/head");
        $views->load("admin/dashboard");
        $views->load("global/footer");

    } else if($_GET["action"] === "password") {

        $views->load("global/head");
        $views->load("profile/password");
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