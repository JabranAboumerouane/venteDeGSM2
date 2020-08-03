<?php

class Newtable extends Model
{
    var $table = "newtable1";
    var $PK = "ID"; // nom de la colonne de la primary key de ma table



    function addTOTO($nom,$prenom)
    {
        try {

            $req = $this->connection->prepare('CALL addTOTO(:nom,:prenom)');
            var_dump($this->connection);

            $req->bindParam(':nom', $nom, PDO::PARAM_STR, 45);
            $req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 45);
            var_dump($req);
            return $req->execute();
        } catch (PDOException $e) {
            echo($e->getMessage());
            return false;
        }
    }
}