<?php include "autoload.php"; ?>
<?php session_start(); ?>
<?php //if($user->doSignInCheck() === true) { header("Location: index.php?page=sign-in"); } ?>
<?php //echo $user->doSignInCheck(); ?>
<?php
if(isset($_GET["page"]) && !empty($_GET["page"])) {
    if($_GET["page"] === "dashboard") {

        //$controller->load("test");

        $views->load("global/head");
        $views->load("dashboard");
        $views->load("global/footer");

    } else if($_GET["page"] === "notes") {
        include "app/routes/notes.php";
        
    } else if($_GET["page"] === "user") {
        include "app/routes/user.php";
        
    } else if($_GET["page"] === "profile") {
        include "app/routes/profile.php";
        
    } else {
        $views->load("global/head");
        $views->load("global/404");
        $views->load("global/footer");
    }
} else {
    header("Location: index.php?page=dashboard");
}
?>