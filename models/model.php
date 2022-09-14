<?php

class LinksPages {

    static function linksPagesModel($linkModel) {
        $module = "";
        if (
            $linkModel == "inicio" 
            || $linkModel == "nosotros" 
            || $linkModel == "servicios" 
            || $linkModel == "contactenos"
            ) {
            $module = "views/modules/" . $linkModel . ".php";
        }

        return $module;
    }
}

?>