<?php
session_start();
//if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
//    session_destroy();
//}
//else {
//    if (isset($_SESSION['loggedin1']) == true){
//        // var_dump($_SESSION['partenaires']);
//        header('Location: php/index_partenaires.php');
//        ////        //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
//
//    } else
//        if (isset($_SESSION['loggedin']) == true) {
//            // var_dump($_SESSION['jeunes']);
//            header('Location: php/index_jeunes.php');
//            ////    }
//        }
//
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
                    <img src="../img/geoloc.png" style="width: 200px; height: 170px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="partenaires animated fadeInRight">
                        <h1 id="part"><?php echo 'ERREUR' ?></h1>
                        <br>
                        <p>La page que vous cherchez n'existe pas ou bien son accès n'est pas autorisé.<br> Pour retourner à la page principale cliquez <a href="../index.php">ici</a>.</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <br><br>
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