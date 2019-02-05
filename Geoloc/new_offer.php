<?php 
session_start();
require('php/functions.php');
if ( isset($_SESSION['loggedin']) == false) {
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/MesFonctionsjs.js"></script>
        <script type="text/javascript">
            $
            (
                function()
                {
                    AfficherListeDocuments();
                    

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
            // Menu Jeunes
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
            // Menu partenaires
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
        <h1>Création offre</h1>
        <hr>
                    <form method="post" action="php/functions.php" id="desc_offre">
                    <div style="display:flex;">
                    <br>
                        <h5>Intitulé du poste :
                            <input type="text" name="titre" required>
                            </h5>
                        <h5>Filiere :
                            <select name="filiere" id="selecteur">
                                <option> --- </option>
                                <option>BTS SIO</option>
                                <option>BTS CG</option>
                                <option>BTS NDRC</option>
                                <option>BTS MUC</option>
                            </select></h5>
                        <h5>Date de début :
                            <input type="date" name="debut" required></h5>
                        <h5>Durée en poste :
                            <input type="text" name="duree" required></h5>
                    </div>
                    <hr>

                    <div style="display:flex;">
                    <div>
                        
                    <h5>Adresse :<br>
                        <input type="text" name="address" required></h5>
                    <h5>Ville :<br>
                        <input type="text" name="ville" required></h5>
                    </div>
                    <div>
                    <h5>Code postal :<br>
                        <input type="number" name="dp" required></h5>
                    <h5>Numéro de téléphone :<br>
                        <input type="number" name="phone" required></h5>
                        </div>
                        </div>
                        </form>
                    
                    
                        <br>
                    <h5>Description :<br><br>
                        <textarea rows="15" cols="100" name="description" form="desc_offre" style="text-align:left;" required>
                        </textarea></h5>
                    <input type="submit" name="signin" form="desc_offre" value="Ajouter Offre"/>
            </div>
        </div>
    </div>
</div>

</body>
</html>