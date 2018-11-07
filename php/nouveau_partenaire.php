<html>
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.js"></script>
        <style>
            body {
                background-image: url(../img/etudiants-en-formation-26-1920x1080.jpg);
                display : flex;
            }
            .col-xs-8, .col-lg-6, .col-lg-8 {
                
                background-color: #f4f4f7;
                border-radius: 15px;
                margin-top: 5%;
            }
            #titre {
                width: 850px;
                background-image: linear-gradient(#3b4ae8, #162191);
                margin-top: 0;
                padding-top: 5px;
                padding-bottom: 5px;
                text-align: center;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }
            
            .identifiant {
                background-color: #cfd2f4;
                width: 90%;
                margin: 5%;
                border-radius: 15px;
                border: inset #aaafe8;
            }
            .identifiant .titrerub {
                
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
                
            }
            .vous, .structure {
                width: 44%;
                background-color: #cfd2f4;
                display: inline-table;
                margin: 2%;
                border-radius: 15px;
                padding-left: 5px;
                height: 60%;
                border: inset #aaafe8;
            }
            .structure {
                
            }
            .titrerub {
                margin-left: -7px;
                margin-top: -4px;
                width: 101.3%;
                background-image: linear-gradient(#6c77e8, #3d4592);
                border: inset #aaafe8;
                font-size: 25px;
                text-align: center;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
                
            }
                
                .col-xs-offset-6 {
                    margin-left: 50%;
                }
                .col-xs-offset-5 {
                    margin-left: 41.66%;
                }
                .col-xs-offset-4 {
                    margin-left: 33.33%;
                }
                .col-xs-offset-3 {
                    margin-left: 25%;
}
                .col-xs-offset-2 {
                    margin-left: 16.66%;
                }
                .col-xs-offset-1 {
                    margin-left: 8.33%;
                }
            
            

        </style>
    </head>
    <body>
       <?php 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=Geoloc;charset=utf8', 'root', 'G7family91');
        }
            catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
            }
        ?>
       <div class="container-fluid">
            <div class="row">
                <br>
                <br>
                <div class="col-xs-offset-2 col-lg-8">
                    <br>
                        <form action="../php/inscription.php" method="post">
                            <div class="row">
                                <p class="col-xs-offset-1 col-xs-3">Nom : <br>
                                    <input style="width : 200px;" type="text" name="nom" placeholder="Entrez votre nom." required </p>
                                
                                <p class="col-xs-offset-1 col-xs-3">Prénom : <br>
                                    <input style="width : 200px;" type="text" name="prenom" placeholder="Entrez votre prénom." required </p>
                                
                                <p class="col-xs-offset-1 col-xs-3">Mot de passe :<br>
                                    <input style="width : 200px;" type="password" name="passw" placeholder="Entrez un mot de passe." required </p>
                                
                            </div>
                            <div class="row">
                                <p class="col-xs-offset-1 col-xs-1">Fonction : <br><input style="width : 200px;" type="text" name="fonction" placeholder="Entrez votre fonction." required </p>
                                <p class="col-xs-offset-1 col-xs-2">Siret : <br><input style="width : 200px;" type="number" name="Siret" placeholder="Entrez votre numero Siret." required </p>
                                
                            </div>
                            <br>
                            <p class="col-xs-offset-5 col-xs-1"><input type="submit" value="Inscription"/></p>
                    </form>
                    
                </div>
                
            </div> 
           <div class="row footer">
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
            <div class="row footer">
        </div>
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
        </script>
    </body>
</html>