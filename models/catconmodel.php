<?php
include_once 'models/categoria.php';

class CatconModel extends model {

    public function __construct() {
        parent::__construct();
    }

    public function getcat() {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT*FROM categoria");
            while ($row = $query->fetch()) {
                $item = new Categoria();
                $item->idcat = $row['idcat'];
                $item->nomcat = $row['nomcat'];
                $item->fotcat = base64_encode($row['fotcat']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

}
