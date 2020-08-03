<?php


require_once 'core.php' ;

if( isset($_POST['last_name'])){
    $tmp_user=Model::load("Users");
    $tmp_user->user_active($_POST['last_name']);
    echo '1';
}else{
    echo '0';
}