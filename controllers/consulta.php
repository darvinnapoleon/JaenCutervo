<?php
class consulta extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('consulta/index');
    }
    
}
