<?php include "autoload.php"; ?>
<?php session_start(); ?>
<?php if (!$user->doSignInCheck() === true) {
    header("Location: sign-in.php");
} ?>
<?php if (isset($_GET["page"]) && !empty($_GET["page"])) {
    if ($_GET["page"] === "dashboard") {
        $views->load("global/head");
        $views->load("dashboard");
        $views->load("global/footer");
    } elseif ($_GET["page"] === "notes") {
        include "app/routes/notes.php";
    } elseif ($_GET["page"] === "profile") {
        include "app/routes/profile.php";
    } else {
        $views->load("global/head");
        $views->load("global/404");
        $views->load("global/footer");
    }
} else {
    header("Location: index.php?page=dashboard");
} ?>
