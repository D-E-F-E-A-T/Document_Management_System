<?php
class Views {
    public function load($filename) {
        global $template, $notes, $lang, $user, $profile, $bootstrap, $path;

        return include $path->getPath("views") . $filename . '.view.php';
    }
}
?>