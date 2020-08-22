<?php
session_start();
// test si l'utilisateur est logger
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