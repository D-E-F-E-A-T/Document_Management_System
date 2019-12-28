<?php
class Bootstrap {
    public function addRow($startStop) {
        if($startStop === "start") {
            return '<div class="row">';
        } elseif($startStop === "end") {
            return '</div>';
        }
    } 

    public function addFormRow($startStop) {
        if($startStop === "start") {
            return '<div class="form-row">';
        } elseif($startStop === "end") {
            return '</div>';
        }
    } 

    public function addCardCol($startStop) {
        if($startStop === "start") {
            return '<div class="card-columns">';
        } elseif($startStop === "end") {
            return '</div>';
        }
    }
    
    public function addButtonGroup($startStop) {
        if($startStop === "start") {
            return '<div class="btn-group" role="group">';
        } elseif($startStop === "end") {
            return '</div>';
        }
    }

    public function addCard($title, $text, $hrefContent, $hrefUrl) {
        $content = '<div style="margin-bottom: 10px;" class="col-sm-6">';
        $content .= '<div class="card">';
        $content .= '<div class="card-body">';
        $content .= '<h5 class="card-title">'. $title .'</h5>';
        $content .= '<p class="card-text">'. $text .'</p>';
        $content .= $this->addButton("btn-primary", $hrefContent, $hrefUrl);
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    }

    public function addWidget($title, $text) {
        $content = '<div class="card">';
        $content .= '<div class="card-body">';
        $content .= '<h5 class="card-title">'. $title .'</h5>';
        $content .= '<p class="card-text">'. $text .'</p>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    }

    public function addButtonSubmit($content) {
        return '<button type="submit" class="btn btn-primary">'. $content .'</button></form>';
    }

    public function addButton($style, $hrefContent, $hrefUrl) {
        $array = array("btn-primary", "btn-secondary", "btn-success", "btn-danger", "btn-warning", "btn-info", "btn-light", "btn-dark", "btn-link");
        if(in_array($style, $array)) { return '<a href="'. $hrefUrl .'" class="btn '. $style .'">'. $hrefContent .'</a>'; }
    }

    public function addButtonOutline($style, $hrefContent, $hrefUrl) {
        $array = array("btn-outline-primary", "btn-outline-secondary", "btn-outline-success", "btn-outline-danger", "btn-outline-warning", "btn-outline-info", "btn-outline-light", "btn-outline-dark", "btn-outline-link");
        if(in_array($style, $array)) { return '<a href="'. $hrefUrl .'" class="btn '. $style .'">'. $hrefContent .'</a>'; }
    }

    public function addFormField($inputType, $name, $placeholder, $value) {
        $content = $this->addFormRow("start");
        $content .= '<div class="form-group col">';
        $content .= '<label for="'. $name .'">'. $placeholder .'</label>';
        $content .= '<input type="'. $inputType .'" class="form-control" name="'. $name .'" id="'. $name .'" placeholder="'. $placeholder .'" value="'. $value .'">';
        $content .= '</div>';
        $content .= $this->addFormRow("end");

        return $content;
    }

    public function addTinyMCE($name, $placeholder, $value) {
        $content = $this->addFormRow("start");
        $content .= '<div class="form-group col"><label for="'. $name .'">'. $placeholder .'</label><textarea class="form-control" name="'. $name .'" id="'. $name .'">'. $value .'</textarea></div>';
        $content .= $this->addFormRow("end");

        return $content;
    }

    public function addNavigationItem($location, $title) {
        return '<li class="nav-item"><a class="nav-link" href="index.php?page='. $location .'">'. $title .'</a></li>';
    }

    public function addDropdownItem($location, $title) {
        return '<a class="dropdown-item" href="'. $location .'">'. $title .'</a>';
    }

    public function addDropdownSeperator() {
        return '<div class="dropdown-divider"></div>';
    }

    // TODO: Add:
    // https://getbootstrap.com/docs/4.1/components/card/
    // https://getbootstrap.com/docs/4.1/components/dropdowns/
    // https://getbootstrap.com/docs/4.1/components/forms/
    // https://getbootstrap.com/docs/4.1/components/jumbotron/
    // 

    // TODO: Default P tag markup https://getbootstrap.com/docs/4.1/utilities/colors/
    // IDEA: Meten van het aantal woorden of tekens? https://getbootstrap.com/docs/4.1/components/progress/
    // TODO LOGIN ALERT: https://getbootstrap.com/docs/4.1/components/modal/


}