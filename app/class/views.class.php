<?php
class Views {
    private $path;

    public function __construct() {
        $this->path = 'app/views/';
    }

    public function load($filename) {
        global $template, $notes, $todos, $user, $profile, $bootstrap;

        return include $this->path . $filename . '.view.php';
    }
}
?>