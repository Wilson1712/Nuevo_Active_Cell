<?php 
    class Vistas{
        function render($controller, $view){
            $controller = get_class($controller);
            require VIEWS.DFT."Head.html";

            require VIEWS.$controller.'/'.$view.'.html';

            require VIEWS.DFT."Footer.html";
        }
    }
?>