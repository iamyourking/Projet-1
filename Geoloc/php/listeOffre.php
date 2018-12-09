<?php
require('functions.php');
mb_internal_encoding('UTF-8');

$res = connexionBase()->prepare("SELECT id,titre, filiere, date_ajout, duree, adresse, ville, code_postal, telephone, description FROM ajout_offre");
$res->execute();
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesoffres[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesoffres);
	
?>