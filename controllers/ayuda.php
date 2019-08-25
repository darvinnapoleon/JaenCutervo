<?php
class ayuda extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('ayuda/index');
    }
}
