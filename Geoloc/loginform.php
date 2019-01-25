<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="indexStyle.scss"> -->
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
                <li><a href="index1.php">Home</a></li>
                <li><a href="loginform.php">Connexion</a></li>
                <li><a href="adminlogin.php">Admin.</a></li>
            </ul>
        </div>
        <div class="col-10 app">
        <div class="row">
            <br>
            <h1 style="padding-left: 15px;padding-top:15px;"><u>Connexion</u> </h1>
            <hr>
        </div>
        <br>
            <div class="row justify-content-center">
                <div class="col-6-auto">
                    <form action="php/connect-switch.php" method="post">
                        <p>Email : <br>
                            <input class="input-form" style="width : 250px;" type="text" name="email" placeholder="Entrer votre n° de siret"/>
                        </p>
<br>
                        <p>Mot de passe : 
                            <br>
                            <input class="input-form" style="width : 250px;" type="password" name="passw" placeholder="Entrer votre mot de passe"/> 
                            <br>
                        </p>
                        <br>
                        <p>
                            <input class="btn-addpost" style="width: 250px; height:55px;" type="submit" value="Connexion" id="butpart"/>
                            <br>
                            <!-- <a href="php/nouveau_partenaires.php">Devenir partenaire</a> -->
                        </p>

                </form>
                <hr>
                <br>
                <form action="new_partner.php">
                    <h3>Vous êtes un nouveau partenaire et vous souhaitez déposer une offre ?</h3>
                    <br>
                    <input class="btn-addpost" style="width: 250px; height:55px;" type="submit" value="Cliquez ici !">
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>