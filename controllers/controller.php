<?php
    class MVC_controller {

        public function templateController() {
            include "views/template.php";
        }

        public function linksPagesController() {
            $linkController = $_GET["action"];
            $response = LinksPages::linksPagesModel($linkController);
            include $response;
        }

    }
?>