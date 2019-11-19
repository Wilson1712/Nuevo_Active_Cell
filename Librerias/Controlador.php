<?php 
    class Controlador{
        public function __construct(){
            $this->view = new Vistas();
            $this->loadClassmodelos();
            //echo "sistema de php";
        }

        function loadClassmodelos(){
            $modelo = get_class($this).'_modelo';
            $path = 'Modelos/'.$modelo.'.php';
            if(file_exists($path)){
                require $path;
                $this->modelo = new $modelo();
            }
        }
    }
?>