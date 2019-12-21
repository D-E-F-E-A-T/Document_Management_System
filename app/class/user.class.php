<?php
class User {
    private $username;
    private $password;

    public function doSignIn($username, $password) {
        global $mysql;

        $this->username = $username;
        $this->password = $this->passwordHash($password);

        $queryLogin = $mysql->query("SELECT id,username,password FROM dms_users WHERE username = '". $this->username ."' AND password = '". $this->password ."'");
        
        if ($queryLogin->num_rows > 0) {
            return true;
        } else {
            return false;
        }     
    }

    public function doSignOut() {
        session_destroy();
    }

    private function passwordHash($password) {
        return hash("sha512", $password);
    }

    private function inputHashing($password) {
        return hash("sha512", $password);
    }

    public function loginError() {
        return '<script>alert("Username or password is incorrect.");</script>';
    }

    public function loginCorrect() {
        global $mysql;

        $this->setSession("dms_logged_in", true);
        $this->setSession("dms_username", $this->username);
        $this->setSession("dms_user_realname", $this->getUserRealName($this->username));

        header("Location: index.php?page=dashboard");
    }

    private function getUserRealName($username) {
        global $mysql;
        $query = $mysql->query("SELECT id,firstname,surname FROM dms_users WHERE username = '{$username}'");
        while($x = mysqli_fetch_assoc($query)) { 
            return htmlspecialchars($x["firstname"] . " " . $x["surname"]); 
        }
    }

    public function doSignInCheck() {
        // <?php if(!isset($_SESSION["logged-in"])) { header('Location: login.php'); }
    }

    private function setSession($key, $value) {
        $_SESSION["{$key}"] = $value;
    }

    // LOG AND BAN
    private function logActivity() {
        /*
        Insert:
            - UserAgent
            - Datetime
            - IP
            - Username
            - Num. of logins
        */
    }

    private function banIP() { }
}