<?php
class sesion extends controller {
   function __construct() {
        parent::__construct();
      //  $this->view->mensaje = "";
    }
    function render(){
        $this->view->render('consulta/login');
    }
}
