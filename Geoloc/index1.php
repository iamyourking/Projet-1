<?php
session_start();
if ( isset($_SESSION['loggedin']) == false) {
    session_destroy();
}
else {
        if (isset($_SESSION['loggedin']) == true) {
            // var_dump($_SESSION['jeunes']);
            header('Location: logged.php');
            ////    }
        }

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="indexStyle.scss"> -->
        <link rel="stylesheet" href="../css/animate.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

        <style type="text/css">
       
            @import URL(istyle.css);

        </style>
    </head>

<body>

    <div class="container-fluid topbar">
        <img src="img/logoGeo.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row sidebar">
            <div class="col-2 menu">
                <ul class="menu">
                    <li><a href="index1.php">Home</a></li>
                    <li><a href="loginform.php">Connexion</a></li>
                </ul>
            </div>
            <div class="col-10 app">
            <div class="row">
                <h1> <u>News</u> </h1>
                <hr>
            </div>
                <div class="row">
                    <div class="col">
                        <article>
                            <h1></h1>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nostrum itaque optio nemo libero praesentium officiis ipsum a, velit magnam culpa sit suscipit ipsa soluta perspiciatis fugiat exercitationem eaque incidunt.</span>
                                <span>Esse quas aspernatur dolorum laborum dignissimos. Eveniet similique et at suscipit eaque, fugiat atque assumenda a? Quaerat, quidem a commodi facilis accusantium eius cupiditate illum? Eius voluptatum at eum eveniet!</span>
                                <span>Tempore dolore, ab odit laborum beatae at veritatis, dolorum corporis non fugiat optio est sed ipsam consectetur rerum error eos nesciunt neque numquam temporibus nisi culpa labore soluta. Debitis, soluta?</span>
                            </p>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <article>
                            <h1></h1>
                            <hr>
                            <p>
                                <span>Voluptas, culpa suscipit sint itaque accusamus rerum esse, enim maiores accusantium consequuntur ab quas harum! Enim assumenda recusandae quod odit possimus voluptate nulla odio modi! Praesentium debitis consequatur iusto dicta.</span>
                                <span>Maxime voluptatibus facilis quod ut nostrum eveniet vel nobis id, sequi, aperiam magnam omnis autem recusandae porro quis quae. Culpa voluptatibus beatae corrupti amet omnis saepe laudantium consequuntur animi perspiciatis?</span>
                                <span>Quis quae eos dicta praesentium autem illum explicabo voluptatibus tempore iure tenetur blanditiis sint recusandae error exercitationem nemo reiciendis tempora, odio ut atque labore. Quaerat voluptate sit corporis optio deleniti?</span>
                            </p>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <article>
                            <h1></h1>
                            <hr>
                            <p>
                                <span>In asperiores odit natus ipsam itaque magnam, libero totam, dolorem dicta pariatur velit dolorum quidem vero at praesentium cum nihil obcaecati nam qui officia. Facilis debitis cupiditate quibusdam nam natus!</span>
                                <span>Consequatur maiores illo rem mollitia blanditiis harum iste cum obcaecati porro dolorum, velit esse odit sunt repellat possimus nobis quas ratione iusto reiciendis a ullam ad eveniet! Id, maxime neque?</span>
                                <span>Magni distinctio itaque odio corporis, similique eos, nesciunt reiciendis tempora impedit praesentium neque tenetur odit deleniti saepe dolor modi? Alias molestiae non quasi culpa incidunt. Error cumque tempore quam atque.</span>
                            </p>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <article>
                            <h1></h1>
                            <hr>
                            <p>
                                <span>Odit doloremque atque at molestias doloribus eum enim laborum veniam. Minima quas itaque laborum pariatur quaerat maiores velit debitis perferendis molestias, labore incidunt, consectetur sequi nemo eligendi consequuntur at dignissimos.</span>
                                <span>Magnam minima repellendus ut sequi nemo recusandae rem. Aliquid aspernatur ab esse iste. Assumenda, consequatur ex asperiores autem ab dolorem est in veritatis maxime repellat quis! Blanditiis repellendus deserunt sapiente.</span>
                                <span>Voluptate possimus, odio consectetur nesciunt voluptatem pariatur dignissimos est alias nihil adipisci assumenda aperiam rerum qui nisi velit facere aut. Repellat dicta commodi ab neque ad numquam alias accusantium et?</span>
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>