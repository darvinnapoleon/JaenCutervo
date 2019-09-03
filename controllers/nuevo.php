<?php
class nuevo extends controller
{
    function __construct() {
        parent::__construct();
        $this->view->mensaje = "";
    }
    function render(){
        $this->view->render('nuevo/index');
    }
    function render1(){
        $this->view->render('main/index');
    }
    function registrarUsuario(){
        $nomusu= $_POST['nomusu'];
        $conusu= $_POST['conusu'];
        $mensaje="";
        if($this->model->insusu(['nomusu' => $nomusu, 'conusu' => $conusu])){
            $mensaje = "Nuevo usuario creado";
            
        }else{
            $mensaje = "El usuario ya existe";
        }
        $this->view->mensaje = $mensaje;
        $this->render1();
    } 
}

