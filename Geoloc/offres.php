<?php 
session_start();
require('php/functions.php');
if ( isset($_SESSION['loggedin']) == false) {
    session_destroy();
}

$listeoffres = recupererOffre();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        
        <script type="text/javascript" src="js/MesFonctionsjs.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript">
            $
            (
                function()
                {
                    AfficherListeOffres();

                }

            );
        </script>
        
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="istyle.css">
        <link rel="stylesheet" href="../css/animate.css">
        
        
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <style type="text/css">
       
            @import URL(istyle.css);

        </style>
    </head>
    <body>

<div class="container-fluid topbar">
    <img src="img/logoGeo.png" alt="">
</div>
<div class="container-fluid">
    <div class="row sidebar">
        <div class="col-2 menu">
            <ul class="menu">
            <?php
                if (isset($_SESSION['jeunes']) == true){
                    echo '<li><a href="logged.php">Home</a></li>';
                    echo '<li><a href="offres.php">Consulter offres</a></li>';
                    echo '<li><a href="profile.php">Modifier profil</a></li>';
                    // echo '<!-- <li><a href="loginform.php">Connexion</a></li> -->';
                    // echo '<li><a href="adminlogin.php">Admin.</a></li>';
                  echo ' <br>
                    <br>
                    <br>';
                }

                if (isset($_SESSION['partenaires']) == true){
                    echo '<li><a href="logged.php">Home</a></li>';
                    echo '<li><a href="offres.php">Consulter offres</a></li>';
                    echo '<li><a href="new_offer.php">Déposer offres</a></li>';
                    echo '<li><a href="profile.php">Modifier profil</a></li>';

                    // echo '<!-- <li><a href="loginform.php">Connexion</a></li> -->';
                    // echo '<li><a href="adminlogin.php">Admin.</a></li>';
                  echo ' <br>
                    <br>
                    <br>';
                }

                ///////////////////////
                // Menu Administrateurs
                ///////////////////////
                //
                //
                if (isset($_SESSION['administrateur']) == true){
                    echo '<li><a href="logged.php">Home</a></li>';
                    echo '<li><a href="offres.php">Liste offres</a></li>';
                    echo '<li><a href="gestion.php">Gestion admin.</a></li>';
                    echo '<li><a href="profile.php">Modifier profil</a></li>';
                    
                    // echo '<!-- <li><a href="loginform.php">Connexion</a></li> -->';
                    // echo '<li><a href="adminlogin.php">Admin.</a></li>';
                  echo ' <br>
                    <br>
                    <br>';
                }

                    if (isset($_SESSION['loggedin']) == true){
                        echo '<li><a href="php/disconnect.php">Disconnect</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="col-10 app">
            <div class="row">
            
            <div class="col" id="offre"></div>
            <!-- <div class="col"></div> -->
            
            </div>


        </div>
    </div>
</div>

</body>

</html>