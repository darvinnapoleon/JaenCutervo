<?php
include_once 'models/product.php';

class ProconModel extends model {

    public function __construct() {
        parent::__construct();
    }
    public function getByIdcat($id) {
        $items = [];
        $query = $this->db->connect()->prepare("SELECT * FROM producto WHERE idcat = :idcat");

        try {
            $query->execute(['idcat' => $id]);
            while ($row = $query->fetch()) {
                $item = new Product();
                $item->idpro = $row['idpro'];
                $item->nompro = $row['nompro'];
                $item->preven = $row['preven'];
                $item->fotpro = base64_encode($row['fotpro']);
                array_push($items, $item);
            }
            return $items; 
            
            } catch (PDOException $e) {
            return [];
        }
    }
    public function getByIdpro($id) {
        
        $query = $this->db->connect()->prepare("SELECT * FROM producto WHERE idpro = :idpro");

        try {
            $item = new Product();
            $query->execute(['idpro' => $id]);
            while ($row = $query->fetch()) {
                $item->idpro = $row['idpro'];
                $item->nompro = $row['nompro'];
                $item->preven = $row['preven'];
                $item->fotpro = base64_encode($row['fotpro']);
                
            }
            return $item; 
            
            } catch (PDOException $e) {
            return null;
        }
    }
}
