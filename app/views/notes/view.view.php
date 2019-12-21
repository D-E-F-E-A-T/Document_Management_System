<?php echo $template->addTitle("Notes"); ?>
<?php echo $template->addButton("index.php?page=notes&action=new", "Make new note"); ?>
<?php echo $notes->viewNotes(); ?>