<?php

require_once 'core.php' ;

if( isset($_POST['active'])){
    $tmp_user=Model::load("Users");
    $tmp_user->user_desactive($_POST['active']);
    echo '0';
}else{
    echo '1';
}
