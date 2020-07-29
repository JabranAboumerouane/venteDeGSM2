<?php
require_once '../controller/core.php' ;
require_once '../model/Model.php';

$var_last_name ="";
$where ="";

if (isset($_POST['last_name'])){
    $var_last_name=$_POST['last_name'];
    if($where!=""){
        $where.=" and ";
    }
    $where.=" upper(last_name)  like upper('%".$var_last_name."%' )";
}


$users=Model::load("Users");
$users->read(null,$where='');
var_dump($users);
require '../view/users_tab.php' ;