<?php
session_start();
mb_internal_encoding('UTF-8');
require('functions.php');
$idmail = $_GET['id'];
$_SESSION['idmail'] = $idmail;
//if ( $_SESSION['loggedin1'] == true) {
    //    var_dump($_SESSION['etudiant']);
    //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
    
$bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
$offre = $bdd->query("SELECT id, nom, prenom, mail, annee, filiere FROM jeunes WHERE id = '".$_GET['id']."'") ;
    
$result = $offre->fetch(PDO::FETCH_ASSOC);    

//} else {
//    header("refresh:0.1;url=../index.php");
//    echo '<script>alert("Veuillez vous identifier dans l\'espace partenaires.");</script>';
//}


?>
<!doctype html>

<html>
    <head>
        <title>GeoLoc - Profil étudiant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/basic.css">
        <link rel="stylesheet" href="../css/animate.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        
        <script type="text/javascript" src="../js/MesFonctionsjs2.js"></script>

        <script type="text/javascript">
            $
            (
                function()
                {
                    AfficherListeDocuments2();

                }

            );
        </script>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="../index.php">
                        <img src="../img/logoGeo.png" style="width: 200px; height: 170px;">
                    </a>
                </div>
            </div>
            <div class="row" style="background-color : whitesmoke; box-shadow: 0px 1px 8px black inset;">
                <div class="col">
                    <?php
                    $nom = $result['nom'];
                    $prenom = $result['prenom'];
                    $annee = $result['annee'];
                    $filiere = $result['filiere'];
                    $mail = $result['mail'];
                    
                    ?><br>
                    <h1><?php echo "$nom "; echo " $prenom"; ?></h1><br>
                    <h3><?php echo $mail; ?></h3>
                    <h6><?php echo "$annee -"; echo " $filiere"?></h6><br>
                </div>
                
                <div class="col" id="col"> 
                   
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
        
    </body>
</html>