<?php
class Bootstrap {
    public function addRow($rf) {
        if($rf === "start") {
            return '<div class="row">';
        } elseif($rf === "end") {
            return '</div>';
        }
        
    } 

    public function addCard($title, $text, $hrefContent, $hrefUrl) {
        $content = '<div class="col-sm-6">';
        $content .= '<div class="card">';
        $content .= '<div class="card-body">';
        $content .= '<h5 class="card-title">'. $title .'</h5>';
        $content .= '<p class="card-text">'. $text .'</p>';
        // TODO: replace with function addButton()
        $content .= '<a href="'. $hrefUrl .'" class="btn btn-primary">'. $hrefContent .'</a>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    }

    public function addButton($style, $hrefContent, $hrefUrl) {
        $array = array("btn-primary", "btn-secondary", "btn-success", "btn-danger", "btn-warning", "btn-info", "btn-light", "btn-dark", "btn-link");

        if(in_array($style, $array)) { return '<a href="'. $hrefUrl .'" class="btn '. $style .'">'. $hrefContent .'</a>'; }
    }

    public function addButtonOutline($style, $hrefContent, $hrefUrl) {
        $array = array("btn-outline-primary", "btn-outline-secondary", "btn-outline-success", "btn-outline-danger", "btn-outline-warning", "btn-outline-info", "btn-outline-light", "btn-outline-dark", "btn-outline-link");

        if(in_array($style, $array)) { return '<a href="'. $hrefUrl .'" class="btn '. $style .'">'. $hrefContent .'</a>'; }
    }

    public function addButtonGroup() {
        return '<div class="btn-group" role="group">';
    }

    public function addFormField($inputType, $name, $placeholder) {
        $content = '<div class="form-row">';
        $content .= '<div class="form-group col">';
        $content .= '<label for="'. $name .'">'. $placeholder .'</label>';
        $content .= '<input type="'. $inputType .'" class="form-control" name="'. $name .'" id="'. $name .'" placeholder="'. $placeholder .'">';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
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