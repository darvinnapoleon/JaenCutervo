<?php

class NuevoModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }
  
     public function regcli($datos)
    {
         $md5pass = md5($datos['concli']);
        try{
            $query= $this->db->connect()->prepare('INSERT INTO cliente (nomcli, apecli, telcli, usucli, concli) VALUES(:nomcli, :apecli, :telcli, :usucli, :concli)');
            $query->execute(['nomcli' => $datos['nomcli'], 'apecli' => $datos['apecli'], 'telcli' => $datos['telcli'], 'usucli' => $datos['usucli'], 'concli' => $md5pass]);
            return true;
        }catch(PDOException $e){
     
           //echo "Ya existe esa matrícula";
            return false;
        }
    }
}

