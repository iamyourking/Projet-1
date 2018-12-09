<html>
    <head>
        <title>Nouveaux Jeune</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/basic.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.js"></script>
    </head>
    <body>
      
       <div class="container animated zoomIn slow">
            <div class="row">
                <div class="col">
                    <a href="../index.php">
                        <img src="../img/geoloc.png">
                    </a>
                </div>
            </div>
                
            <div class="row form_jeunes ">
                <div class="col">
                    <h1>Inscription Jeunes</h1>
                </div>
            </div>
            <form action="../php/inscription_jeune.php" method="post">
                <div class="row form_jeunes-0">
                    <p class="col">Nom : <br>
                        <input style="width : 200px;" type="text" name="nom" placeholder="Entrez votre nom." required 
                    </p>
                    <p class="col">Prénom : <br>
                        <input style="width : 200px;" type="text" name="prenom" placeholder="Entrez votre prénom." required 
                    </p>
                                
                                
                </div>
                <div class="row form_jeunes-1">
                    <p class="col">Filière : <br>
                        <select style="width : 200px;" name="filiere" required>
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
                            <option value="Première Année">Première Année</option>
                            <option value="Deuxième Année">Deuxième Année</option>
                        </select> 
                    </p>                                
                </div>
                <div class="row form_jeunes-2">
                    <p class="col">Identifiant : <br>
                        <input style="width : 200px;" type="text" name="login" placeholder="Saisir un identifiant" required>
                    </p>
                    <p class="col">Adresse Mail : <br>
                        <input style="width : 200px;" type="text" name="mail" placeholder="Entrez votre adresse mail." required>
                    </p>
                </div>
                <div class="row form_jeunes-3">
                    <p class="col">Mot de passe :<br>
                        <input style="width : 200px;" type="password" name="passw" placeholder="Entrez un mot de passe." required >
                    </p>
                    <p class="col">Confirmation Mot de passe :<br>
                        <input style="width : 200px" type="password" name="cpassw" placeholder="Confirmez votre mot de passe."
                        required>                                
                    </p>
                </div>
                <div class="row form_jeunes-4">
                    <p class="col">
                        <input type="submit" value="Inscription" style="width : 200px;"/>
                    </p>
                </div>
            </form>
                    
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
    </body> 
</html>