<?php
class catcon extends controller {

    function __construct() {
        parent::__construct();
        $this->view->categoria = [];
    }

    function render() { 
        
        $cat = $this->model->getcat();
        $this->view->categoria = $cat;
        $this->view->render('catcon/index');
    }
}
