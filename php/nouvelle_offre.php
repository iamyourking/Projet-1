<?php
session_start();
require('functions.php');
if ( $_SESSION['loggedin1'] == true) {
    //    var_dump($_SESSION['etudiant']);
    //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
} else {
    header("refresh:0.1;url=../index.php");
    echo '<script>alert("Veuillez vous identifier dans l\'espace partenaires.");</script>';
}


?>
<!doctype html>

<html>
    <head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/basic.css">
        <link rel="stylesheet" href="../css/animate.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>


    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="../index.php">
                        <img src="../img/geoloc.png" style="width: 200px; height: 170px;">
                    </a>
                </div>
            </div>
            <div class="row new_offre animated fadeInLeft" style="background-color : whitesmoke; box-shadow: 0px 1px 8px black inset;">
                <div class="col">
                    <form method="post" action="functions.php" id="desc_offre"><br>
                        <h5>Intitulé du poste :
                            <input type="text" name="titre" required></h5>
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
                        <br><br>
                        <input type="submit" name="signin" value="Ajout Offre"/><br>
                    <br>
                </div>
                <div class="col"> <br>
                    <h5>Adresse :<br>
                        <input type="text" name="address" required></h5>
                    <h5>Ville :<br>
                        <input type="text" name="ville" required></h5>
                    <h5>Code postal :<br>
                        <input type="number" name="dep" required></h5>
                    <h5>Numéro de téléphone :<br>
                        <input type="number" name="phone" required></h5>
                    </div></form>
                <div class="col"><br>
                    <h5>Description :<br><br>
                        <textarea rows="9" cols="70" name="description" form="desc_offre" required>
                        </textarea></h5>
                </div>
            </div>
            <div class="row footer animated fadeInUp">
                <div class="col">
                    <br>
                    <a href="#" onclick="One()">
                        <img src="../img/etudiants-en-formation-26-1920x1080.jpg " style="width: 192px; height: 108px;">
                    </a>

                </div>
                <div class="col">
                    <br>
                    <a href="#" onclick="Two()">
                        <img src="../img/etudiants-diplomes-14-1920x1080.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>

                <div class="col">
                    <br>
                    <a href="#" onclick="Three()">
                        <img src="../img/etudiants-en-design-66-1920x1080.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>
                <div class="col">
                    <br>
                    <a href="#" onclick="Four()">
                        <img src="../img/etudiant1.jpg" style="width: 192px; height: 108px;">
                    </a>
                </div>
            </div>
            <div class="row footer">
                <br>
            </div>
        </div>
        <script>
            function One() {
                $('body').css('background-image','url(../img/etudiants-en-formation-26-1920x1080.jpg)');
            }

            function Two() {
                $('body').css('background-image','url(../img/etudiants-diplomes-14-1920x1080.jpg)');
            }

            function Three() {
                $('body').css('background-image','url(../img/etudiants-en-design-66-1920x1080.jpg)');
            }

            function Four() {
                $('body').css('background-image','url(../img/etudiant1.jpg)');
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
        </div>
    </body>
</html>