<?php
require_once '../controller/core.php' ;

$var_name ="";
$where ="";

if (isset($_POST['last_name'])){
    $var_name=$_POST['last_name'];
    if($where!=""){
        $where.=" and ";
    }
    $where.=" upper(last_name)  like upper('%".$var_name."%' )";
}

if(Control_util::isAjax()){
    $monFormulaire = new Form('Form_find_user','POST','?');
    $monFormulaire->addText('Nom :','last_name','last_name',$var_name,false,'Nom recherché');

    echo $monFormulaire->getForm();
}
if(Control_util::isAjax()){
    $monFormulaire2 = new Form('New_user','POST','users_fic.php');
    $monFormulaire2->addSubmit('VALIDER','Ajouter un utilisateur');
    echo $monFormulaire2->getForm();
}

$users=Model::load("Users");
$users->read(null,$where='');
require '../view/users_tab.php' ;