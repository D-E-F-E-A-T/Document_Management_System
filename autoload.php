<?php
include "config.php";

if ($debug === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

foreach (glob("app/class/*.php") as $file) { include $file; }

$mysql          = new mysqli($sqlHost, $sqlUsername, $sqlPassword, $sqlDatabase);
$template       = new Template("app/assets", $lang);
$views          = new Views();
$controller     = new Controller();
$profile        = new Profile();
$notes          = new Notes();
$profile        = new Profile();
$user           = new User();
$bootstrap      = new Bootstrap();
$dateTime       = new DT($lang);
$baseSixtyFour  = new Base64();
?>