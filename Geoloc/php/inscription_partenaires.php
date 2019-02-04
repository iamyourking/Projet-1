<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Geoloc2;charset=utf8', 'root', 'root');
         // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']) && isset($_POST['Siret']) && isset($_POST['passw']) && isset($_POST['mail']) ) {
        
         // Vérification du champs "mail" dans la table partenaires
        $vsiret = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['mail']."'") ;
        $count = $vsiret->rowCount();
        
        
        if ($count == 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
              
            // insertion des données dans les champs de la table
            $req = $bdd->prepare("INSERT INTO users(nom, prenom, fonction, passw, email, grade, date_ajout) VALUES(:nom, :prenom, :fonction, :passw, :mail, :grade, NOW())");
                // Affectation des variables
    
            $req->execute(array(
	           ':nom' => $_POST['nom'],
	           ':prenom' => $_POST['prenom'],
	           ':fonction' => $_POST['fonction'],
	           ':passw' => $_POST['passw'],
               ':mail' => $_POST['mail'],
               ':grade' => 'entreprise'
       ));

            $vsiret = $bdd->query("SELECT * FROM entreprise WHERE siret = '".$_POST['Siret']."'") ;
            $count = $vsiret->rowCount();
            if($count == 0) {
       
                $req = $bdd->prepare("INSERT INTO entreprise(nom, siret) VALUES(:entreprise, :siret)");

                $req->execute(array(
                ':entreprise' => $_POST['entreprise'],
                ':siret' => $_POST['Siret']


                ));

                $req = $bdd->query("INSERT INTO users(id_entreprise) VALUES($vsiret)");



            } else if ($count == 1) {
                $req = $bdd->query("INSERT INTO users(id_entreprise) VALUES($vsiret)");
            }

            header('Location: chargement.php');
            
        }
        
        else {
        
        header('Location: error_inscription.php');
    
        }  
        
    }
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}   
?>