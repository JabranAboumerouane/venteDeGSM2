<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>welcom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/style.css">


    <!--Carousel-->
    <header>
        <div class="sizeImageCarousel">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <button type="button" class="d-block w-100 btn btn-link">Promotion!!!</button>
                    </div>
                    <div class="carousel-item">
                        <button type="button" class="d-block w-100 btn btn-link">le nouvelle iphone dispo dans j-1</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <button type="button" class="d-block w-100  btn btn-link">rendez-vous sur www.google.be</button>
                </div>
            </div>
        </div>

    </header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="../venteDeGSM2/index.php">
                <img src="../view/image/logonav2.jpg" alt="logo" style="width:30px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                     <a class="nav-link" href="../controller/entrainement.php">entrainement</a>
                    </li>
                <?php
                if(isset($_SESSION['email_SOK']) && $_SESSION['role_S']==1){
                echo '<li class="nav-item active">';
                    echo '<a class="nav-link" href="../controller/welcome.php">Home</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                 echo '   <a class="nav-link" href="../controller/users.php">Utilisateurs</a>';
                echo '</li>';
                echo '</li>';
                echo '<li class="nav-item">';
                   echo ' <a class="nav-link" href="../controller/gsm.php">GSM</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                  echo '  <a class="nav-link" href="../controller/basket.php">Panier</a>';
                echo '</li>';
                    }elseif (isset($_SESSION['email_SOK']) && $_SESSION['role_S']==2){
                    echo '<li class="nav-item active">';
                    echo '<a class="nav-link" href="../controller/welcome.php">Home</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo ' <a class="nav-link" href="../controller/gsm.php">GSM</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '  <a class="nav-link" href="../controller/basket.php">Panier</a>';
                    echo '</li>';
                }?>
            </ul>
        </div>
        <?php
        if(isset($_SESSION['email_S']) && $_SESSION['email_SOK'] == 1 && isset($_SESSION['email_S'])) {
            $carToDelimite = '@';
            $newSessionName = substr($_SESSION['email_S'], 0, strpos($_SESSION['email_S'],$carToDelimite));
            echo'<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">';
            echo '<ul class="navbar-nav ml-auto menuadroite">
                    <li class="Bonjour">Bonjour ' . $newSessionName .'</li>
                    <il>&nbsp;</il>
                    <li>
                    <form class= "padding10" action="../controller/session_destroy.php" method="post" accept-charset="utf-8">
					<input type="submit" class="btn btn-primary" role="button" name="" value="Se déconnecter">
				</form></li></ul>';
            echo '</div>';
        }else{
            echo '<ul class="navbar-nav ml-auto menuadroite">';
            echo '  <li><a href="../controller/sign.php" class="btn btn-primary" role="button">Sign!</a></li>';
            echo '</ul>';
        }
        ?>
        </div>
    </nav>