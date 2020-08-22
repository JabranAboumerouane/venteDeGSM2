
</div>
<div class="container">
    <div class="row">
        <header id="header" class="col-lg-10">
            <h1>Formulaire d'inscription</h1>
        </header>
    </div>
    <div class="row">
        <section class="col-lg-10">
            <article>

                <?php
              //  $_SESSION['toto']='<h1>samut</h1>';

               // echo $_SESSION['toto'];
                if(isset($_SESSION['ERROR'])): echo $_SESSION['ERROR'];
                unset($_SESSION['ERROR']);
                elseif (isset($_SESSION['ERROR1'])):
                    echo $_SESSION['ERROR1'];
                    unset($_SESSION['ERROR1']);
                    endif;

                $myForm = new Form('myForm','POST','addUser.php');
                $myForm->addText('Votre nom :','first_name','first_name' ,true,'','Dupont');
                $myForm->addText('Votre  prénom:','last_name','last_name' ,true,'','Mark');
                $myForm->addText('Votre  adresse:','address','address' ,true,'','adresse complete');
                $myForm->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
                $myForm->addPassword('Mot de passe :','password','password','',true,'********');
                $myForm->addPassword('Répéter le mdp :','repeatPassword','repeatPassword','',true,'********');
                $myForm->addSubmit('VALIDER','Valider');
                echo $myForm->getForm();
                ?>
            </article>
        </section>
    </div>
</div>
</div>

<?php
/*$myForm->setText('Votre  prénom:','last_name','last_name' ,true,'','Mark');
$myForm->setText('Votre  adresse:','address','address' ,true,'','adresse complete');
$myForm->addEmail('Email :','email','email','',true,'nom.prenom@fournisseur.be');
$myForm->addPassword('Mot de passe :','password','password','',true,'********');*/