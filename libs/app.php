<?php
//esta es una clase
require_once 'controllers/errores.php';
class app {
    //put your code here
    function __construct() {
       // echo '<p>Nueva App</p>';
        $url = isset($_GET['url']) ? $_GET['url']:null;
        $url = trim($url, '/');
        $url = explode('/',$url);
        
        if (empty($url[0])) {
            $archivocontrolador = 'controllers/main.php';
             require_once $archivocontrolador;
             $controller = new main();
             return false;
        }
        $archivocontrolador = 'controllers/'. $url[0]. '.php';
        if(file_exists($archivocontrolador))
        {
            require_once $archivocontrolador;
            $controller = new $url[0];
            if (isset($url[1]))
            {
                $controller->{$url[1]}();

            }
        }else
        {
            $controller= new errores();
        }   
    }
}
?>
