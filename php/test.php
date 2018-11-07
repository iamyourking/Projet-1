<?php
session_start();
if ( $_SESSION['loggedin'] == true) {
    var_dump($_SESSION['etudiant']);
    //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
} else {
    echo "Please log in first to see this page.";
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
                    <div class="offres animated fadeInRight">
                        <h1 id="entre"><?php echo 'OFFRES' ?></h1>
                        <br>
                        <br>
                        <br>
                        <input type="button" href="nouveau_partenaires.php" id="butentre" value="Consulter les offres">
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#monmodule">
                                    Modifier votre profil
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="button" onclick=window.location.href='#'; value="Deconnexion"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
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
            </div>
            <div class="row">
                <br><br>
            </div>
        </div>









        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col form_jeunes">
                        <h1><?php echo 'Modification Profil' ?></h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <form action="../php/modif_jeune.php" method="post">
                    <div class="row form_jeunes-0">
                        <p class="col">Nom : <br>
                            <input style="width : 200px;" type="text" name="nom" value="<?php echo $_SESSION['etudiant']['nom'] ?>" required />
                        </p>
                        <p class="col">Prénom : <br>
                            <input style="width : 200px;" type="text" name="prenom" value="<?php echo $_SESSION['etudiant']['prenom'] ?>" required />
                        </p>


                    </div>
                    <div class="row form_jeunes-1">
                        <p class="col">Filière : <br>
                            <select style="width : 200px;" name="filiere" required>
                                <option value="SIO">BTS SIO</option>
                                <option value="NDRC">BTS NDRC</option>
                                <option value="PIM">BTS PIM</option>
                                <option value="CG">BTS CG</option>
                                <option value="GPME">BTS GPME</option>
                                <option value="MUC">BTS MUC</option>
                            </select> 
                        </p>
                        <p class="col">Année : <br>
                            <select style="width : 200px;" name="annee" required>
                                <option value="1ere">Première Année</option>
                                <option value="2eme">Seconde Année</option>
                            </select> 
                        </p>                                
                    </div>
                    <div class="row form_jeunes-2">
                        <p class="col">Adresse Mail : <br>
                            <input style="width : 200px;" type="text" name="mail" value="<?php echo $_SESSION['etudiant']['mail'] ?>" required>
                        </p>
                        <p class="col">Mot de passe :<br>
                            <input style="width : 200px;" type="password" name="passw" value="<?php echo $_SESSION['etudiant']['passw'] ?>" required >
                        </p>
                    </div>
                    <div class="row form_jeunes-4">
                        <p class="col">
                            <input type="submit" value="Inscription" style="width : 200px;"/>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </body>


    <script>
        //        // Get the modal
        //        var modal = document.getElementById('monmodule');
        //
        //        // Get the button that opens the modal
        //        var btn = document.getElementById("monbut");
        //
        //        // Get the <span> element that closes the modal
        //        var span = document.getElementsByClassName("close")[0];
        //
        //        // When the user clicks on the button, open the modal 
        //        btn.onclick = function() {
        //            modal.classList.remove("d-none");
        //            modal.classList.add("module");
        //        }
        //
        //        // When the user clicks on <span> (x), close the modal
        //        //        span.onclick = function() {
        //        //            modal.style.display = "none";
        //        //        }
        //
        //        // When the user clicks anywhere outside of the modal, close it
        //        window.onclick = function(event) {
        //            if (event.target == modal) {
        //                modal.style.display = "none";
        //            }
        //        }

        $('#myModal').modal(options);
    </script>
</html>