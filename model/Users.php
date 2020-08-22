<?php
class Users extends Model
{
    var $table = "users";
    var $PK = "id_user"; // nom de la colonne de la primary key de ma table
    var $id ;


    function addUser($first_name,$last_name,$address,$email,$password)
    {
        try {

            $req = $this->connection->prepare('CALL addUser(:first_name,:last_name,:address,:email,:password)');

            $req->bindParam(':first_name', $first_name, PDO::PARAM_STR, 45);
            $req->bindParam(':last_name', $last_name, PDO::PARAM_STR, 45);
            $req->bindParam(':address', $address, PDO::PARAM_STR, 255);
            $req->bindParam(':email', $email, PDO::PARAM_STR, 45);
            $req->bindParam(':password', $password, PDO::PARAM_STR, 45);
            return $req->execute();
        } catch (PDOException $e) {
            echo($e->getMessage());
            return false;
            header('Location: welcome.php');
        }
    }
    function updateUser($first_name,$last_name,$address,$email,$password,$id_user)
    {
        try {

            $req = $this->connection->prepare('CALL updateUser(:first_name,:last_name,:address,:email,:password,:id_user)');
            $req->bindParam(':first_name', $first_name, PDO::PARAM_STR, 45);
            $req->bindParam(':last_name', $last_name, PDO::PARAM_STR, 45);
            $req->bindParam(':address', $address, PDO::PARAM_STR, 255);
            $req->bindParam(':email', $email, PDO::PARAM_STR, 45);
            $req->bindParam(':password', $password, PDO::PARAM_STR, 45);
            $req->bindParam(':id_user', $id_user, PDO::PARAM_STR, 11);
            var_dump($req);
            return $req->execute();
        } catch (PDOException $e) {
            echo($e->getMessage());
            return false;
            header('Location: welcome.php');
        }
    }

    function removeUser($id_user)
    {
        try {

            $req = $this->connection->prepare('CALL removeUser(:id_user)');

            $req->bindParam(':id_user', $id_user, PDO::PARAM_STR, 11);
            var_dump($req);
            return $req->execute();
        } catch (PDOException $e) {
            echo($e->getMessage());
            return false;
            header('Location: welcome.php');
        }
    }

}


