<?php
class Notes {
    public function viewNotes() {
        global $mysql, $dateTime, $template, $b64, $bootstrap;

        $query = $mysql->query("SELECT * FROM dms_note WHERE archive = 0 ORDER BY dt_last_edit DESC");
        $content = '<table class="table">';
        $content .= '<thead><tr><th scope="col">#</th><th scope="col">'. LANG_NOTES_TABLE_title .'</th><th scope="col">'. LANG_NOTES_TABLE_lastedit .'</th><th scope="col">'. LANG_NOTES_TABLE_actions .'</th></tr></thead>';
        $content .= '<tbody>';

        while($x = mysqli_fetch_assoc($query)) {

            $content .= '<tr>';
            $content .= '<td>' . htmlspecialchars($x["id"]) . '</td>';
            $content .= '<td>' . $b64->decode(htmlspecialchars($x["title"])) . '</td>';
            $content .= '<td>' . htmlspecialchars($x["dt_last_edit"]) . '</td>';
            $content .= "<td>";
            $content .= $bootstrap->addButtonGroup("start");
            $content .= $bootstrap->addButton("btn-primary", LANG_NOTES_TABLE_BTN_edit, "index.php?page=notes&action=edit&id=" . htmlspecialchars($x["id"]));
            $content .= $bootstrap->addButtonOutline("btn-outline-primary", LANG_NOTES_TABLE_BTN_remove, "index.php?page=notes&action=delete&id=" . htmlspecialchars($x["id"]));
            $content .= $bootstrap->addButtonGroup("end");
            $content .= '</tr>';
        }
    
        $content .= '</tbody></table>';

        return $content;
    }
    
    public function makeNoteForm() {
        global $bootstrap;

        $content = '<form action="" method="POST">';
        $content .= $bootstrap->addFormField("text", "title", LANG_NOTES_NEW_title, "");
        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="note">'. LANG_NOTES_NEW_note .'</label><textarea class="form-control" name="note" id="note"></textarea></div>';
        $content .= '</div>';
        $content .= $bootstrap->addButtonSubmit(LANG_NOTES_NEW_BTN_save);
        
        return $content;
    } 

    public function makeNoteSave($title, $note) {
        global $mysql, $dateTime, $b64;

        $noteEncoded = $b64->encode($note);
        $titleEncoded = $b64->encode($title);
        $timestamp = $dateTime->get();
        
        $mysql->query("INSERT INTO dms_note (title, content, dt_created, dt_last_edit) VALUES ('{$titleEncoded}', '{$noteEncoded}', '{$timestamp}', '{$timestamp}')");
    }

    public function editNoteForm($id) {
        global $mysql, $dateTime, $b64, $bootstrap;

        $query = $mysql->query("SELECT * FROM dms_note WHERE id = '{$id}'");
        $content = '<form action="" method="POST">';

        while($x = mysqli_fetch_assoc($query)) {
            $noteEncoded    = $b64->decode(htmlspecialchars($x["content"]));
            $titleEncoded   = $b64->decode(htmlspecialchars($x["title"]));
            $content .= $bootstrap->addFormField("text", "title", LANG_NOTES_NEW_title, $titleEncoded);
            $content .= $bootstrap->addTinyMCE("note", LANG_NOTES_NEW_note, $noteEncoded);
        }

        $content .= $bootstrap->addButtonSubmit(LANG_NOTES_NEW_BTN_save);
        return $content;
    }

    public function editNoteSave($title, $note, $id) {
        global $mysql, $dateTime, $b64;
        
        $noteEncoded = $b64->encode($note);
        $titleEncoded = $b64->encode($title);
        $timestamp = $dateTime->get();

        $mysql->query("UPDATE dms_note SET title = '{$titleEncoded}', content = '{$noteEncoded}', dt_last_edit = '{$timestamp}' WHERE id = '{$id}'");
    }

    public function deleteNote($id) {
        global $mysql, $dateTime;

        $mysql->query("UPDATE dms_note SET archive = 1 WHERE id = '{$id}'");
    }
}
?>