<?php
$monFormulaire = new Form('Formulaire','POST','../controller/login.php');
$monFormulaire->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addPassword('Mot de passe :','password','password','',true,'Entrez ici votre nom');
$monFormulaire->addSubmit('VALIDER','Valider');

require '../view/header.php' ;
echo $monFormulaire->getForm();

require '../view/footer.php' ;