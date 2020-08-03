<?php

// test si l'utilisateur est logger
// si c'est le cas je renvois vers la page 1 il n'est pas utile de charger la page de connection vu qu'il est connecté
if(!isset($_SESSION['email_SOK'])){

    require_once '../model/Model.php';

    $Montitle= 'Enregistrement';

    require_once 'Form.php';
    require '../view/header.php';
    require '../view/sign.php';
    require '../view/footer.php';
}else{
    header('Location: welcome.php');
}