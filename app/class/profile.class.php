<?php
class Profile {

    // TODO
    public function getProfile($uid) {

    }
    // TODO: Edit profile
    // MUSTHAVE: Naam veranderen & email
    public function editProfileForm($uid) {

    }

    public function editProfileSave($uid) {

    }

    public function passwordChange($username, $passwordCurrent, $passwordNew, $passwordNewRepeat) {
        // TODO: Building function
        global $mysql, $user;
        $hasedPassword = $user->passwordHash($passwordNew);

        if($passwordNew == $passwordNewRepeat) {
            $mysql->query("UPDATE dms_users SET password = '" . $hasedPassword . "' WHERE username = '" . $username . "'");
            // TODO: Translations
            return "Password changed";
        } else {
            // TODO: Translations
            return "ERROR: Password dont match";
        }
    }

    public function passwordChangeForm() {
        global $bootstrap;

        $content = '<form action="" method="POST">';
        $content .= $bootstrap->addFormRow("start");
        $content .= '<div class="form-group col"><label for="new_password_1">'. LANG_PROFILE_PASSWORD_new_password .'</label><input type="password" class="form-control" name="new_password_1" id="new_password_1" placeholder="'. LANG_PROFILE_PASSWORD_new_password .'"></div>';
        $content .= $bootstrap->addFormRow("end");
        $content .= $bootstrap->addFormRow("start");
        $content .= '<div class="form-group col"><label for="new_password_2">'. LANG_PROFILE_PASSWORD_new_password_repeat .'</label><input type="password" class="form-control" name="new_password_2" id="new_password_2" placeholder="'. LANG_PROFILE_PASSWORD_new_password_repeat .'"></div>';
        $content .= $bootstrap->addFormRow("end");
        $content .= $bootstrap->addButtonSubmit(LANG_PROFILE_PASSWORD_new_password_btn);
        return $content;
    }
}