<?php echo $template->addTitle(LANG_NOTES_TABLE_heading); ?>
<?php echo $bootstrap->addButton("btn-primary", LANG_NOTES_TABLE_btn_new, "index.php?page=notes&action=new"); ?>
<?php echo $notes->viewNotes(); ?>