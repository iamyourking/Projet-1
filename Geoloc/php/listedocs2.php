<?php
session_start();
mb_internal_encoding('UTF-8');
require('functions.php');

$res = connexionBase()->prepare("SELECT file,type,doc,date_ajout FROM documents where id_jeunes = :id");
$res->execute(array(':id'=>$_SESSION['idmail']));
$lesSecteurs = array();
while($ligne=$res->fetch(PDO::FETCH_ASSOC))
{	 
	// Version 2
	$lesdocs[] = array_map("utf8_encode", $ligne);
}
	echo json_encode($lesdocs);
	
?>
