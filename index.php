<?php
require "config.php";
$url = isset($_GET['url']) ? $_GET['url']:"Index/index";
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
//$obj = new Controllers();
//echo $controller."-----".$method;
//LLAMAMOS A LOS CONTROLADORES
$controllersPath = "Controllers/".$controller.'.php';
if(file_exists($controllersPath)){
    require $controllersPath;
    //instanciamos de la clase
    $controller = new $controller();
}else{

}
?>