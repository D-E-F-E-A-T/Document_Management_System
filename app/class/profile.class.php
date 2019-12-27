<?php
class Profile {

    // TODO
    public function getProfile($uid) {

    }

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
        $content = '<form action="" method="POST">';

        //$content .= '<div class="form-row">';
        //$content .= '<div class="form-group col"><label for="current_password">Current password</label><input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current password"></div>';
        //$content .= '</div>';

        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="new_password_1">'. LANG_PROFILE_PASSWORD_new_password .'</label><input type="password" class="form-control" name="new_password_1" id="new_password_1" placeholder="'. LANG_PROFILE_PASSWORD_new_password .'"></div>';
        $content .= '</div>';

        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="new_password_2">'. LANG_PROFILE_PASSWORD_new_password_repeat .'</label><input type="password" class="form-control" name="new_password_2" id="new_password_2" placeholder="'. LANG_PROFILE_PASSWORD_new_password_repeat .'"></div>';
        $content .= '</div>';

        $content .= '<button type="submit" class="btn btn-primary">'. LANG_PROFILE_PASSWORD_new_password_btn .'</button></form>';
        return $content;
    }
}