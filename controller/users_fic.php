<?php

require_once '../controller/core.php';

$var_id_user="";
$var_first_name = "";
$var_last_name = "";
$var_address = "";
$var_email = "";
$var_password = "";


$var_role = 1;
$var_enable = 0;
$var_mode = "C";

$users = Model::load("Users");
$users->dump_sql = true;

/*SI je suis dans un mode, c'est que je dois effectuer une action DB*/
if (isset($_POST['MODE'])) {

    $var_mode = "U";

    if (isset($_POST['roles_id_role'])) {
        $var_role = $_POST['roles_id_role'];
    }
    if (isset($_POST['enable'])) {
        $var_enable = $_POST['enable'];
    }

    switch ($_POST['MODE']) {
        case 'C':
            $users->user_create($_POST['id_user'], $_POST['first_name'], $_POST['last_name'], $_POST['address'], $_POST['email'], $_POST['password'], $var_role, $var_enable);
            break;
        case 'U':
            $users->employe_update($_POST['id_user'], $_POST['first_name'], $_POST['last_name'], $_POST['address'], $_POST['email'], $_POST['password'], $var_role, $var_enable);
        default:
            break;
    }
} else {
    /* Je dois juste afficher l'employe passé en paramètre*/
    if (isset($_POST['last_name'])) {
        $var_id_user = $_POST['last_name'];
        $var_mode = "U";
        $users->id = $var_last_name;
        $users->read();

        if (isset($users->result[0]->last_name)) {
            $var_id_user = $users->result[0]->id_user;
            $var_first_name = $users->result[0]->first_name;
            $var_last_name = $users->result[0]->last_name;
            $var_email = $users->result[0]->email;
            $var_password = $users->result[0]->password;
            $var_role = $users->result[0]->role;
            $var_enable = $users->result[0]->enable;
        }

    }
}
$monFormulaire = new Form('Formulaire', 'POST', 'users_fic.php');
$monFormulaire->addHidden('MODE', 'MODE', $var_mode);
$monFormulaire->addText('Nom :', 'first_name', 'first_name', '', false, 'Dupont', $var_first_name);
$monFormulaire->addText('Prénom :', 'last_name', 'last_name', '', false, 'Thony', $var_last_name);
$monFormulaire->addText('Adresse :', 'address', 'address', '', false, 'Adresse compléte ', $var_last_name);
$monFormulaire->addText('email :', 'email', 'email', '', false, 'email', $var_email);
$monFormulaire->addText('password :', 'password', 'password', '', false, '*********', $var_last_name);

$monFormulaire->addCheckbox('Role :', 'role', 'role', $var_role);
$monFormulaire->addCheckbox('Actif :', 'enable', 'enable', $var_enable);
$monFormulaire->addSubmit('VALIDER', 'Valider');
echo $monFormulaire->getForm();
