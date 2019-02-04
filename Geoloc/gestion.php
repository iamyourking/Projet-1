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
                    AfficherListeJeunes();
                    AfficherListeEntreprises();

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

                //////////////////////////
                // Menu Administrateurs///
                //////////////////////////
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
        <!-- <div class="row">
            <br>
            <h1 style="padding-left: 15px;padding-top:15px;"><u>Connexion</u> </h1>
            <hr>
        </div> -->
        
        <br>
            
            <div class="row">
                <div class="col offerboard">
                    <div class="row listejeunes">
                        <div class="col">
                            <h1 style="padding-left: 20px;">Liste étudiants</h1>
                        <hr>
                            <div class="col" id="coljeunes"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col listepartenaires">
                            <h1 style="padding-left: 20px;">Liste partenaires</h1>
                        <hr>
                            <div class="col" id="colpartenaires"></div>
                        </div>
                    </div>
                </div>
                <div class="col infoboard">
                    <div class="row">
                    <div class="col">
                    <form action="php/inscription_jeune.php" method="post">
                        <h3>Création étudiant</h3>
                <hr>

                    <p> Nom : <br>
                        <input style="width : auto;" type="text" name="nom" placeholder="Entrez votre nom." required >
                    </p>

                    <p> Prénom : <br>
                        <input style="width : auto;" type="text" name="prenom" placeholder="Entrez votre prénom." required >  
                    </p>

                    <p> Adresse Mail : <br>
                        <input style="width : auto;" type="text" name="mail" placeholder="Adresse Mail de l'étudiant" required >
                    </p>

                    <p> Section : <br>
                        <!-- <input style="width : auto;" type="text" name="filliere" placeholder="Entrez la filière." required > -->
                        <select name="filliere">
                            <option value="" selected >Choisir une filière</option>
                            <option value="BTS SIO">SIO</option>
                            <option value="BTS NDRC">NDRC</option>
                            <option value="BTS PIM">PIM</option>
                            <option value="BTS AG">AG</option>
                            <option value="BTS MUC">MUC</option>
                            <option value="3eme année">3eme cycle</option>
                            <option value="4eme année">4eme cycle</option>
                            <option value="5eme année">5eme cycle</option>
                        </select>
                    </p>

                    <p> Année : <br>
                        <input style="width : auto;" type="text" name="annee" placeholder="L'année de l'étudiant" required >
                    </p>
                        <p>Mot de passe :<br> 
                        <input style="width : 250px;" type="password" name="passw" placeholder="Entrez un mot de passe." required >
                        </p>
                    <!-- <div class="inputplot" style="  width: 50%;
                                                    margin: auto;
                                                    text-align: center;
                                                    font-weight: bold; "> -->

                     <p> Sexe :<br>
                        <input type="radio" name="gender" value="homme" >
                        <label for="homme" style="font-size: 36px;"> 👨‍💼  </label>
                        <input type="radio" name="gender" value="femme" >
                        <label for="femme" style="font-size: 36px;"> 👩‍💼 </label>
                        <input type="radio" name="gender" value="none" >
                        <label for="none" style="font-size: 36px;"> 👤  </label>
                    </p>
                        <input type="submit" value="Création jeune">
                    </form>
                </div>

        
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>