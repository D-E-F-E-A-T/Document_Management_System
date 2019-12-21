<?php
// Voor debugging aan in live modus uit zetten.
$debug          = true;

// MySQL gegevens
$sqlHost        = "mysql";
$sqlUsername    = "root";
$sqlPassword    = "root";
$sqlDatabase    = "notes";

$lang = "en";

if ($debug === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

foreach (glob("app/class/*.php") as $file) { include $file; }

$mysql = new mysqli($sqlHost, $sqlUsername, $sqlPassword, $sqlDatabase);
$template = new Template("app/assets", $lang);
$views = new Views();
$controller = new Controller();

$notes = new Notes();
$profile = new Profile();
$user = new User();
?>