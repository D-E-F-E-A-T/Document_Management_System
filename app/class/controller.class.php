<?php
class Controller {
    private $path;

    public function __construct() {
        $this->path = 'app/controller/';
    }

    public function load($filename) {
        global $notes;
        global $user;
        
        return include $this->path . $filename . '.con.php';
    }
}
?>