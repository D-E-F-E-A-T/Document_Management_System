<?php
class Notes {
    public function viewNotes() {
        global $mysql, $dateTime, $template, $b64;

        $query = $mysql->query("SELECT * FROM dms_note WHERE archive = 0");
        $content = '<table class="table">';
        $content .= '<thead><tr><th scope="col">#</th><th scope="col">Title</th><th scope="col">Last edit</th><th scope="col">Actions</th></tr></thead>';
        $content .= '<tbody>';

        while($x = mysqli_fetch_assoc($query)) {

            $content .= '<tr>';
            $content .= '<td>' . htmlspecialchars($x["id"]) . '</td>';
            $content .= '<td>' . $b64->decode(htmlspecialchars($x["title"])) . '</td>';
            $content .= '<td>' . htmlspecialchars($x["dt_last_edit"]) . '</td>';

            // TODO: Make bootstrap btn-group 
            // TODO: Add button in new class for bootstrap parts
            // TODO: Make TINYMCE class with options
            $content .= "<td><div class='btn-group' role='group'>";
            $content .= $template->addButton("index.php?page=notes&action=edit&id=" . htmlspecialchars($x["id"]), "Edit");
            $content .= $template->addButton("index.php?page=notes&action=delete&id=" . htmlspecialchars($x["id"]), "Remove");
            $content .= '</div></tr>';
        }
    
        $content .= '</tbody></table>';

        return $content;
    }
    
    public function makeNoteForm() {
        $content = '<form action="" method="POST">';
        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="title">Title</label><input type="text" class="form-control" name="title" id="title" placeholder="Title"></div>';
        $content .= '</div>';
        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="note">Note</label><textarea class="form-control" name="note" id="note"></textarea></div>';
        $content .= '</div>';
        $content .= '<button type="submit" class="btn btn-primary">Toevoegen</button></form>';
        
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
        global $mysql, $dateTime, $b64;

        $query = $mysql->query("SELECT * FROM dms_note WHERE id = '{$id}'");
        $content = '<form action="" method="POST">';

        while($x = mysqli_fetch_assoc($query)) {
            $noteEncoded = $b64->decode(htmlspecialchars($x["content"]));
            $titleEncoded = $b64->decode(htmlspecialchars($x["title"]));

            $content .= '<div class="form-row">';
            $content .= '<div class="form-group col"><label for="title">Title</label><input type="text" class="form-control" name="title" id="title" placeholder="Title" value="'. $titleEncoded .'"></div>';
            $content .= '</div>';

            $content .= '<div class="form-row">';
            $content .= '<div class="form-group col"><label for="note">Note</label><textarea class="form-control" name="note" id="note">'. $noteEncoded .'</textarea></div>';
            $content .= '</div>';
        }
        // TODO: bootstrAP btn 
        $content .= '<button type="submit" class="btn btn-primary">Save</button></form>';
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