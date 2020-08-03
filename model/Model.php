<?php
class Model{
    protected $table;
    protected $connection;
    Public $id ;
    Public $dump_sql ;
    Public $result ;
    public $ajout ;

    function __construct() {

        try {

            $dns = 'mysql:host=127.0.0.1;dbname=ventes_gsm';
            $mUser = "root";
            $mPassword = '';

            // Options de connection
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
            );

            // Initialisation de la connection
            $this->connection = new PDO( $dns, $mUser, $mPassword, $options );
        } catch ( Exception $e ) {
            echo "Connection à MySQL impossible : ", $e->getMessage();
            die();
        }
    }

    public function read($fields=null,$where=''){
        // si mon champs est null alors mon paramètre $fields devient *
        if($fields==null){
            $fields = '*';
        }
        // si je n'ai rien mis dans mon objet-> id alors on execute cette partie de code
        if ($this->id== null){
            $sql= 'SELECT '.$fields.' from '.$this->table ;
            if ($where!= ''){
                $sql.=' where '.$where;
            }

        }
        else{
            // j'écris une requête qui va lire dans ma table les champs ou ma primary key = la valeur de objet->id
            $sql= 'SELECT '.$fields.' from '.$this->table .'  where '.$this->PK." = '" .$this->id."'" ;
        }


        try {
            var_dump($sql);
            // On envois la requète
            if($this->dump_sql==true){
                echo $sql;
            }
            // on execute la requête
            $select = $this->connection->query($sql);

            // On indique que nous utiliserons les résultats en tant qu'objet
            $select->setFetchMode(PDO::FETCH_OBJ);
            $this->result = new stdClass();
            $this->result = $select->fetchall();

        } catch ( Exception $e ) {
            echo 'Une erreur est survenue lors de la récupération des données';
        }


    }
    static function load($name){
        require ('../Model/'.$name.'.php');
        return new $name();
    }


}