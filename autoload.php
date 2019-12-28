<?php
$debug              = true;

$mysqlHost          = "mysql";
$mysqlUsername      = "root";
$mysqlPassword      = "root";
$mysqlDatabase      = "notes";

$language = "nl";

if ($debug === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

foreach (glob("app/class/*.php") as $file) { include $file; }

$mysql          = new mysqli($mysqlHost, $mysqlUsername, $mysqlPassword, $mysqlDatabase);
$path           = new Path();
$template       = new Template();
$views          = new Views();
$controller     = new Controller();
$profile        = new Profile();
$notes          = new Notes();
$profile        = new Profile();
$user           = new User();
$bootstrap      = new Bootstrap();
$dateTime       = new DT($language);
$b64            = new Base64();
$lang           = new Language($language);
$dashboard      = new Dashboard();
$logs           = new Log();
?>