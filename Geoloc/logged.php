<?php 
session_start();
require('php/functions.php');
$bdd = new PDO('mysql:host=localhost;dbname=geoloc2;charset=utf8', 'root', 'root');
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    session_destroy();
}
if (isset($_SESSION['administrateur'])) { 
    $rnum = $bdd->query("SELECT * FROM users WHERE grade = 'etudiant'") ;
    $countjeunes = $rnum->rowCount();
    $rnum = $bdd->query("SELECT * FROM users WHERE grade = 'partenaires'") ;
    $countpartenaire = $rnum->rowCount();
    $rnum = $bdd->query("SELECT * FROM ajout_offre") ;
    $countoffre = $rnum->rowCount();
}
if (isset($_SESSION['jeunes'])) { 
    $rnum = $bdd->query("SELECT * FROM ajout_offre") ;
    $countoffre = $rnum->rowCount();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>


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
                // Menu Entreprise
                if (isset($_SESSION['partenaires']) == true){
                    echo '<li><a href="logged.php">Home</a></li>';
                    echo '<li><a href="offres.php">Consulter offres</a></li>';
                    echo '<li><a href="profile.php">Modifier profil</a></li>';
                    // echo '<!-- <li><a href="loginform.php">Connexion</a></li> -->';
                    // echo '<li><a href="adminlogin.php">Admin.</a></li>';
                  echo ' <br>
                    <br>
                    <br>';
                }
                // Menu Administrateurs
                if (isset($_SESSION['administrateur']) == true){
                    echo '<li><a href="logged.php">Home</a></li>';
                    echo '<li><a href="offres.php">Liste entreprises</a></li>';
                    echo '<li><a href="profile.php">Liste étudiants</a></li>';
                    echo '<li><a href="">Gestion admin.</a></li>';
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
                    <h1 style="padding-left: 35px;">
                    <?php
                        if (isset($_SESSION['jeunes'])) { 
                            echo "Bienvenue ",$_SESSION['jeunes']['prenom'];
                        }
                        if (isset($_SESSION['partenaires'])) { 
                            echo "Bienvenue ",$_SESSION['partenaires']['prenom'];
                        }
                        if (isset($_SESSION['administrateur'])) { 
                            echo "Bienvenue ",$_SESSION['administrateur']['prenom'];
                        }

                    ?>
                    </h1>
                    <hr>

                <!-- <div class="col" style="background-color: blue;height: 90vh;"></div>
                <div class="col" style="background-color: red;height: 90vh;"></div>
                <div class="col" style="background-color: beige;height: 90vh;"></div> -->

            </div>
            <hr>
            <div class="row">
                <div class="col offerboard">
            <?php
            // Contenue Administrateur
                if (isset($_SESSION['administrateur'])) {
                    echo '<br> <br>
                    <article>
                        <h6>L\'établissement compte actuellement : ';echo $countjeunes; echo ' étudiants inscrit.</h6>
                    </article>
                    <br> <hr> <br>
                    <article>
                        <h6>';echo $countpartenaire; echo ' Entreprises ont rejoint nôtre établissement actuellement.</h6>
                    </article>
                    <br> <hr> <br>
                    <article>
                        <h6>';echo $countoffre; echo ' Offres ont été déposées à ce jour.</h6>
                    </article>
                    ';
                 }
                
            // Contenue Étudiant
                if (isset($_SESSION['jeunes'])) {
                    echo '<br> <br>
                    <article>
                        <h6>';echo $countoffre; echo ' offres sont disponible.</h6>
                    </article>
                    <br> <hr> <br>
                    <article>
                        <h6>';echo 'Il existe '; echo'pour votre filière.</h6>
                    </article>
                    <br> <hr> <br>
                    <article>
                        <h6> Vous avez postulé à ';echo $countoffre; echo ' Offres à ce jour.</h6>
                    </article>
                    ';
                }
            ?>

                </div>
                <div class="col infoboard">
                <br>
                    <div class="row">
                        <img class="profileimage" style="width: 200px"; height="200px;" src="uploads/<?php echo getPicture(); ?>" alt="">
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row details">
                            <?php

                                if (isset($_SESSION['jeunes'])) { 
                                    echo "<h3><u>",$_SESSION['jeunes']['prenom']," ",$_SESSION['jeunes']['nom'],"</u></h3><br>";
                                }
                                if (isset($_SESSION['partenaires'])) { 
                                    echo "<h3><u>",$_SESSION['partenaires']['prenom']," ",$_SESSION['partenaires']['nom'],"</u></h3>";
                                }
                                if (isset($_SESSION['administrateur'])) { 
                                    echo "<h3><u>",$_SESSION['administrateur']['prenom']," ",$_SESSION['administrateur']['nom'],"</u></h3>";
                                }
                            ?> 
                    </div>
                    <br>
                    <div class="row details">
                    
                            <?php
                                if (isset($_SESSION['jeunes'])) { 
                                    echo "<h3>",$_SESSION['jeunes']['filliere'],"</h3>";
                                    }
                                if (isset($_SESSION['partenaires'])) { 
                                    echo "<h3>",$_SESSION['partenaires']['entreprise'],"</h3><br>";
                                    echo "<h3>",$_SESSION['partenaires']['fonction'],"</h3>";
                                    }
                                if (isset($_SESSION['administrateur'])) { 
                                    echo "<h3>",$_SESSION['administrateur']['fonction'],"</h3>";
                                    }
                                
                                // if (isset($_SESSION['administrateur'])) { 
                                //     echo "<h3><u>",$_SESSION['administrateur']['prenom']," ",$_SESSION['administrateur']['nom'],"</u></h3>";
                                //     }
                            ?>
                    </div>
                    <br>
                    <div class="row details">
                    
                            <?php
                                if (isset($_SESSION['jeunes'])) { 
                                    echo '<p style="font-weight: bold;">',$_SESSION['jeunes']['annee'],' année</p>';
                                    }
                                // if (isset($_SESSION['partenaires'])) { 
                                //     echo "<h3>",$_SESSION['partenaires']['entreprise'],"</h3>";
                                //     }
                                // if (isset($_SESSION['administrateur'])) { 
                                //     echo "<h3><u>",$_SESSION['administrateur']['prenom']," ",$_SESSION['administrateur']['nom'],"</u></h3>";
                                //     }
                            ?>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>