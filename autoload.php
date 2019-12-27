<?php
$debug              = true;

$mysqlHost          = "mysql";
$mysqlUsername      = "root";
$mysqlPassword      = "root";
$mysqlDatabase      = "notes";

if ($debug === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

foreach (glob("app/class/*.php") as $file) { include $file; }

$mysql          = new mysqli($mysqlHost, $mysqlUsername, $mysqlPassword, $mysqlDatabase);
$template       = new Template("app/assets", "en");
$views          = new Views();
$controller     = new Controller();
$profile        = new Profile();
$notes          = new Notes();
$profile        = new Profile();
$user           = new User();
$bootstrap      = new Bootstrap();
$dateTime       = new DT("en");
$b64            = new Base64();
$lang           = new Language("en");
?>