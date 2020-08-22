<?php
session_start();
require '../model/Model.php';

$ajoutok=true;

if($_POST['password']!=$_POST['repeatPassword'])
    {
        $_SESSION['ERROR1']='<div id="error" class="alert alert-danger">Les mots de passes ne sont pas identiques</div>';
        header('Location: sign.php');

    }else {
    $Users = Model::load('Users');
    $Users->read(null, ' email ="' . $_POST['email'] . '"');
        if ((count($Users->result)) == 1 && $Users->result[0]->email == $_POST['email']) {
            $_SESSION['ERROR'] = '<div id="error" class="alert alert-danger">Cette adresse email est déjà utilisé</div>';
            header('Location: sign.php');
            return $ajoutok;
        } else {
            $ajoutok = false;
        }
    if ($ajoutok == false) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $_SESSION['email_S'] = $email;
        $_SESSION['email_SOK'] = 1;
        $_SESSION['role_S'] = 2;
        $Users->addUser($first_name, $last_name, $address, $email, $password);
        header('Location: welcome.php');
        return $ajoutok=true;
    }
}
