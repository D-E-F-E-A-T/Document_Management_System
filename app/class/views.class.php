<?php
class Views {
    private $path;

    public function __construct() {
        $this->path = 'app/views/';
    }

    public function load($filename) {
        global $template;

        global $notes;
        global $todos;
        global $user;

        return include $this->path . $filename . '.view.php';
    }
}
?>