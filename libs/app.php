<?php
//esta es una clase
require_once 'controllers/errores.php';
class app {
    //put your code here
    function __construct() {
       // echo '<p>Nueva App</p>';
        $url = isset($_GET['url']) ? $_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);
        
        if (empty($url[0])) {
            $archivocontrolador = 'controllers/main.php';
             require_once $archivocontrolador;
             $controller = new main();
             $controller->loadModel('main');
             $controller->render();
             return false;
        }
        $archivocontrolador = 'controllers/' . $url[0] . '.php';
        if(file_exists($archivocontrolador))
        {
            require_once $archivocontrolador;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            $nparam= sizeof($url);
            if($nparam > 1){
                if($nparam > 2){
                    $param=[];
                    for($i = 2; $i<$nparam;$i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                     $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }
            
        }else
        {
            $controller= new errores();
        }   
    }
}

