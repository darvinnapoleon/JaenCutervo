<?php
class main extends controller
{
    function __construct()
    {
        parent::__construct();
       
    }
    function render(){
        $this->view->render('main/index');
    }
    function saludo(){
        echo '<p>ejecutaste el metodo saludo</p>';
    }
}
