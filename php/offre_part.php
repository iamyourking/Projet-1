<?php
session_start();
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    session_destroy();
    header("refresh:0;url=../index.php");
    echo '<script>alert("Veuillez vous identifier.");</script>';
}
//else {
//    if (isset($_SESSION['loggedin']) == true){
//        ////        var_dump($_SESSION['partenaires']);
//        header('Location: php/index_jeunes.php');
//        ////        //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
//        ////
//    } else if(isset($_SESSION['loggedin1']) == true) {
//        header('Location: php/index_partenaires.php');
//        ////    }
//    }
//}
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
            <div class="row" style="background-color : #FFF;">
                <div class="col">
                    <div class="offreslist">
                        <div class="row">
                            <div class="col">
                                <p>Infos n°1</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Infos N°2</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Offre N°3</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Offre N°3</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Offre N°3</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Offre N°3</p>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col map1 animated fadeIn">
                <div id="map" style="position : absolute">
                </div>
            </div>

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

            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var uluru = {lat:  48.626284, lng: 2.4509934000000157};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 15, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }




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
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo4gwIFNILy8LTn315n8Izxvg6PIKAnSA&callback=initMap">
        </script>
    </body>
</html>