<?php
session_start();
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    session_destroy();
}
else {
    if (isset($_SESSION['loggedin1']) == true){
        // var_dump($_SESSION['partenaires']);
        header('Location: php/index_partenaires.php');
        ////        //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";

    } else
        if (isset($_SESSION['loggedin']) == true) {
            // var_dump($_SESSION['jeunes']);
            header('Location: php/index_jeunes.php');
            ////    }
        }

}
?>
<!doctype html>

<html>
    <head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/basic.css">
        <link rel="stylesheet" href="../css/animate.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row"style="padding-bottom: 2%; padding-top : 2%;">
                <div class="col">
                    <img src="img/logoGeo.png" style="width: 200px; height: 170px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="partenaires animated fadeInRight">
                        <h1 id="part"><?php echo 'PARTENAIRES' ?></h1>
                        <br>
                        <form action="php/connect-switch.php" method="post">
                            <p>Siret : <br>
                                <input style="width : 250px;" type="text" name="email" placeholder="Entrer votre n° de siret"/>
                            </p>

                            <p>Mot de passe : 
                                <br>
                                <input style="width : 250px;" type="password" name="passw" placeholder="Entrer votre mot de passe"/> 
                                <br>
                            </p>
                            <br>
                            <br>
                            <p>
                                <input type="submit" value="Connexion" id="butpart"/>
                                <br>
                                <a href="php/nouveau_partenaires.php">Devenir partenaire</a>
                            </p>

                        </form>
                    </div>

                </div>
                <!--
<div class="col">
<div class="offres animated fadeInRight">
<h1 id="entre"><?php echo 'OFFRES' ?></h1>
<br>
<br>
<br>
<input type="button" href="/php/nouveau_partenaires.php" id="butentre" value="Déposer une offre">
<br>
<br>
<br>
<br>
<br>
</div>
</div>
-->
                <div class="col">
                    <div class="jeunes animated fadeInRight">
                        <h1 id="idjeun"><?php echo 'JEUNES' ?></h1>
                        <br>
                        <form action="php/connexion_jeunes.php" method="post">
                            <p>Login : <br>
                                <input style="width : 250px;" type="text" name="login" placeholder="Entrer votre login"/>
                            </p>

                            <p>Mot de passe :<br>
                                <input style="width : 250px;" type="password" name="passw" placeholder="Entrer votre mot de passe"/>
                                <br>
                            </p>
                            <br>
                            <br>
                            <p>
                                <input type="submit" value="Connexion" id="butjeun"/>
                                <br>
                                <!-- <a href="php/nouveau_jeunes.php">S'inscrire</a> -->
                            </p>
                        </form>
                    </div>
                </div>
                <!--
<div class="col">
<div class="admin animated fadeInRight">
<h1>ADMINISTRATION</h1>
<br>
<form action="siret.php" method="post">
<p>Siret : <br>
<input style="width : 250px;" type="text" name="siret" placeholder="Entrer votre n° de siret"/>
</p>

<p>Mot de passe : 
<br>
<input style="width : 250px;" type="password" name="pass" placeholder="Entrer votre mot de passe"/> 
<br>
</p>
<br>
<br>
<p>
<input type="submit" value="Connexion" id="butpart"/>
<br>
</p>

</form>
</div>
</div>
-->
            </div>
            <div class="row">
                <br><br>
            </div>
            <footer>
            <div class="row footer animated fadeInUp">
                <div class="col">
                    <br>
                    <a href="#" onclick="One();">
                        <img src="img/etudiants-en-formation-26-1920x1080.jpg " style="width: 192px; height: 108px;">
                    </a>

                </div>
                <div class="col">
                    <br>
                    <a href="#" onclick="Two()">
                        <img src="img/etudiants-diplomes-14-1920x1080.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>

                <div class="col">
                    <br>
                    <a href="#" onclick="Three()">
                        <img src="img/etudiants-en-design-66-1920x1080.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>
                <div class="col">
                    <br>
                    <a href="#" onclick="Four()">
                        <img src="img/etudiant1.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>
            </div>
            </footer>
            <!-- <div class="row footer">
                <br>
            </div> -->
        </div>
        <script>
            function One() {
                $('body').css('background-image','url(img/etudiants-en-formation-26-1920x1080.jpg)');
            }

            function Two() {
                $('body').css('background-image','url(img/etudiants-diplomes-14-1920x1080.jpg)');
            }

            function Three() {
                $('body').css('background-image','url(img/etudiants-en-design-66-1920x1080.jpg)');
            }

            function Four() {
                $('body').css('background-image','url(img/etudiant1.jpg)');
            }


            $(document).ready( function () {
                $(".footer").css({
                    "margin-top": "0%"
                }) 
                $(".partenaires").css({
                    "opacity": "1"
                })
                $(".jeunes").css({
                    "opacity": "1"
                })
                $(".offres").css({
                    "opacity": "1"
                })
                $(".admin").css({
                    "opacity": "1"
                })


            });
        </script>

    </body>
</html>