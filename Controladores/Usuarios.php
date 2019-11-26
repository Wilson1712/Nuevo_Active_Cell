<?php
    class Usuarios extends Controlador
    {
        function __construct(){
            parent::__construct();
        }
        public function usuarios(){
            if(null != Session::getSession("user")){
                $this-vista->render($this,"usuarios");
            }else{
                header("Location:".URL);
            }
        }
    }
        public function destroySession(){
            Session::destroy();
            header("Location:".URL);
        }
    }

?>