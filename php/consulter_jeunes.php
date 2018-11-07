<?php
session_start();
require('functions.php');
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    header("refresh:0.1;url=../index.php");
    echo '<script>alert("Veuillez vous identifier dans l\'espace partenaires.");</script>';
}
//try
//{
//    $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
//
//
//$sql = $bdd->prepare("SELECT id, nom, prenom FROM jeunes");
//$result = $sql->rowCount();
//if ($result > 0) {
//    // output data of each row
//    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
//        echo "<br> id: ". $row["id"]. " - Name: ". $row["nom"]. " " . $row["prenom"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}
//}
//
//catch (Exception $e) {
//    die('Erreur : ' . $e->getMessage());
//}



/* <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "G7family91";
                    $dbname = "geoloc";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT id, nom, prenom FROM jeunes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<br> id: ". $row["id"]. " - Name: ". $row["nom"]. " " . $row["prenom"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
?>
*/
$listejeune = recupererDonnee();
?>

<!doctype html>


<html>
    <head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script type="text/javascript" src="../js/jquery-3.3.1.js">
        </script>
        <script type="text/javascript" src="../JS/MesFonctionsjs.js"></script>

        <script type="text/javascript">
            $
            (
                function()
                {
                    AfficherListeJeunes();

                }

            );
        </script>
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
            <div class="row" style="background-color : whitesmoke;">


                <div class="col" id="col">

                </div>
                <div class="row"><div class="col"><select onchange="AfficherListeFiliere()" id="selecteur">
                        <option>Trier Section</option>
                        <option>Tous</option>
                        <option>BTS SIO</option>
                        <option>BTS CG</option>
                        <option>BTS NDRC</option>
                        <option>BTS MUC</option>
                    </select></div></div>
                <div class="col">
                    
                </div>
                <div class="col"></div>

            </div>

            <div class="row footer animated fadeInUp">
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
    </body>
</html>