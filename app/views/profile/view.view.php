<?php echo $template->addTitle(
    LANG_PROFILE_VIEW_heading . ": " . $_SESSION["dms_user_realname"]
); ?>
<?php echo $bootstrap->addRow("start"); ?>
<?php echo $bootstrap->addCard(
    LANG_PROFILE_PASSWORD_heading,
    LANG_PROFILE_PASSWORD_sub,
    LANG_PROFILE_PASSWORD_heading,
    "index.php?page=profile&action=password"
); ?>
<?php echo $bootstrap->addCard(
    LANG_PROFILE_LOG_heading,
    LANG_PROFILE_LOG_sub,
    LANG_PROFILE_LOG_heading,
    "index.php?page=profile&action=log"
); ?>
<?php echo $bootstrap->addCard(
    LANG_PROFILE_CLEANDB_heading,
    LANG_PROFILE_CLEANDB_sub,
    LANG_PROFILE_CLEANDB_heading,
    "index.php?page=profile&action=db"
); ?>
<?php echo $bootstrap->addCard(
    LANG_PROFILE_SYSTEM_heading,
    LANG_PROFILE_SYSTEM_sub,
    LANG_PROFILE_SYSTEM_heading,
    "index.php?page=profile&action=settings"
); ?>
<?php echo $bootstrap->addRow("end"); ?>
