<?php echo $template->addTitle(LANG_NOTES_TABLE_heading); ?>
<?php echo $template->addButton("index.php?page=notes&action=new", LANG_NOTES_TABLE_btn_new); ?>
<?php echo $notes->viewNotes(); ?>