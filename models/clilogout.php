<?php

    include_once 'clisession.php';
    $clisesion = new CliSesion();
    $clisesion->closeSession();
    header("location:clises/index.php");


