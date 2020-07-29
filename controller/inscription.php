<?php
require 'Core.php';
// test si l'utilisateur est logger
// si c'est le cas je renvois vers la page 1 il n'est pas utile de charger la page de connection vu qu'il est connecté
if(!isset($_SESSION['email_OK'])){
    $Montitle= 'Enregistrement';
    require_once 'Form.php';
    require '../VIEW/header.php';
    require '../VIEW/inscription.php';
    require '../VIEW/footer.php';
}else{
    header('Location: welcome.php');
}