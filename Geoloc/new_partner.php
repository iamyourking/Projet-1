<?php 
// session_start();
// if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
//     session_destroy();
// }

if ( isset($_SESSION['loggedin']) == true) {
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
                    echo '<li><a href="index1.php">Home</a></li>';
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
                    } else if (isset($_SESSION['loggedin']) ==  false) {
                        echo '<li><a href="index1.php">Home</a></li>';
                        // echo '<li><a href="offres.php">Consulter offres</a></li>';
                        // echo '<li><a href="profile.php">Modifier profil</a></li>';
                        echo '<li><a href="loginform.php">Connexion</a></li>';
                        echo '<li><a href="adminlogin.php">Admin.</a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="col-10 app">
            <div class="row">
                <div class="col">
                    <h1>Inscription Partenaires</h1>
                </div>
            </div>
            <hr>

            
            <div class="row">

            <div class="col offerboard">

                <form action="change-pp.php" method="post" enctype="multipart/form-data">
                    <p>Commencez par ajouter le logo de l'entreprise.</p>
                    <span>
                        <input type="hidden" name="key" value="entreprise">
                        <input type="file" name="file"/> <input type="submit" name="btn-upload">
                    </span>
                </form>

                <form action="php/inscription_partenaires.php" method="post">
                    <br>
                    <p>Nom de l'entreprise : <br></p>
                    <input style="width:250px;;" type="text" name="entreprise" placeholder="Renseignez le nom de vôtre entreprise." required >
                    <br> <br>
                    <p>Siret : <br></p>
                    <input style="width : 250px;" type="number" name="Siret" placeholder="Entrez votre numero Siret." required >        
                    <br> <br>
                    <p>Fonction : <br> </p>
                    <input style="width : 250px;" type="text" name="fonction" placeholder="Entrez votre fonction." required >
                    <br><br>
                    <br><br>
                    <input type="submit" value="Inscription"/>
                    
                </div>
                <div class="col infosignin">  
                    <br>   
                    <p>Nom : <br> </p>
                    <input style="width : 250px;" type="text" name="nom" placeholder="Entrez votre nom." required >
                    <br> <br>
                    <p>Prénom : <br> </p>
                    <input style="width : 250px;" type="text" name="prenom" placeholder="Entrez votre prénom." required >                           
                    <br> <br>
                    <p>Mot de passe :<br> </p>
                    <input style="width : 250px;" type="password" name="passw" placeholder="Entrez un mot de passe." required >
                    <div class="inputplot" style="  width: 50%;
                                                    margin: auto;
                                                    text-align: center;
                                                    font-weight: bold; ">

                    <br>
                    <p>Adresse Mail : <br>
                    <input style="width : 250px;" type="text" name="mail" placeholder="Entrer une adresse mail valide." required >
                    </p>   

                    Sexe :<br>
                    <input type="radio" name="gender" value="homme" >
                    <label for="homme" style="font-size: 36px;"> 👨‍💼  </label>
                    <input type="radio" name="gender" value="femme" >
                    <label for="femme" style="font-size: 36px;"> 👩‍💼 </label>
                    <input type="radio" name="gender" value="none" >
                    <label for="none" style="font-size: 36px;"> 👤  </label>
                    </div>
                </div>
            </div>
            </form> 

        </div>
    </div>
</div>

</body>
</html>