<?php 
session_start();
require('php/functions.php');
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
                <form action="../php/modif_jeunes.php" method="post">

                    <p>Adresse Mail : <br>
                        <input style="width : 200px;" type="text" name="mail" value="<?php echo $_SESSION['etudiant']['mail'] ?>" required>
                    </p>   

                    <p>Mot de passe :<br>
                        <input style="width : 200px;" type="password" name="passw" value="<?php echo $_SESSION['etudiant']['passw'] ?>" required >
                    </p>
                    <div class="row">
                        <p class="col">
                            <input type="submit" value="Modifier le profil" style="width : 200px;"/>
                        </p>
                    </div>
                </form>
                 <hr> 
                 <div class="row">

                    <div class="col" id="col"></div>

                 </div>
                    <div class="row">
                    <form action="php/upload.php" method="post" enctype="multipart/form-data"><br>
                        <div class="row">
                            <div class="col"><p>C.V :</p>
                                <input type="file" name="file" /> <br>
                                <input type="submit" name="btn-upload" value="Importer C.V" style="width : auto;"/>
                            </div>
                        </div>
                    </form>
                    <br>
                    <form action="upload2.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col"> <p>Lettre de Motivation :</p>   
                                <input type="file" name="ldm" /> <br>
                                <input type="submit" name="btn-upload" value="Importer Lettre de motivation" style="width : auto;"/>
                            </div>
                        </div>
                        <br>
                    </form>


                    </div>
                </div>
                <div class="col infoboard">
                <br>
                    <div class="row">
                        <img class="profileimage" style="width: 200px"; height="200px;" src="img/fab.jpeg" alt="">
                    </div>
                    <br>
                    <hr>
                    <br>

        
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>