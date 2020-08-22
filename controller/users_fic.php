<?php


require '../model/Model.php';
$getId=$_GET['id']; //l'id de l'utilisateur
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$id_user=$_GET['id'];

$Users = Model::load('Users');
$Users->updateUser($first_name, $last_name, $address, $email, $password,$id_user);
header('users.php');

