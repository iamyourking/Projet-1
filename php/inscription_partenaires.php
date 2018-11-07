<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
         // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']) && isset($_POST['Siret']) && isset($_POST['passw']) && isset($_POST['mail']) ) {
        
         // Vérification du champs "Siret" dans la table partenaires
        $vsiret = $bdd->query("SELECT * FROM partenaires WHERE mail = '".$_POST['mail']."'") ;
        $count = $vsiret->rowCount();
        
        
        if ($count == 0) { //Si la table ne compte aucun Siret identique alors on ajoute à la BDD
                // insertion des données dans les champs de la table
            $req = $bdd->prepare("INSERT INTO partenaires(nom, prenom, fonction, Siret, passw, mail) VALUES(:nom, :prenom, :fonction, :Siret, :passw, :mail)");
            $hache = password_hash($_POST['passw'],PASSWORD_DEFAULT);
                // Affectation des variables
    
            $req->execute(array(
	           ':nom' => $_POST['nom'],
	           ':prenom' => $_POST['prenom'],
	           ':fonction' => $_POST['fonction'],
	           ':Siret' => $_POST['Siret'],
	           ':passw' => $hache,
               ':mail' => $_POST['mail']
	   ));
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