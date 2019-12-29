<?php
class Settings
{
    public function form()
    {
        global $bootstrap;

        $content = '<form action="" method="POST">';
        $content .= $bootstrap->addFormField(
            "text",
            "color",
            LANG_PROFILE_SETTINGS_input,
            ""
        );
        $content .= $bootstrap->addButtonSubmit(LANG_PROFILE_SETTINGS_btn);
        $content .= '</form>';

        return $content;
    }

    public function save($key, $color)
    {
        global $mysql;
        $mysql->query(
            "UPDATE dms_settings SET s_value = '" .
                $color .
                "' WHERE s_key = '" .
                $key .
                "'"
        );
    }

    public function get($key)
    {
        global $mysql;
        $query = $mysql->query(
            "SELECT s_value FROM dms_settings WHERE s_key = '" . $key . "'"
        );
        $content = "";

        while ($x = mysqli_fetch_assoc($query)) {
            $content .= htmlspecialchars($x["s_value"]);
        }
        return $content;
    }
}
