<?php
class Controller {
    private $path;

    public function __construct() {
        $this->path = 'app/controller/';
    }

    public function load($filename) {
        global $template;
        global $notes;
        global $todos;
        global $user;
        global $profile;
        global $bootstrap;
        
        return include $this->path . $filename . '.con.php';
    }
}
?>