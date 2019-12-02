<?php 
    class Vistas{
        function render($controller, $view){
            $controllers = get_class($controller);
            require VIEWS.DFT."Head.html";

            require VIEWS.$controllers.'/'.$view.'.html';

            require VIEWS.DFT."Footer.html";
        }
    }
?>