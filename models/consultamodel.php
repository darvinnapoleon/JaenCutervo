<?php
include_once 'models/alumno.php';
class ConsultaModel extends model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT*FROM alumnos");
            while($row = $query->fetch()){
                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->nombre    = $row['nombre'];
                $item->apellido  = $row['apellido'];
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
    public function getById($id) {
        $item = new Alumno();
        $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
        
        try {
            $query->execute(['matricula' => $id]);
            while ($row = $query->fetch()){
               $item->matricula = $row['matricula'] ;
               $item->nombre = $row['nombre'] ;
                $item->apellido = $row['apellido'] ;
            }
            return $item;
        }catch (PDOException $e) {
            return null;
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
        public function delete($id) {
             $query = $this->db->connect()->prepare("DELETE FROM alumnos WHERE matricula= :id");
            try {
               $query->execute([
                  'id' => $id,
                  
               ]); 
               return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT usucli,concli FROM cliente WHERE usucli = :usucli AND concli = :concli');
        $query->execute(['usucli' => $user, 'concli' => $md5pass]);
        if($query->rowCount()){
            $mensaje="si existe";
            return $mensaje;
        }else{
            $mensaje="no existe";
            return $mensaje;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>
