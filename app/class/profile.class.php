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
        // TODO
        global $mysql, $user;
        $hasedPassword = $user->passwordHash($passwordNew);

        if($passwordNew == $passwordNewRepeat) {
            $mysql->query("UPDATE dms_users SET password = '" . $hasedPassword . "' WHERE username = '" . $username . "'");
            return "Password changed";
        } else {
            return "ERROR: Password dont match";
        }
    }

    public function passwordChangeForm() {
        $content = '<form action="" method="POST">';

        //$content .= '<div class="form-row">';
        //$content .= '<div class="form-group col"><label for="current_password">Current password</label><input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current password"></div>';
        //$content .= '</div>';

        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="new_password_1">New password</label><input type="password" class="form-control" name="new_password_1" id="new_password_1" placeholder="New password"></div>';
        $content .= '</div>';

        $content .= '<div class="form-row">';
        $content .= '<div class="form-group col"><label for="new_password_2">New password (repeat)</label><input type="password" class="form-control" name="new_password_2" id="new_password_2" placeholder="New password (repeat)"></div>';
        $content .= '</div>';

        $content .= '<button type="submit" class="btn btn-primary">Save</button></form>';
        return $content;
    }
}