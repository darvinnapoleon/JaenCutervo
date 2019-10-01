<?php
include_once 'models/cliente.php';
class SesionModel extends model {

    public function __construct() {
        parent::__construct();
    }
    public function userExists($item) {
        $md5pass = md5($item['concli']);
        $query= $this->db->connect()->prepare('SELECT * FROM cliente WHERE usucli = :usucli AND concli = :concli');
        try {
            $query->execute(['usucli' => $item['usucli'],'concli' => $md5pass]);
            if ($query->rowCount()){
             return true;   
            }    
        } catch (PDOException $e) {
            return false;
        }
    }
   public function update($item) {

        $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido= :apellido WHERE matricula= :matricula");
        try {
            $query->execute([
                'matricula' => $item['matricula'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido']
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function setUser($usucli) {
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE usucli = :usucli');
        $query->execute(['usucli' => $usucli]);
        foreach ($query as $currentUser) {
            $this->nomcli = $currentUser['nomcli'];
            $this->usucli = $currentUser['usucli'];
        }}
    public function getNombre() {
        return $this->nomcli;
    }}
