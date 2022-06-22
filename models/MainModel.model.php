<?php

require_once "Model.model.php";

class MainModel extends Model{

    public function getPDOFromModel(){
        $connexion = $this->myPDO()->prepare('SELECT * FROM info');
        $connexion->execute();
        $datas = $connexion->fetchAll(PDO::FETCH_ASSOC);
        $connexion->closeCursor();
        return $datas;
    }
}