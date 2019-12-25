<?php
class DT {
    private $format;

    public function __construct($format) {
        $this->format = $format;
    }

    public function get() {
        if($this->format === "eu") {

        } elseif($this->format === "iso") {

        } elseif($this->format === "usa") {

        } else {
            return date("H:i d-m-Y");
        }
    }
}