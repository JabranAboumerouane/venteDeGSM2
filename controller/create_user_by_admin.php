<?php
session_start();
require_once 'Form.php';
require '../model/Model.php';

$ajoutok=true;
if(isset($_SESSION['ERROR'])): echo $_SESSION['ERROR'];
    unset($_SESSION['ERROR']);
endif;
$Formu = new Form('Formu','POST','create_user_by_admin.php');
$Formu->addText('Votre nom :','first_name','first_name' ,true,'','Dupont');
$Formu->addText('Votre  prénom:','last_name','last_name' ,true,'','Mark');
$Formu->addText('Votre  adresse:','address','address' ,true,'','adresse complete');
$Formu->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
$Formu->addPassword('Mot de passe :','password','password','',true,'********');
$Formu->addSubmit('VALIDER','Valider');
echo $Formu->getForm();
if(isset($_POST["email"])){
    $users = Model::load('users');
    $users->read(null, ' email ="' . $_POST['email'] . '"');
    var_dump($ajoutok);
    if ((count($users->result)) == 1 && $users->result[0]->email == $_POST['email']) {
        $_SESSION['ERROR'] = '<div id="error" class="alert alert-danger">Cette adresse email est déjà utilisé</div>';
        //unset($email);
        header('Location: create_user_by_admin.php');
        return $ajoutok;
    } else {
        $ajoutok = false;
    }
    var_dump($ajoutok);
    if ($ajoutok == false) {
        //unset($_SESSION['ERROR']);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $users->addUser($first_name, $last_name, $address, $email, $password);
        header('Location: users.php');
        return $ajoutok=true;
    }
}

