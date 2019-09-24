<?php
class conpro extends controller {

    function __construct() {
        parent::__construct();
        $this->view->producto = [];
    }

    function render() {
        $producto = $this->model->getpro();
        $this->view->producto = $producto;
        $this->view->render('conpro/index');
    }

    function verProducto($param = null) {
        //var_dump($param);
        $idProducto = $param[0];
        $product = $this->model->getById($idProducto);
        session_start();
        $_SESSION['idVerProducto'] = $product->idpro;
        $this->view->mensaje = "";
        $this->view->product = $product;
        $this->view->render('conpro/detalle');
    }
}
