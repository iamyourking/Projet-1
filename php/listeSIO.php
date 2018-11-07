<?php
require('functions.php');
if($_GET['idfiliere'] == "Tous") {
  $res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes");

$res->execute();
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesjeunes[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesjeunes);
} else {
$res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes where filiere = :f");

$res->execute(array(':f'=>$_GET['idfiliere']));
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesjeunes[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesjeunes);
}
?>
