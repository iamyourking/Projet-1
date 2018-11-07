<?php
session_start();
if ( $_SESSION['loggedin'] == true) {
    //    var_dump($_SESSION['etudiant']);
    //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
} else {
    
    header("refresh:0.1;url=../index.php");
    echo '<script>alert("Veuillez vous identifier dans l\'espace jeune.");</script>';
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
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="../img/geoloc.png" style="width: 200px; height: 170px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="offres">
                        <h1 id="entre"><?php echo 'OFFRES' ?></h1>
                        <br>
                        <br>
                        <br>
                       <button type="button">
                            <a href="consulter_offre.php">Consulter offres</a>
                        </button>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="jeunes animated fadeInRight">
                        <h1 id="idjeun"><?php echo 'JEUNES' ?></h1>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button id="btn">Modifier le profil</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="button" onclick=window.location.href='disconnect.php'; value="Deconnexion"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="admin animated fadeInRight">
                        <h1>ADMINISTRATION</h1>
                        <br>
                            <div class="row">
                                
                                <div class="col">
                                    <br>
                                    <button id="butentre">
                                    <a href="espace_perso.php">Consulter ses documents
                                    </a>
                                    </button>
                                </div>
                                <br><br><br><br><br>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <br><br>
            </div>
        </div>
        <div id="cont1" class="container d-none">
            <div class="row" style="margin-top : -30%;">
                <div class="col">
                    <div class="jeunes animated fadeInUp">
                        <h1><?php echo 'Modification Profil' ?></h1>
                        <form action="../php/modif_jeunes.php" method="post">
                            <div class="row">
                                <p class="col">Nom : <br>
                                    <input style="width : 200px;" type="text" name="nom" value="<?php echo $_SESSION['etudiant']['nom'] ?>" required 
                                           </p>
                                <p class="col">Prénom : <br>
                                    <input style="width : 200px;" type="text" name="prenom" value="<?php echo $_SESSION['etudiant']['prenom'] ?>" required 
                                           </p>


                            </div>
                            <div class="row">
                                <p class="col">Filière : <br>
                                    <select style="width : 200px;" name="filiere" required>
                                        <option value="<?php $filiere = $_SESSION['etudiant']['filiere']; echo $filiere; ?>" selected><?php echo $filiere; echo '  - actuel' ?></option>
                                        <option value="BTS SIO">BTS SIO</option>
                                        <option value="BTS NDRC">BTS NDRC</option>
                                        <option value="BTS PIM">BTS PIM</option>
                                        <option value="BTS CG">BTS CG</option>
                                        <option value="BTS GPME">BTS GPME</option>
                                        <option value="BTS MUC">BTS MUC</option>
                                    </select> 
                                </p>
                                <p class="col">Année : <br>
                                    <select style="width : 200px;" name="annee" required>
                                        <option value="<?php $_SESSION['etudiant']['annee']?>"><?php echo $_SESSION['etudiant']['annee']; echo '  - actuel'?></option>
                                        <option value="Première Année">Première Année</option>
                                        <option value="Deuxième Année">Deuxième Année</option>
                                    </select> 
                                </p>                                
                            </div>
                            <div class="row">
                                <p class="col">Adresse Mail : <br>
                                    <input style="width : 200px;" type="text" name="mail" value="<?php echo $_SESSION['etudiant']['mail'] ?>" required>
                                </p>
                                <p class="col">Mot de passe :<br>
                                    <input style="width : 200px;" type="password" name="passw" value="<?php echo $_SESSION['etudiant']['passw'] ?>" required >
                                </p>
                            </div>
                            <div class="row">
                                <p class="col">
                                    <input type="submit" value="Modifier le profil" style="width : 200px;"/>
                                </p>
                            </div>
                        </form>
                        <p class="col">
                            <button id="btn2">Fermer</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
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

            document.getElementById("btn").onclick = function() {
                Panel()
            };
            document.getElementById("btn2").onclick = function() {
                Panel2()
            };

            function Panel() {
                document.getElementById("cont1").classList.toggle("d-none");
                //                document.getElementById("cont1").className = "fadeOutUp";

            }
            function Panel2() {
                document.getElementById("cont1").classList.toggle("d-none");



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