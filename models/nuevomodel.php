<?php

class NuevoModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($datos)
    {
        try{
            $query= $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDO) VALUES(:matricula, :nombre, :apellido)');
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido']]);
            return true;
        }catch(PDOException $e){
     
           //echo "Ya existe esa matrícula";
            return false;
        }
    }

}
