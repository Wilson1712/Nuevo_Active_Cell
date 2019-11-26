<?php

    class Principal extends Controlador{
        function __construct(){
            parent::__construct();
        }

        public function principal(){
            if(null != Session::getSession("user")){
                $this-vista->render($this,"principal");
            }else{
                header("Location:".URL);
            }
        }
    }

?>