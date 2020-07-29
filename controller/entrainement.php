<?php
$Montitle= 'GSM';

require_once '../model/Model.php';

$Users = Model::load('Users');
$Users->read(null,'');

var_dump($Users);




require '../view/header.php';
require '../view/entrainement.php';
require '../view/footer.php';