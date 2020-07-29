<?php
session_start();
require_once '../model/Model.php';
require_once '../controller/Form.php';
//var_dump($_SESSION['email_S']);
//var_dump($_SESSION['email_SOK']);


if(!isset($_SESSION['email_S']) && !strpos($_SERVER['REQUEST_URI'], '/controller/login.php')/*empeche http */ ){
    header('Location: login.php');
    echo "toto";
}
