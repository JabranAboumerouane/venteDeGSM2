<?php
$Montitle= 'Utilisateurs';

require_once '../controller/core.php' ;

if(isset($_SESSION['role_S'])!=1 && !strpos($_SERVER['REQUEST_URI'], '/controller/welcome.php')/*empeche http */ ){
    header('Location: welcome.php');
}
if(Control_util::isAjax()) {
    require '../view/header.php';
}

require '../view/users.php';
require 'find_user.php' ;

if(Control_util::isAjax()) {
    require '../view/footer.php';
}