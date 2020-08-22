<?php
require_once 'core.php' ;

$var_first_name ="";
$where ="";

if (isset($_POST['first_name'])){
    $var_first_name=$_POST['first_name'];
    if($where!=""){
        $where.=" and ";
    }
    $where.=" upper(first_name)  like upper('%".$var_first_name."%' )";
}

if(Control_util::isAjax()) {
    $monFormulaire = new Form('form_find_user', 'POST', '?');
    $monFormulaire->addText('Recherche par nom (first_name) :', 'last_name', 'last_name', $var_first_name, false, 'Nom');
    echo $monFormulaire->getForm();
}
if(Control_util::isAjax()) {
    $monFormulaire2 = new Form('form_new_user', 'POST', 'create_user_by_admin.php');
    $monFormulaire2->addSubmit('VALIDER', 'Ajouter un utilisateur ici');
    echo $monFormulaire2->getForm();
}

$users=Model::load("Users");
$users->read(null,$where='');
require '../view/users_tab.php' ;