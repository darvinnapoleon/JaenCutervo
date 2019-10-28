<?php
class procon extends controller {

    function __construct() {
        parent::__construct();
        $this->view->producto = [];
    }

    function render() { 
        
        $producto = $this->model->getpro();
        $this->view->producto = $producto;
        $this->view->render('procon/index');
    }
    function verCat($param = null) {
        //var_dump($param);
        $idCat = $param[0];
        $producto = $this->model->getByIdcat($idCat);
        $this->view->mensaje = "";
        $this->view->producto = $producto;
        $this->view->render('procon/index');
    }
    function verPro($param = null) {
        //var_dump($param);
        $idPro = $param[0];
        $producto = $this->model->getByIdpro($idPro);
        $this->view->mensaje = "";
        $this->view->producto = $producto;
        $this->view->render('procon/detalle');
    }
}
