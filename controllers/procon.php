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
}
