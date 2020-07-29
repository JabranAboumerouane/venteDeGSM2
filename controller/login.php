<?php



require '../controller/core.php' ;

$Montitle= 'Login';


if(isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    //$pass = password_hash($password,PASSWORD_BCRYPT);
    $Users = Model::load('Users');
    $Users->read(null, ' email ="' . $username . '"');//donne lieu à la requete select * from users where email=$username
    //var_dump($Users);
    //var_dump($Users->result[0]->password);

    if ((count($Users->result)) == 1 && $Users->result[0]->password == $password) {
        //if(password_verify($password,$Users->result[0]->password)){
        $_SESSION['email_S'] = $Users->result[0]->email;
        $_SESSION['email_SOK'] = 1;
        unset($_SESSION['ERRORLOGIN']); //détruire la variable globale
        header('Location: welcome.php');
    } elseif (toto) {
        $_SESSION['ERRORLOGIN'] = "Erreur! username/password incorrect";
        header('Location: Login.php');
    } else {
    $_SESSION['ERRORLOGIN'] = "Erreur! username/password incorrect";
    header('Location: Login.php');

}
}



$monFormulaire = new Form('Formulaire','POST','../controller/login.php');
$monFormulaire->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addPassword('Mot de passe :','password','password','',true,'Entrez ici votre nom');
$monFormulaire->addSubmit('VALIDER','Valider');

require '../view/header.php' ;
echo $monFormulaire->getForm();

require '../view/footer.php' ;