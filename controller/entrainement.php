<?php
$Montitle= 'GSM';

require_once '../model/Model.php';
require 'Form.php';
//$Users = Model::load('Users');
//$Users->read(null, ' email = email');

//var_dump($Users);
//var_dump(!isset($_POST['toto']));
//var_dump($Users->result[0]->password);
//var_dump($Users->result[1]->roles_id_role);

$newtable=Model::load('Newtable');

$newtable->read(null,'');
var_dump($newtable);
if(isset($_POST['nom']) && isset($_POST['prenom'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    echo $_POST['nom'];
    echo $_POST['prenom'];

    $newtable->addTOTO($nom, $prenom);
    echo "ok";
}

$monform = new Form('Formulaire','POST','../controller/entrainement.php');
$monform->addEmail('Nom :','nom','nom','',true,'nom.prenom@fournisseur.be');
$monform->addEmail('prenom :','prenom','nom','',true,'nom.prenom@fournisseur.be');
$monform->addSubmit('VALIDER','Valider');
echo $monform->getForm();



require '../view/header.php';
require '../view/entrainement.php';
require '../view/footer.php';