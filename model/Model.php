<?php


class Model
{
    protected $connexion;

    public function __construct()
    {
        $servername = 'mysql:host=localhost;dbname=ventes_gsm';
        $username = "root";
        $password = "";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ERRMODE_EXCEPTION
        );

        //On établit la connexion
        try {
            $this->connexion = new PDO($servername, $username, $password, $options);
        } catch (PDOException $e) {
            echo 'Connexion échouée:' . $e->getMessage();
        }
    }

}


    //requête préparer
//$ins = $pdo->prepare("insert into utilisateurs (nom,prenom,login,pass) values(:nom,:prenom,:login,:pass)");
//$ins->execute(array(
 //   ":prenom"=>"Albert",
 //   ":pass"=>md5("2020"),
 //   ":nom"=>"Einstein",
 //   ":login"=>"a.einstein"
//));
    //preparer puis executer la requête
//$ins = $pdo->prepare("select * from utilisateurs order by id");
//$ins->setFetchMode(PDO::FETCH_ASSOC);
//$ins->execute();