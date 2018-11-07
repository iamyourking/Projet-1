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
                                <input type="button" onclick ="Panel()" value= "Modifier le profil"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="button" onclick=window.location.href='disconnect.php'; value="Deconnexion"/>
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