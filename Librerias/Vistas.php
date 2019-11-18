<?php 
    class Vistas{
        function render($controller, $vista){
            require VIEWS.DTF."head.html";

            require VIEWS.$controllers.'/'.$view.'.html';

            require VIEWS.DTF."footer.html";
        }
    }

?>