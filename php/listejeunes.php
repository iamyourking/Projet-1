<?php
require('functions.php');
mb_internal_encoding('UTF-8');

$res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes ORDER BY nom");
$res->execute();
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesjeunes[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesjeunes);
	
?>
