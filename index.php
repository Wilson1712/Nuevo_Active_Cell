<?php
require "config.php";
$url = $_GET['url'] ?? "Index/index";
$url = explode("/", $url);
$controller = "";
$method = "";
if(isset($url[0])){
    $controller = $url[0];
}
if(isset($url[1])){
    if($url[1] != ''){
        $method =$url[1];
    }
}
spl_autoload_register(function($class){
    if(file_exists(LBS.$class.".php")){
        require LBS.$class.".php";
    }

});
require 'Controladores/Error.php';
$error = new Errors();
//$obj = new Controlador();
//echo $controller."-----".$method;

//LLamado de los controladores

$controllersPath = 'Controladores/'.$controller.'.php';
if(file_exists($controllersPath)){
    require $controllersPath;
    //Instanciamos la clase
    $controller = new $controller();
    if(isset($method)){
        if(method_exists($controller, $method)){
            $controller->{$method}();
        }else{
            $error->error();
        }
    }
}else{
    $error->error();
}

?>