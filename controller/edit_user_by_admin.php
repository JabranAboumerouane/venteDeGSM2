<?php

session_start();
require '../model/Model.php';
require_once 'Form.php';

$getId=$_GET['id']; //l'id de l'utilisateur
$Users = Model::load('Users');
$Users->read(null, ' id_user ="' . $getId . '"');



$Formu = new Form('Formu','POST','users_fic?id='.$getId.'');
$Formu->addText('Votre nom :','first_name','first_name' ,true,'','',$Users->result[0]->first_name );
$Formu->addText('Votre  prénom:','last_name','last_name' ,true,'','',$Users->result[0]->last_name);
$Formu->addText('Votre  adresse:','address','address' ,true,'','',$Users->result[0]->address );
$Formu->addEmail('Email :','email','email','',true,'',$Users->result[0]->email );
$Formu->addPassword('Mot de passe :','password','password','',true,'',$Users->result[0]->password);
$Formu->addSubmit('VALIDER','Valider');
echo $Formu->getForm();

