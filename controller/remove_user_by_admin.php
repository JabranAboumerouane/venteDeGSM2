<?php
require '../model/Model.php';

$getId=$_GET['id']; //l'id de l'utilisateur
$Users = Model::load('Users');
$id_user=$getId;
$Users->removeUser($id_user);
header('users.php');