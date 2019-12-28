<?php
class Views {
    public function load($filename) {
        global $template, $notes, $lang, $user, $profile, $bootstrap, $path, $dashboard, $logs;

        return include $path->getPath("views") . $filename . '.view.php';
    }
}
?>