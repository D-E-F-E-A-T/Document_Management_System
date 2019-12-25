<?php
class Log {
    private $logEnabled;

    public function __construct($logEnabled) {
        $this->logEnabled = $logEnabled;
    }

    public function addEvent($username, $type, $content) {
        global $mysql;

        if($this->logEnabled === true) {
            //$mysql->query("");
        }
    }

    public function getEvents() {

    }

    public function getEventsFiltered($username) {

    }

    public function clean() {
        // REMOVE ALL
    }
}
?>