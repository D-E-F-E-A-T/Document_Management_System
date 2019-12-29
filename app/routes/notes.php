<?php
if (isset($_GET["action"]) && !empty($_GET["action"])) {
    if ($_GET["action"] === "view") {
        $views->load("global/head");
        $views->load("notes/view");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "new") {
        $controller->load("notes/new");
        $views->load("global/head");
        $views->load("notes/new");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "edit") {
        $controller->load("notes/edit");
        $views->load("global/head");
        $views->load("notes/edit");
        $views->load("global/footer");
    } elseif ($_GET["action"] === "delete") {
        $controller->load("notes/delete");
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
