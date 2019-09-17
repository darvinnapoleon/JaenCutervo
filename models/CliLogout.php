<?php

    include_once 'CliSession.php';
    $clisession = new CliSession();
    $clisession->closeSession();
    header("location:sesion/index.php");
?>

