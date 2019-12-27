<?php
class Path {
    private $basePath;

    public function __construct($basePath = "app/") {
        $this->basePath = $basePath;
    }

    public function getPath($type) {
        if($type === "assets") {
            return $this->returnAssetsPath();
        } elseif($type === "class") {
            return $this->returnAssetsPath();
        } elseif($type === "controller") {
            return $this->returnControllerPath();
        } elseif($type === "lang") {
            return $this->returnLangPath(); 
        } elseif($type === "routes") {
            return $this->returnRoutesPath();
        } elseif($type === "views") {
            return $this->returnViewsPath();
        }
    }

    private function returnAssetsPath()     { return $this->basePath . "assets/"; }
    private function returnClassPath()      { return $this->basePath . "class/"; }
    private function returnControllerPath() { return $this->basePath . "controller/"; }
    private function returnLangPath()       { return $this->basePath . "lang/"; }
    private function returnRoutesPath()     { return $this->basePath . "routes/"; }
    private function returnViewsPath()      { return $this->basePath . "views/"; }
}