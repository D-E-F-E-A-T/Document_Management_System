<?php // TODO: Translations ?>
<?php echo $template->addTitle("Profile: " . "Bastiaan de Hart"); ?>
<?php echo $bootstrap->addRow("start"); ?>
<?php echo $bootstrap->addCard("Change password", "Do you want to change you password?", "Change password", "index.php?page=profile&action=password"); ?>
<?php echo $bootstrap->addCard("Edit profile", "Do you want to edit your profile, you can edit things like firstname, surname, email, etc.", "Edit profile", "index.php?page=profile&action=edit"); ?>
<?php echo $bootstrap->addRow("end"); ?>