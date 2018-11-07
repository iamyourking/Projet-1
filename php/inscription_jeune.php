<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
         // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cpassw']) && isset($_POST['filiere']) && isset($_POST['annee']) && isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['passw'])) {
        
         // Vérification du champs "mail" dans la table partenaires
        $vmail = $bdd->query("SELECT * FROM jeunes WHERE mail = '".$_POST['mail']."'") ;
        $count = $vmail->rowCount();
        
        
        if ($count == 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
                // insertion des données dans les champs de la table
            $req = $bdd->prepare("INSERT INTO jeunes(login, nom, prenom, mail, passw, cpassw, filiere, annee, date_ajout) VALUES(:login, :nom, :prenom, :mail, :passw, :cpassw, :filiere, :annee, NOW())");
    
                // Affectation des variables
            
            $req->execute(array(
	           ':nom' => $_POST['nom'],
	           ':prenom' => $_POST['prenom'],
	           ':filiere' => $_POST['filiere'],
	           ':annee' => $_POST['annee'],
               ':login' => $_POST['login'],
               ':mail' => $_POST['mail'], 
	           ':passw' => $_POST['passw'],
               ':cpassw' => $_POST['cpassw']
	   ));
            header('Location: chargement.php');
            
        }
        
        else {
        
        header('Location: error_inscription_jeunes.php');
    
        }  
        
    }
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}   
?>