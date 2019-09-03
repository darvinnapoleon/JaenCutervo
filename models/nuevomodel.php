<?php

class NuevoModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }
  
     public function insusu($datos)
    {
        try{
            $query= $this->db->connect()->prepare('INSERT INTO USUARIO (NOMUSU, CONUSU) VALUES(:nomusu, :conusu)');
            $query->execute(['nomusu' => $datos['nomusu'], 'conusu' => $datos['conusu']]);
            return true;
        }catch(PDOException $e){
     
           //echo "Ya existe esa matrícula";
            return false;
        }
    }
}
