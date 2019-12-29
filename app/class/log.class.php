<?php
class Log
{
    public function view()
    {
        global $mysql, $dateTime, $template, $b64, $bootstrap;

        $query = $mysql->query("SELECT * FROM dms_log_signin ORDER BY id DESC");
        $content = '<table class="table-sm table">';
        $content .=
            '<thead><tr><th scope="col">' .
            LANG_PROFILE_LOG_TABLE_ip .
            '</th><th scope="col">' .
            LANG_PROFILE_LOG_TABLE_ua .
            '</th><th scope="col">' .
            LANG_PROFILE_LOG_TABLE_username .
            '</th><th scope="col">' .
            LANG_PROFILE_LOG_TABLE_date .
            '</th></tr></thead>';
        $content .= '<tbody>';

        while ($x = mysqli_fetch_assoc($query)) {
            $content .= '<tr>';

            $content .= '<td>' . htmlspecialchars($x["ip"]) . '</td>';
            $content .= '<td>' . htmlspecialchars($x["useragent"]) . '</td>';
            $content .= '<td>' . htmlspecialchars($x["username"]) . '</td>';
            $content .= '<td>' . htmlspecialchars($x["dt_last"]) . '</td>';
            $content .= "<td>";

            $content .= '</tr>';
        }

        $content .= '</tbody></table>';

        return $content;
    }

    public function clean()
    {
        global $mysql;
        $mysql->query("DELETE FROM dms_log_signin");
    }
}
