<div class="container-fluid">
    <div class="row">
        <header id="header" class="col-lg-10 offset-3">
            <h1>Sign!</h1>
        </header>
    </div>
</div>
<div class="container">
    <div class="row">
        <section class="col-lg-10">
            <h2>Inscription</h2>
            <article>
                <h3>Formulaire de connexion</h3>
                <?php
                $myForm = new Form('connect', 'connect','POST','loginControl.php');
                if(isset($_SESSION['ERRORLOGIN'])){
                    $varError = $_SESSION['ERRORLOGIN'];
                    echo '<div id="nomError" class="alert alert-danger"> '.$varError.' </div>';
                }
                $myForm->setText('Username :','username','username' ,true,'','nom.prénom');
                $myForm->setText2('<div id="nomError" hidden="true" class="alert alert-danger">le login n\'exist pas </div>');
                $myForm->setPassword('Password :','password','password',true,'','password');
                $myForm->setSubmit('VALIDER','Valider');
                echo $myForm->getForm();
                ?>
            </article>
        </section>
    </div>
</div>
</div>
