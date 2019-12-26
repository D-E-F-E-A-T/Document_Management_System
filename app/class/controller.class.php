<?php
class Controller {
    private $path;

    public function __construct() {
        $this->path = 'app/controller/';
    }

    public function load($filename) {
        global $template, $notes, $todos, $user, $profile, $bootstrap;
        
        return include $this->path . $filename . '.con.php';
    }
}
?>