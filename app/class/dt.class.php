<?php
class DT
{
    private $format;

    public function __construct($format)
    {
        $this->format = $format;
    }

    public function get()
    {
        if ($this->format === "nl") {
            return date("H:i d-m-Y");
        } else {
            return date("H:i m-d-Y");
        }
    }
}
