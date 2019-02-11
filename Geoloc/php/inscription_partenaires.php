<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Geoloc2;charset=utf8', 'root', 'root');
         // Vérification des champs (s'ils sont vide ou non)
    // if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']) && isset($_POST['Siret']) && isset($_POST['passw']) && isset($_POST['mail']) ) {
        
         // Vérification du champs "mail" dans la table partenaires
        $vsiret = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['mail']."'") ;
        $count = $vsiret->rowCount();
        
        if ($count == 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
            
            $vsiret = $bdd->query("SELECT id FROM entreprise WHERE siret = '".$_POST['Siret']."'");
            $counter = $vsiret->rowCount();

            if($counter == 0) {
                $req2 = $bdd->prepare("INSERT INTO users(nom, prenom, fonction, passw, email, grade, date_ajout, gender) VALUES(:nom, :prenom, :fonction, :passw, :mail, :grade, NOW(), :gender)");
                // Affectation des variables
    
                $req2->execute(array(
	            ':nom' => $_POST['nom'],
	            ':prenom' => $_POST['prenom'],
	            ':fonction' => $_POST['fonction'],
	            ':passw' => $_POST['passw'],
                ':mail' => $_POST['mail'],
                ':grade' => 'entreprise',
                ':gender' => $_POST['gender']
                ));
                $req = $bdd->prepare("INSERT INTO entreprise(nom, siret) VALUES(:entreprise, :siret)");

                $req->execute(array(
                ':entreprise' => $_POST['entreprise'],
                ':siret' => $_POST['Siret']
                ));

                $vsiret = $bdd->query("SELECT id FROM entreprise WHERE siret = '".$_POST['Siret']."'");
                echo $vsiret;
                
                $join = $bdd->query("INSERT INTO  users(id_entreprise) VALUES('".$vsiret."') WHERE email = '".$_POST['mail']."'");







                // $req = $bdd->prepare("INSERT INTO entreprise(nom, siret) VALUES(:entreprise, :siret)");

                // $req->execute(array(
                // ':entreprise' => $_POST['entreprise'],
                // ':siret' => $_POST['Siret']
                // ));
                // echo "Hello world 1";
                // $id_part = $bdd->query("SELECT id FROM entreprise WHERE siret = '".$_POST['Siret']."'");
                // echo $id_part;
                // $req2 = $bdd->prepare("INSERT INTO users(nom, prenom, fonction, passw, email, grade, date_ajout, id_entreprise, gender) VALUES(:nom, :prenom, :fonction, :passw, :mail, :grade, NOW(), :entreprise, :gender)");
                // // Affectation des variables
    
                // $req2->execute(array(
	            // ':nom' => $_POST['nom'],
	            // ':prenom' => $_POST['prenom'],
	            // ':fonction' => $_POST['fonction'],
	            // ':passw' => $_POST['passw'],
                // ':mail' => $_POST['mail'],
                // ':grade' => 'entreprise',
                // ':entreprise' => $id_part,
                // ':gender' => $_POST['gender']
                // ));
                // echo "Hello world 2";



            } else {

                $id_part = $bdd->query("SELECT id FROM entreprise WHERE siret = '".$_POST['Siret']."'");

                $req2 = $bdd->prepare("INSERT INTO users(nom, prenom, fonction, passw, email, grade, date_ajout, id_entreprise, gender) VALUES(:nom, :prenom, :fonction, :passw, :mail, :grade, NOW(), :entreprise, :gender)");
                // Affectation des variables
    
                $req2->execute(array(
	            ':nom' => $_POST['nom'],
	            ':prenom' => $_POST['prenom'],
	            ':fonction' => $_POST['fonction'],
	            ':passw' => $_POST['passw'],
                ':mail' => $_POST['mail'],
                ':grade' => 'entreprise',
                ':entreprise' => $id_part,
                ':gender' => $_POST['gender']
                ));
            }      

            header('Location: chargement.php');
            
        } else {
        
            header('Location: error_inscription.php');
    
        }  
        
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}   
?>