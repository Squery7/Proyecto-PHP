<?php

class LinksPages {

    static function linksPagesModel($linkModel) {
        $module = "";
        if ($linkModel == "inicio" || $linkModel == "nosotros" 
            || $linkModel == "catalogo" 
            || $linkModel == "carrito"
            || $linkModel == "perfil"
            || $linkModel == "contactenos"
            || $linkModel == "registro"
            || $linkModel == "login"
            ) {
            $module = "views/modules/" . $linkModel . ".php";
        }

        return $module;
    }
}

?>