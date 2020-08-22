<?php

require_once 'core.php' ;

if( isset($_POST['active'])){
    $tmp_user=Model::load("Users");
    $tmp_user->read(null, '  ="' . $email . '"');
    //$tmp_user->user_active($_POST['active']);
    echo '1';
}else{
    echo '0';
}