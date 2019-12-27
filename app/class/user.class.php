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

    public function passwordHash($password) {
        return hash("sha512", $password);
    }

    public function loginError() {
        return '<script>alert("'. LANG_SIGNIN_error .'");</script>';
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
        if(isset($_SESSION["dms_logged_in"])) {
            return true;
        } else {
            return false;
        }
    }

    private function setSession($key, $value) {
        $_SESSION["{$key}"] = $value;
    }

    public function logActivity($username) {
        global $mysql;

        $logIP = $_SERVER['REMOTE_ADDR'];
        $logUserAgent = $_SERVER['HTTP_USER_AGENT'];
        $logUsername = $username;
        $logDateTime = date("H:i:s d-m-Y"); 

        $mysql->query("INSERT INTO dms_log_signin (ip, useragent, username, dt_last) VALUES ('{$logIP}', '{$logUserAgent}', '{$logUsername}', '{$logDateTime}')");
    }
}
?>