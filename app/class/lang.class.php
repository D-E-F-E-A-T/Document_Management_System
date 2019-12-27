<?php
class Language {
    private $lang;

    public function __construct($lang) {
        $this->lang = $lang;

        return include "app/lang/" . $lang . ".php";
    }
}