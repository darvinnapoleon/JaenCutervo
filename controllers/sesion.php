<?php
class sesion extends controller {
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
            $this->view->mensaje = "Usuario correcto";
        } else {
            $this->view->mensaje = "Usuario incorrecto";
        }
         $this->render();
    }
}
