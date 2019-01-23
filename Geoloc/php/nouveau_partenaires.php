<?php
session_start();
if ( isset($_SESSION['loggedin']) == true) {
    session_destroy();
}
?>

<!doctype html>

<html>
	<head>
		<title>Nouveaux Partenaires</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/basic.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.js"></script>
        
        <style>
        </style>
	</head>

	<body>
        <?php 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'root');
        }
            catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
            }
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="../index.php">
                        <img src="../img/geoloc.png">
                    </a>
                </div>
            </div>
            <br>
            <br>
            <div class="row form_part0">
                <div class="col">
                    <h1>Inscription Partenaires</h1>
                </div>
            </div>
            <form action="inscription_partenaires.php" method="post">
            <div class="row form_part1">
                    <p class="col">Nom : <br>
                        <input style="width : 200px;" type="text" name="nom" placeholder="Entrez votre nom." required >
                    </p>
                
                <p class="col">Prénom : <br>
                        <input style="width : 200px;" type="text" name="prenom" placeholder="Entrez votre prénom." required > </p>
                                
                <p class="col">Mot de passe :<br>
                        <input style="width : 200px;" type="password" name="passw" placeholder="Entrez un mot de passe." required > </p>
            </div>
            <div class="row form_part2">
                <p class="col">Fonction : <br>
                    <input style="width : 200px;" type="text" name="fonction" placeholder="Entrez votre fonction." required >
                </p>
                <p class="col">Siret : <br>
                    <input style="width : 200px;" type="number" name="Siret" placeholder="Entrez votre numero Siret." required >
                </p>
                <p class="col">Adresse Mail : <br>
                    <input style="width : 200px;" type="text" name="mail" placeholder="Entrer une adresse mail valide." required >
                </p>
                    
            </div>
            <div class="row form_part3">
                    <div class="col">
                        <input type="submit" value="Inscription"/>
                        
                    </div>
                    
                </div>
            </form>    
            <br>
            <br>
            <br>
            <br>
            <div class="row footer">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer">
                <div class="col">
                    <br>
                    <a href="#" onclick="One();">
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
                $(".partenaires").effect("shake");
                $(".jeunes").css({
                    "opacity": "1"
                    })
                $(".offres").css({
                    "opacity": "1"
                    })
                $(".admin").css({
                    "opacity": "1"
                    })
                    
                }
                
                


            });
        </script>
	</body>
</html>