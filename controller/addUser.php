<?php
require 'core.php';

        $Users = Model::load('Users');
        $Users->read(null,' email ="'.$_POST['email'].'"');

    if((count($Users->result)) == 1 && $Users->result[0]->email == $_POST['email'])
    {
            $ajout=false;
        }else{
            $ajout=true;
    }
var_dump($ajout);
    if($ajout==true && $_POST['password']==$_POST['repeatPassword']){

        $last_name=$_POST['last_name'];
        $first_name=$_POST['first_name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $Users->addUser($first_name,$last_name,$address,$email,$password);
        $_SESSION['email_S']=$email;
        $_SESSION['email_SOK']=1;
        $_SESSION['role_S']=2;

        header('Location: welcome.php');
    }else{
        header('Location: sign.php');
}