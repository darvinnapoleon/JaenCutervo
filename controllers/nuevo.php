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
    function registrarCliente(){
        $nomcli= $_POST['nomcli'];
        $apecli= $_POST['apecli'];
        $telcli= $_POST['telcli'];
        $usucli= $_POST['usucli'];
        $concli= $_POST['concli'];
        $mensaje="";
        if($this->model->regcli(['nomcli' => $nomcli,'apecli' => $apecli,'telcli' => $telcli,'usucli' => $usucli, 'concli' => $concli])){
            $mensaje = "Datos registrados correctamente";
            
        }else{
            $mensaje = "Tu ya estas registrado";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    } 
}

