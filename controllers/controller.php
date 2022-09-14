<?php
    class MVC_controller {

        public function templateController() {
            include "views/template.php";
        }

        public function linksPagesController() {
            // se valida que la variable action exista en los parametros del metodo GET
            if (isset($_GET["action"])) {
                # code..

                $linkController =$_GET["action"] ;
                
                $response = LinksPages::linksPagesModel($linkController);
            include $response;
            }

            
        }

    }
?>