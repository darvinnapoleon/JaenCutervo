<?php
class Sesion extends controller {
   function __construct() {
        parent::__construct();
      //  $this->view->mensaje = "";
    }
    function render(){
        $this->view->render('sesion/index');
    }
    function valCliente() {
      $usucli= $_POST['usucli'];
      $concli= $_POST['concli'];
      if ($this->model->userExists(['usucli' => $usucli, 'concli' => $concli])) {
            $cliente = new Cliente();
            $cliente->usucli = $usucli;
            $cliente->concli = $concli;
            $this->view->mensaje = "Bienvenido";
        } else {
            $this->view->mensaje = "No estas registrado";
        }
         $this->render();
    }
}
