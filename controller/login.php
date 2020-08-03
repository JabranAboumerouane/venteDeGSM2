<?php



require '../controller/core.php' ;

$Montitle= 'Login';


if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$pass = password_hash($password,PASSWORD_BCRYPT);
    $Users = Model::load('Users');
    $Users->read(null, ' email ="' . $email . '"');//donne lieu à la requete select * from users where email=$username
    //var_dump($Users);
    //var_dump($Users->result[0]->password);
    //var_dump($Users->result[0]->roles_id_role);

    if ((count($Users->result)) == 1 && $Users->result[0]->password == $password) {
        //if(password_verify($password,$Users->result[0]->password)){
        $_SESSION['email_S'] = $Users->result[0]->email;
        $_SESSION['role_S']= $Users->result[0]->roles_id_role;
        $_SESSION['email_SOK'] = 1;
        unset($_SESSION['ERRORLOGIN']); //détruire la variable globale
        header('Location: welcome.php');
    } else {
    $_SESSION['ERRORLOGIN'] = "Erreur! username/password incorrect";
    header('Location: Login.php');
    }
}



$monFormulaire = new Form('Formulaire','POST','../controller/login.php');
$monFormulaire->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addPassword('Mot de passe :','password','password','',true,'*********');
$monFormulaire->addSubmit('VALIDER','Valider');

require '../view/header.php' ;
echo $monFormulaire->getForm();

require '../view/footer.php' ;