<?php 
session_start();
function connexionBase() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=geoloc2;charset=utf8', 'root', 'root'); }
    catch (PDOException $e) {echo 'Échec de connexion : ' . $e->getMessage();}
    return $bdd;
}

function getPicture() {
    $sqlimage = "SELECT file from documents where doc = 'PP' AND id_user = '".$_SESSION['jeunes']['id']."' ";
    $stmt = connexionBase()->query($sqlimage);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    return $res['file'];
}


function recupererDonnee() {
    $requete = "SELECT id,nom,prenom,filiere,annee FROM users";
    $stmt = connexionBase()->query($requete);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $res;
}

function recupererDocument() {
    $requete = "SELECT file,type FROM documents where id_jeunes = :id";
    $stmt = connexionBase()->query($requete);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $res;
}

function recupererOffre() {

        $requete = "SELECT id,titre, filiere, date_ajout, ville FROM ajout_offre";
    $stmt = connexionBase()->query($requete);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $res;
    
}

function ajoutOffre() {
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=Geoloc2;charset=utf8', 'root', 'root');
    
        
        $req = $bdd->prepare("INSERT INTO ajout_offre(titre, filiere, date_debut, duree, adresse, ville, code_postal, telephone, description, id_partenaire, date_ajout) VALUES(:titre, :filiere, :date_debut, :duree, :adresse, :ville, :code_postal, :telephone, :description, :id, NOW())");
        
        $req->execute(array(
	           ':titre' => $_POST['titre'],
	           ':filiere' => $_POST['filiere'],
	           ':date_debut' => $_POST['debut'],
	           ':duree' => $_POST['duree'],
               ':adresse' => $_POST['address'],
               ':ville' => $_POST['ville'], 
	           ':code_postal' => $_POST['dp'],
               ':telephone' => $_POST['phone'],
               ':description' => $_POST['description'],
               ':id' => $_SESSION['partenaires']['id']
	   ));
        echo '<script>alert("Offre saisie.");</script>';
        header("refresh:0.1;url=../index1.php");
    
    
}


if(isset($_POST['signin'])) {
    ajoutOffre();
}



//function formOffre() {
//    echo '<form method="post" action="" id="desc_offre"><br>
//    <h5>Intitulé du poste :
//                        <input type="text" name="titre" required></h5>
//    <h5>Filiere :
//                        <select name="filiere" id="selecteur">
//                        <option> --- </option>
//                        <option>BTS SIO</option>
//                        <option>BTS CG</option>
//                        <option>BTS NDRC</option>
//                        <option>BTS MUC</option>
//                    </select></h5>
//    <h5>Date de début :
//                        <input type="date" name="debut" required></h5>
//    <h5>Durée en poste :
//                        <input type="text" name="duree" required></h5>
//                        <br><br>
//                        <input type="submit" name="signin" value="Ajout Offre"/><br>
//                    </form><br>
//                    </div>
//                    <div class="col"> <br>
//    <h5>Adresse :<br>
//                        <input type="text" name="address" required></h5>
//    <h5>Ville :<br>
//                        <input type="text" name="ville" required></h5>
//    <h5>Code postal :<br>
//                        <input type="number" name="dep" required></h5>
//    <h5>Numéro de téléphone :<br>
//                        <input type="number" name="phone" required></h5>
//                    </div>
//                    <div class="col"><br>
//                            <h5>Description :<br><br>
//                        <textarea rows="9" cols="70" name="description" form="desc_offre" required>
//</textarea></h5>
//                    ';
//}
?>