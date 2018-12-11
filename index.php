<!--https://news.google.com/news/rss/search/section/q/developpement+web%7Cframework+web%7CHTML?ned=fr&gl=FR&hl=fr-->
<?php
 $fichier=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 $fichier="https://news.google.com/news/rss/search/section/q/developpement+web%7Cframework+web%7CHTML?ned=fr&gl=FR&hl=fr"; 
 $limite="1";  //  sujets compris entre 1 
 $limite1="2";   //  et plus  
 $aspect="1";    //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 $minute="1";      //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 $sujet="0"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )  
 $te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...) 
 $fil_textsize="11";     // taille des liens et description 
 $title_textcolor="8317E7";    // couleur des liens (000000 donne noir)  
 $tlien="underline";  // style du lien none ou underline  
 $text_textcolor="655D60";  // couleur description (000000 donne noir) 
 $frame_color="EAEAEA"; // couleur arrière plan (FFFFFF donne blanc) 
 $content="1"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte 
 $extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux 
 $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour 
 
  $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member"; 
 $fichier=str_replace(" ","+",$fichier); 
 
 $ch = curl_init();  
 curl_setopt ($ch, CURLOPT_URL, "$fichier"); 
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7); 
 curl_setopt ($ch, CURLOPT_TIMEOUT,25); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
 $affiche_contenu=curl_exec($ch); 
 curl_close ($ch); 

?>

<!doctype html>

<head>
    <script src="Geoloc/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mdb.css">
    <link rel="icon" type="image/png" href="favicon.ico" />
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

            
            
<!--
        <div class="row" style="background-image:linear-gradient(#dcdcdc,#f5f5f5);">
            <br>
        </div>
        <br>
-->

            <div class="col-sm-4 listprojet order-12" style="display: inline-block; ">
                <article class="post">
                    <figure>
                        <a href="Geoloc/">
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
            <div class="col-sm-4 liststage order-11" style="display: inline-block;">
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

            <div class="col-sm-4 listprojet order-10" style="display: inline-block;">
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

            <div class="col-sm-4 liststage order-9" style="display: inline-block;">
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
            
            <div class="col-4">

                <div class="jumbotron">
                    <p class="lead">
                        News
                    </p>
                    <p>
                        <?php
                         echo  utf8_encode($affiche_contenu); 
                        ?> 
                    </p>    
                        
                </div>

            </div>

        <br>
            
            
        </div>
        </div>
        <br>
       <!-- Footer -->
<footer class="page-footer font-small pt-4" style="background-color : #63659E;">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fa fa-google-plus"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fa fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright: Tchissambou Jérémy
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  
  
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

