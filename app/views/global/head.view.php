<!DOCTYPE html>
<html lang="<?php echo $template->getLanguage(); ?>">
<head><?php echo $template->loadHead("css/app", "TEST APP"); ?></head>
<body>
<div class="d-flex" id="wrapper">
<?php echo $template->loadSidebar(); ?>
<div id="page-content-wrapper">
<?php echo $template->loadNav(); ?>
<div class="container-fluid">