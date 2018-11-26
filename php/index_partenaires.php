<?php
session_start();
if ( $_SESSION['loggedin1'] == true) {
    //    var_dump($_SESSION['partenaire']);
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
                    <a href="../index.php">
                        <img src="../img/geoloc.png" style="width: 200px; height: 170px;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="offres animated fadeInRight">
                        <h1 id="entre"><?php echo 'OFFRES' ?></h1>
                        <br>
                        <br>
                        <button type="button" id="butentre">
                            <a href="offre_part.php">Consulter les offres</a></button>
                        <br>
                        <br>
                        <br>
                        <button type="button">
                            <a href="consulter_jeunes.php">Consulter jeunes</a>
                        </button>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="partenaires animated fadeInRight">
                        <h1 id="idjeun"><?php echo 'PARTENAIRES' ?></h1>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <button id="btn">Modifier le profil</button>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <input type="button" onclick=window.location.href='disconnect.php'; value="Deconnexion"/>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col">
                    <div class="admin animated fadeInRight">
                        <h1>ADMINISTRATION</h1>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                    <button id="butentre">
                                    <a href="nouvelle_offre.php">Publier Offres
                                    </a>
                                    </button>
									
							</div>
						</div>
						<br><br>
<!--
						<div class="row">
							<div class="col">
									<button id="butentre">
                                    <a href="candidatures.php">Consulter candidatures
                                    </a>
                                    </button>
							</div>
						</div>
                            <br><br>
-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <br><br>
            </div>
        </div>
        <br>
        <br>
        <div id="cont1" class="container d-none">
            <div class="row" style="margin-top : -30%;">
                <div class="col">
                    <div class="partenaires animated fadeInUp">
                        <h1><?php echo 'Modification Profil' ?></h1>
                        <form action="../php/modif_part.php" method="post">
                            <div class="row">
                                <p class="col">Nom : <br>
                                    <input style="width : 200px;" type="text" name="nom" value="<?php echo $_SESSION['partenaire']['nom'] ?>" required />
                                </p>
                                <p class="col">Prénom : <br>
                                    <input style="width : 200px;" type="text" name="prenom" value="<?php echo $_SESSION['partenaire']['prenom'] ?>" required /> 
                                </p>


                            </div>
                            <div class="row">
                                <p class="col">Fonction : <br>
                                    <input style="width : 200px;" name="fonction" value="<?php echo $_SESSION['partenaire']['fonction'] ?>" required />
                                </p>     
                                <p class="col">Adresse Mail : <br>
                                    <input style="width : 200px;" type="text" name="mail" value="<?php echo $_SESSION['partenaire']['mail'] ?>" required>
                                </p>
                            </div>
                            <div class="row">

                                <p class="col">Modifier Mot de passe :<br>
                                    <input style="width : 200px;" type="password" name="passw" value="<?php echo $_SESSION['partenaire']['passw'] ?>" required >
                                </p>
                            </div>
                            <div class="row ">
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
        <footer class="container-fluid">
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
        </footer>
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
                Panel()
            };
            function Panel() {
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