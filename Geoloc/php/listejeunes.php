<?php
require('functions.php');
mb_internal_encoding('UTF-8');

$res = connexionBase()->prepare("SELECT users.id,nom,prenom,filliere,annee,file FROM users INNER JOIN documents ON users.id = documents.id_user WHERE grade = 'etudiant' AND doc = 'PP' ORDER BY nom");
$res->execute();
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesjeunes[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesjeunes);
	
?>
