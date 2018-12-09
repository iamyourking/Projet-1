<?php
session_start();
if ( isset($_SESSION['loggedin']) == false && isset($_SESSION['loggedin1']) == false) {
    session_destroy();
}
else {
    if (isset($_SESSION['loggedin1']) == true){
        // var_dump($_SESSION['partenaires']);
        header('Location: php/index_partenaires.php');
        ////        //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";

    } else
        if (isset($_SESSION['loggedin']) == true) {
            // var_dump($_SESSION['jeunes']);
            header('Location: php/index_jeunes.php');
            ////    }
        }

}
?>
<!doctype html>

<html>

    <head>
        <title>GeoLoc 🌍</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="style2.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background-image: linear-gradient(#5F4B8B,#63659E); padding: 2%; ">
                <div class="col"> <h1>  </h1> </div>
                <br>
                <div class="col-sm-offset-4 col-sm-4">
                    <h1>G E O L O C 🌍</h1>
                </div>
                <div class="col"> <h1>  </h1> </div>
                <br>
            </div>
            <div class="row">
                <div class="col-3 navbar1">
                    <ul class="nav flex-column navbar-fixed-left" style="text-align: center;font-size: 80%;" >
                    <br>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home 🌍</a>
                            <hr>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partenaires 🔌💼</a>
                            <hr>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jeunes 🔌👨‍🎓</a>
                            <hr>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <div class="row sticky-top">
                        <div class="col-4"><button disabled="disabled" style="background-color: blue;width:100%;height: 100%;"></button></div>
                        <div class="col-4"><button disabled="disabled" style="background-color: red;width:100%;height: 100%;"></button></div>
                        <div class="col-4"><button disabled="disabled" style="background-color: yellow;width:100%;height: 100%;"></button></div>
                    </div>
                </div>
        
            <div class="col-9 text">
                <div class="row" style="border-bottom: 1px double black">
                    
                        <header>Actus </header>
                        <hr>
                    
                </div>
                <div class="row">
                    
                     <article>
                        <header> Article 1 </header>
                        <hr>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae porro voluptas sequi? Quos deleniti aut, accusamus dolor debitis quas. Maxime dolores impedit assumenda aut fugiat dolore, expedita vitae esse sunt.</p>
                     </article>   
                    
                </div>
                <div class="row">
                    <article>
                        <header>
                            Article1
                            <hr>
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veniam, adipisci sed deserunt aspernatur non inventore asperiores consequatur quisquam ipsum impedit, laboriosam eveniet sint magni. Sequi nihil facere cupiditate sunt?</div>
                                <div>Praesentium magni natus, voluptatum exercitationem inventore aliquam assumenda quia aliquid dolorem odio, repudiandae similique beatae eveniet ex, quae sunt fugit sint explicabo. A aliquam, pariatur eius molestias illo accusantium perferendis.</div>
                                <br>
                        </header>
                    </article>
                </div>
                <div class="row">
                    <article>
                        <header>
                            Article2
                            <hr>
                                <div>Labore maiores veritatis recusandae officiis quibusdam voluptas tenetur facilis atque minima officia quam, aliquid eius? Accusamus, cumque deleniti? Sapiente ipsa iste nostrum sed atque deleniti voluptates magni neque odit soluta.</div>
                                <div>Commodi voluptates adipisci dolorum, molestias totam porro. Provident quisquam dolores magnam hic ipsa ipsum numquam, dolore repellat quam nam eaque voluptatum! Iusto quos repudiandae eligendi dolorum. Libero rerum quas nihil.</div>
                                <br>
                        </header>
                    </article>
                </div>
                <div class="row">
                    <article>
                        <header>
                            Article3
                            <hr>
                                <div>Non dicta temporibus recusandae ad doloribus voluptatum debitis molestias ratione tempora voluptatibus! Sed hic temporibus eaque nostrum, mollitia error nesciunt sunt dolorum exercitationem delectus deleniti voluptatem saepe esse. Optio, cum.</div>
                                <div>Minus molestias possimus, mollitia deserunt excepturi tempore enim fugiat eos reiciendis! Cum optio quam doloribus recusandae id, maiores ab molestias iste exercitationem. Dolores quis sed laudantium expedita aperiam dignissimos libero!</div>
                                <br>
                        </header>
                    </article>
                </div>
                <div class="row">
                    <article>
                        <header>
                            Article4
                            <hr>
                                <div>Nam facilis dolor minus, unde aliquam totam impedit laborum atque sint! Enim reprehenderit libero quae quo. Eum sed perspiciatis, quam temporibus qui, expedita, alias modi cum voluptate minima repudiandae? Ab.</div>
                                <div>Nesciunt odit dicta doloribus itaque at exercitationem sequi debitis iure esse architecto, quasi autem fuga necessitatibus pariatur expedita veritatis nisi quos distinctio dolorem! Accusamus, rerum facere! Nulla ullam nemo cum.</div>
                                <br>
                        </header>
                    </article>
                </div>
                <div class="row">
                    <article>
                        <header>
                            Article5
                            <hr>
                                <div>Ratione dolorum facere, aspernatur dolores rem repellendus corrupti minima reprehenderit temporibus quaerat! Necessitatibus sit alias neque autem possimus. Magni accusamus quia saepe nisi neque, rem nemo dolor nihil? Perferendis, voluptatum.</div>
                                <div>Distinctio ad voluptatibus consequuntur dignissimos accusamus, sed assumenda beatae at fugit, natus nobis eaque molestias, deleniti numquam excepturi laborum. Tempora ab hic atque beatae ad modi rem numquam, quae itaque?</div>
                                <br>
                        </header>
                    </article>
                </div>
            </div> 
            </div>
        </div>
    </body>

</html>