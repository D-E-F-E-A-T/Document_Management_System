<?php
class Language
{
    private $lang;

    public function __construct($lang)
    {
        global $path;

        $this->lang = $lang;
        $langArray = array("en", "nl");

        if (in_array($lang, $langArray)) {
            return include $path->getPath("lang") . $lang . ".lang.php";
        } else {
            return include $path->getPath("lang") . "en.lang.php";
        }
    }

    public function getLang()
    {
        return $this->lang;
    }
}
