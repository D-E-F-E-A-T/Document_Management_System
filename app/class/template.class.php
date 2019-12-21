<?php
class Template {
    private $path;
    private $language;

    public function __construct($path, $language) {
        $this->path = $path;
        $this->language = $language;
    }

    public function loadHead($defaultCSS, $title) {
        $content = '<meta charset="utf-8">';
        $content .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
        $content .= $this->addTitleTag($title);
        //$content .= $this->addCSS("bootstrap/css/bootstrap");
        $content .= '<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" rel="stylesheet">';
        $content .= $this->addCSS($defaultCSS);
        $content .= $this->addFavicon("test");

        //$content .= $this->addJS("tinymce/tinymce.min");
        $content .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.1.2/tinymce.min.js"></script>';
        $content .= '<script>tinymce.init({ selector: "textarea#note" });</script>';

        return $content;
    }

    public function loadNav() {
        $content = '<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">';
        $content .= '<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>';
        $content .= '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>';
        $content .= '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        $content .= '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">';
        $content .= '<li class="nav-item dropdown">';
        $content .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USERNAME</a>';
        $content .= '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">';
        $content .= $this->addDropdownItem("index.php?page=profile&action=view", "Profiel");
        $content .= $this->addDropdownItem("index.php?page=profile&action=password", "Wachtwoord Wijziggen");
        $content .= $this->addDropdownSeperator();
        $content .= $this->addDropdownItem("index.php?page=user&action=sign-out", "Uitloggen");
        $content .= '</div>';
        $content .= '</li>';
        $content .= '</ul>';
        $content .= '</div>';
        $content .= '</nav>';

        return $content;
    }

    public function loadSidebar() {
        $content = '<div class="bg-light border-right" id="sidebar-wrapper">';
        $content .= '<div class="sidebar-heading">Start Bootstrap </div>';
        $content .= '<div class="list-group list-group-flush">';
        $content .= $this->addSidebarItem("dashboard", "Home");
        $content .= $this->addSidebarItem("notes&action=view", "Notes");
        $content .= '</div>';
        $content .= '</div>';

        return $content;

    }

    public function loadFooter() {
        //$content = $this->addJS("jquery/jquery");
        //$content .= $this->addJS("bootstrap/js/bootstrap.bundle");

        $content .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $content .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>';

        $content .= '<script>$("#menu-toggle").click(function(e) { e.preventDefault(); $("#wrapper").toggleClass("toggled"); });</script>';

        return $content;
    }

    public function loadLoginForm() {
        $content = '<form action="" method="POST" class="form-signin">';
        $content .= '<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>';
        $content .= '<label for="username" class="sr-only">Email address</label>';
        $content .= '<input type="text" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>';
        $content .= '<label for="password" class="sr-only">Password</label>';
        $content .= '<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>';
        $content .= '<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>';
        $content .= '</form>';

        return $content;
    }
    
    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }

    // DEFAULT ELLEMENTS
    public function addTitle($title) {
        return '<h1 class="mt-4">'. $title .'</h1>';
    }

    public function addButton($location, $title) {
        return '<a role="button" class="btn btn-primary btn-sm" href="'. $location .'">'. $title .'</a>';
    }


    // LDKKKD

    private function addSidebarItem($location, $title) {
        return '<a href="index.php?page='. $location .'" class="list-group-item list-group-item-action bg-light">'. $title .'</a>';
    }

    private function addCSS($filename) {
        return '<link href="'. $this->path . '/' . $filename .'.css" rel="stylesheet">';
    }

    private function addJS($filename) {
        return '<script src="'. $this->path . '/' .  $filename .'.js"></script>';
    }

    private function addDropdownItem($location, $title) {
        return '<a class="dropdown-item" href="'. $location .'">'. $title .'</a>';
    }

    private function addDropdownSeperator() {
        return '<div class="dropdown-divider"></div>';
    }

    private function addTitleTag($title) {
        return '<title>'. $title .'</title>';
    }

    // FAVICON

    private function addFavicon($filename, &$extension = 'png') {
        return '<link rel="shortcut icon" href="'. $this->path . '/' . $filename . '.' . $extension .'">';
    }

    // APPLE

    private function addAppleAppTitle($title) {
        return '<meta name="apple-mobile-web-app-title" content="'. $title .'">';
    }

    private function addAppleStatusBarStyle($color) {
        return '<meta name="apple-mobile-web-app-status-bar-style" content="'. $color .'">';
    }

    private function addAppleAppUI($boolean) {
        return '<meta name="apple-mobile-web-app-capable" content="'. $boolean .'" />';
    }


    // TODO: TINYMCE FUNC

    private function addTINYMCE($id, &$content = "") {

    }
}
?>