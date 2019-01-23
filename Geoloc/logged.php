<?php 
session_start();
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="istyle.css">
        <link rel="stylesheet" href="../css/animate.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

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
                <br> <br>
                <article>
                    <h3>Vous avez postulez à : 15 offres</h3>
                </article>
                <br> <hr> <br>
                <article>
                    <h3>Vous avez 3 offres en attente de réponse</h3>
                </article>
                <br> <hr> <br>
                <article>
                    <h3>Vous avez 12 offres ayant une réponse</h3>
                </article>
                <br> <hr> <br>
                </div>
                <div class="col infoboard">
                <br>
                    <div class="row">
                        <img class="profileimage" style="width: 200px"; height="200px;" src="img/fab.jpeg" alt="">
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
                                    echo "<h3>",$_SESSION['partenaires']['entreprise'],"</h3>";
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