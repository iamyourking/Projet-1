<?php $nav_en_cours = 'rubrique1'; ?>


<!doctype html>

<head>
    <script src="Geoloc/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="Geoloc/css/bootstrap.css">
    <link rel="stylesheet" href="Geoloc/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="JTlogo.png" />
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <script src="Geoloc/js/bootstrap.js"></script>
    <!--	<script src="Geoloc/js/bootstrap.min.js"></script>-->
    <script src="Geoloc/js/popper.js"></script>

    <meta charset="utf-8">
    <title>J-Tchiss</title>
</head>

<body>
    <div class="container-fluid header">
        <br><br>
        <div class="row" >
            <div class="col">
                <span style="text-align: center; display=inline;"><h1 class="animated bounceIn prenom" >Jeremy </h1><h1 class="animated bounceIn nom">Tchissambou</h1></span>
                <br>
            </div>
        </div>
        <div class="row justify-content-md-center menu_nav">
            <ul>
                <li><div class="col col-lg-auto"><a href="index.php">Home</a></div></li>
                <li><div class="col col-md-auto" id="projet"><a href="#">Projets</a></div></li>
                <li><div class="col col-lg-auto" id="stage"><a href="#">Stages</a></div></li>
                <li><div class="col col-lg-auto" id="actus"><a href="#">Actus</a></div></li>
            </ul>
        </div>
        <br>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col listprojet" style="display: inline-block; ">
                <article class="post">
                    <figure>
                        <a href="/Geoloc/">
                            <img src="geoloc.png" alt="" style="width: 100% ;">
                        </a>
                    </figure>
                    <div class="caption">
                        <article>
                            <h3>PROJET BTS SIO GEOLOC</h3>
                            <p>Lien vers mon projet GEOLOC, un site de candidature à des offres d'emplois avec un interface apprentis et un interface entreprise.</p>
                            <footer style="font-size : 9px; text-align : right;">
                                <p>
                                    Posté le 
                                    <time datetime="2018-11-06 12:37">6 Novembre</time>
                                    par Jérémy.
                                </p>
                            </footer>
                        </article>
                    </div>
                </article>
            </div>
            <div class="col liststage" style="display: inline-block;">
                <article class="post">
                    <figure>
                        <a href="/Portfolio/">
                            <img width="100%" src="portfolio.png" alt="">
                        </a>
                    </figure>
                    <div class="caption">
                        <article>
                            <h3>PORTFOLIO PROVISOIRE</h3>
                            <p>Lien vers mon portolio provisoire (mise à jour à venir).</p>
                            <footer style="font-size : 9px; text-align : right;">
                                <p>
                                    Posté le 
                                    <time datetime="2018-11-06 12:55">6 Novembre</time>
                                    par Jérémy.
                                </p>
                            </footer>
                        </article>
                    </div>
                </article>
            </div>

            <div class="col listprojet" style="display: inline-block;">
                <article class="post">
                    <figure>
                        <a href="http://eclectiq.phpnet.org/_jeremy/wordpress/">
                            <img width="100%" src="ItisWordpress.png" alt="">
                        </a>
                    </figure>
                    <div class="caption">
                        <article>
                            <h3>Site Wordpress</h3>
                            <p>Devoir Wordpress de première année, site résumant les informations sur les formations disponible à ITIS Formation.</p>
                            <footer style="font-size : 9px; text-align : right;">
                                <p>
                                    Posté le 
                                    <time datetime="2018-11-12 19:37">12 Novembre</time>
                                    par Jérémy.
                                </p>
                            </footer>
                        </article>
                    </div>
                </article>
            </div>
        </div>

        <div class="row">
            <div class="col liststage" style="display: inline-block;">
                <article class="post">
                    <figure>
                        <a href="http://datategy.net/fr/accueil/">
                            <img width="100%" src="Datategy.png" alt="">
                        </a>
                    </figure>
                    <div class="caption">
                        <article>
                            <h3>Projet Parking Datategy AngularJs</h3>
                            <p>Stage dans la start-up Datategy, participation à la conception de la partie Front-end sous AngularJS pour la plateforme web pour leur produit.</p>
                            <footer style="font-size : 9px; text-align : right;">
                                <p>
                                    Posté le 
                                    <time datetime="2018-11-17 01:25">17 Novembre</time>
                                    par Jérémy.
                                </p>
                            </footer>
                        </article>
                    </div>
                </article>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="..." alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3154982051896100",
            enable_page_level_ads: true
        });
    </script>
    <script>
        (function(){
            var buttonprojet = document.getElementById("projet");
            var projet = document.getElementsByClassName("listprojet");
            var portfolio = document.getElementsByClassName("listportfolio");
            var stage = document.getElementsByClassName("liststage");
            var actus = document.getElementsByClassName("listactus");
            buttonprojet.addEventListener("click", function() {
                for (var i=0;i<projet.length; i++) {
                    if (projet[i].classList.contains("d-none")) {
                        projet[i].classList.remove("d-none");
                    }
                }
                for (var i=0;i<portfolio.length; i++) {
                    portfolio[i].classList.toggle("d-none");

                }
                for (var i=0;i<actus.length; i++) {
                    actus[i].classList.toggle("d-none");
                }
                for (var i=0;i<stage.length; i++) {
                    stage[i].classList.toggle("d-none");
                }
            })
            var buttonstage = document.getElementById("stage");
            buttonstage.addEventListener("click", function() {

                for (var i=0;i<stage.length; i++) {
                    if (stage[i].classList.contains("d-none")) {
                        stage[i].classList.remove("d-none");
                    }
                }

                for (var i=0;i<projet.length; i++) {
                    projet[i].classList.toggle("d-none");
                }
                for (var i=0;i<actus.length; i++) {
                    actus[i].classList.toggle("d-none");
                }
                for (var i=0;i<portfolio.length; i++) {
                    portfolio[i].classList.toggle("d-none");
                }

            })

            var buttonactus = document.getElementById("actus");
            buttonactus.addEventListener("click", function() {

                for (var i=0;i<actus.length; i++) {
                    if (actus[i].classList.contains("d-none")) {
                        actus[i].classList.remove("d-none");
                    }
                }

                for (var i=0;i<projet.length; i++) {
                    projet[i].classList.toggle("d-none");
                }
                for (var i=0;i<actus.length; i++) {
                    stage[i].classList.toggle("d-none");
                }
                for (var i=0;i<portfolio.length; i++) {
                    portfolio[i].classList.toggle("d-none");
                }

            })

        })()

    </script>
</body>

