<?php

include_once 'models/product.php';

class ProProducto extends model {

    public function __construct() {
        parent::__construct();
    }

    public function getpro(){
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT*FROM producto");
            while ($row = $query->fetch()) {
                $item = new Product();
                $item->idpro = $row['idpro'];
                $item->nompro = $row['nompro'];
                $item->precom = $row['precom'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

}
