<?php
class Controller
{
    public function load($filename)
    {
        global $mysql,
            $template,
            $notes,
            $lang,
            $user,
            $profile,
            $bootstrap,
            $path,
            $logs,
            $settings;

        return include $path->getPath("controller") . $filename . '.con.php';
    }
}
?>
