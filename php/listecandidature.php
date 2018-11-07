<?php
require('functions.php');
mb_internal_encoding('UTF-8');

$select1 = connexionBase()->prepare("SELECT id,id_jeune, id_offre, id_partenaire FROM candidatures");
$select1->execute();
$lesSecteurs = array();
$recup1 = $select1->fetch(PDO::FETCH_ASSOC);

$select2 = connexionBase()->prepare("SELECT id,nom, prenom, filiere FROM jeunes WHERE id = '".$recup1['id_jeune']."'");
$select2->execute();
$lesSecteurs = array();
$recup2 = $select2->fetch(PDO::FETCH_ASSOC);

$select3 = connexionBase()->prepare("SELECT id FROM partenaires WHERE id = '".$recup1['id_partenaire']."'");
$select3->execute();
$lesSecteurs = array();
$recup3 = $select3->fetch(PDO::FETCH_ASSOC);

$select4 = connexionBase()->prepare("SELECT id, titre,id_partenaire date_ajout FROM ajout_offre WHERE id = '".$recup1['id_offre']."'");
$select4->execute();
$lesSecteurs = array();
$recup4 = $select4->fetch(PDO::FETCH_ASSOC);
var_dump($recup1) ;
while($=$res->fetch(PDO::FETCH_ASSOC))
{	 
    $array_retour = array(
            $recup1,
            $recup2,
            $recup3,
            $recup4
    );
	// Version 2
	$lesoffres[] = array_map("utf8_encode", $array_retour);

	echo json_encode($lesoffres);
	
?>