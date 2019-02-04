<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=geoloc2;charset=utf8', 'root', 'root');
         // Vérification des champs (s'ils sont vide ou non)
        
         // Vérification du champs "mail" dans la table partenaires
        $vmail = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['mail']."'") ;
        $count = $vmail->rowCount();
        
        
        if ($count == 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
                // insertion des données dans les champs de la table
            $req = $bdd->prepare("INSERT INTO users(nom, prenom, email, passw, filliere, annee, date_ajout, gender,grade) VALUES(:nom, :prenom, :mail, :passw, :filliere, :annee, NOW(),:gender, 'etudiant')");
    
                // Affectation des variables
            
            $req->execute(array(
	           ':nom' => $_POST['nom'],
	           ':prenom' => $_POST['prenom'],
	           ':filliere' => $_POST['filliere'],
	           ':annee' => $_POST['annee'],
               ':mail' => $_POST['mail'], 
               ':passw' => $_POST['passw'],
               ':gender' => $_POST['gender']
	   ));
            header('Location: ../gestion.php');
            
        }
        
        else {
        
        header('Location: error_inscription_jeunes.php');
    
        }  
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}   
?>