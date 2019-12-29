<?php echo $template->addTitle(LANG_PROFILE_LOG_heading); ?>
<form action="" method="POST"><?php echo $bootstrap->addButtonSubmit(
    LANG_PROFILE_LOG_btn
); ?></form><br>
<?php echo $logs->view(); ?>
