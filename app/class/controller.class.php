<?php
class Controller {

    public function load($filename) {
        global $template, $notes, $lang, $user, $profile, $bootstrap, $path;
        
        return include $path->getPath("controller") . $filename . '.con.php';
    }
}
?>