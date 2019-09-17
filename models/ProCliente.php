<?php
include_once 'models/Cliente.php';
class ProCliente extends model {

    public function __construct() {
        parent::__construct();
    }

    public function userExists($usucli, $concli) {
        $md5pass = md5($concli);
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE usucli = :usucli AND concli = :concli');
        $query->execute(['usucli' => $usucli, 'concli' => $md5pass]);
        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }
    public function setUser($usucli) {
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE usucli = :usucli');
        $query->execute(['usucli' => $usucli]);
        foreach ($query as $currentUser) {
            $this->nomcli = $currentUser['nomcli'];
            $this->usucli = $currentUser['usucli'];
        }
    }

    public function getNombre() {
        return $this->nomcli;
    }

}
