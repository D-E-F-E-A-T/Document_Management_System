<?php
class Template {
    private $path;
    private $language;


    // TODO: Savely remove $language variable
    public function __construct($path, $language) {
        $this->path = $path;
        $this->language = $language;
    }

    public function loadHead($defaultCSS, $title) {
        $content = '<meta charset="utf-8">';
        $content .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
        $content .= $this->addTitleTag($title);
        $content .= $this->addThemeColor("#292b2c");
        $content .= $this->addAppleWebAppTitle("DMS");
        $content .= $this->addAppleSafariIcon("#000000");
        $content .= $this->addAppleIcon("180");
        $content .= $this->addAppleIconPre("180");
        $content .= $this->addFavicon("16");
        $content .= $this->addFavicon("32");
        $content .= $this->addCSS(false, "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css");
        $content .= $this->addCSS(true, $defaultCSS);
        $content .= $this->addJS(false, "https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.1.2/tinymce.min.js");
        $content .= '<script>tinymce.init({ selector: "textarea#note", branding: false, height: "500" });</script>';

        return $content;
    }

    public function loadheader() {
        $content = '<header>';
        $content .= '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">';
        $content .= '<span class="navbar-brand mb-0 h1"><img src="app/assets/img/icon.svg" width="30" height="30" class="d-inline-block align-top" alt=""> '. LANG_title .'</span>';

        $content .= '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">';
        $content .= '<span class="navbar-toggler-icon"></span>';
        $content .= '</button>';

        $content .= '<div class="collapse navbar-collapse" id="navbarCollapse">';

        $content .= '<ul class="navbar-nav mr-auto">';
        $content .= $this->addNavigationItem("dashboard", LANG_NAV_dashboard);
        $content .= $this->addNavigationItem("notes&action=view", LANG_NAV_notes);
        $content .= '</ul>';

        //$content .= '<li class="nav-item dropdown">';
        $content .= '<a class="btn btn-outline-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'. $_SESSION["dms_user_realname"] .'</a>';
        
        $content .= '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">';
        $content .= $this->addDropdownItem("index.php?page=profile&action=view", LANG_NAV_profile);
        $content .= $this->addDropdownItem("index.php?page=profile&action=password", LANG_NAV_password);
        $content .= $this->addDropdownSeperator();
        $content .= $this->addDropdownItem("sign-out.php", LANG_NAV_sign_out);
        $content .= '</div>';

        //$content .= '</li>';
        $content .= '</div>';
        $content .= '</nav>';
        $content .= '</header>';

        return $content;
    }

    private function addNavigationItem($location, $title) {
        return '<li class="nav-item"><a class="nav-link" href="index.php?page='. $location .'">'. $title .'</a></li>';
    }

    public function loadFooter() {
        $content = '<footer class="footer">';
        $content .= '<div class="container"><span class="text-muted">'. LANG_footer .'</span></div>';
        $content .= '</footer>';
        $content .= $this->addJS(false, "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js");
        $content .= $this->addJS(false, "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js");
        $content .= '<script>$("#menu-toggle").click(function(e) { e.preventDefault(); $("#wrapper").toggleClass("toggled"); });</script>';

        return $content;
    }

    public function loadLoginForm() {
        $content = '<form action="" method="POST" class="form-signin">';
        $content .= '<h1 class="h3 mb-3 font-weight-normal">'. LANG_SIGNIN_title .'</h1>';
        $content .= '<label for="username" class="sr-only">'. LANG_SIGNIN_username .'</label>';
        $content .= '<input type="text" name="username" id="username" class="form-control" placeholder="'. LANG_SIGNIN_username .'" required autofocus>';
        $content .= '<label for="password" class="sr-only">'. LANG_SIGNIN_password .'</label>';
        $content .= '<input type="password" name="password" id="password" class="form-control" placeholder="'. LANG_SIGNIN_password .'" required>';
        $content .= '<button class="btn btn-lg btn-primary btn-block" type="submit">'. LANG_SIGNIN_button .'</button>';
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
        return '<h1 class="mt-5">'. $title .'</h1>';
    }

    public function addButton($location, $title) {
        return '<a role="button" class="btn btn-primary btn-sm" href="'. $location .'">'. $title .'</a>';
    }
    // FIXME: Add path param.
    private function addCSS($isLocal, $filename) {
        if($isLocal === true) {
            return '<link href="'. $this->path . '/' . $filename .'.min.css" rel="stylesheet">';
        } else {
            return '<link href="'. $filename .'" rel="stylesheet">';
        } 
    }
    // FIXME: Add path param.
    private function addJS($isLocal, $filename) {
        if($isLocal === true) {
            return '<script src="'. $this->path . '/' .  $filename .'.js"></script>';
        } else {
            return '<script src="'. $filename .'"></script>';
        }
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

    // TODO: TINYMCE FUNC

    private function addTINYMCE($id, &$content = "") {

    }
    // FIXME: Add path param.
    private function addFavicon($size) {
        return '<link rel="icon" type="image/png" sizes="'. $size .'x'. $size .'" href="app/assets/img/favicon/favicon-'. $size .'x'. $size .'.png">';
    }

    // FIXME: Add path param.
    private function addAppleIcon($size) {
        return '<link rel="apple-touch-icon" sizes="'. $size .'x'. $size .'" href="app/assets/img/apple/apple-touch-icon.png">';
    }

    private function addAppleIconPre($size) {
        return '<link rel="apple-touch-icon-precomposed" sizes="'. $size .'x'. $size .'" href="app/assets/img/apple/apple-touch-icon-precomposed.png">';
    }

    // FIXME: Add path param.
    private function addAppleSafariIcon($color) {
        return '<link rel="mask-icon" href="app/assets/img/apple/safari-pinned-tab.svg" color="'. $color .'">';
    }

    private function addAppleWebAppTitle($title) {
        return '<meta name="apple-mobile-web-app-title" content="'. $title .'">';
    }

    private function addThemeColor($color) {
        return '<meta name="theme-color" content="'. $color .'">';
    }
}
?>