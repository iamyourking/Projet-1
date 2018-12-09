<?php
require('functions.php');

if($_GET['page'] == "1") {
    $page = 5;
    $res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes LIMIT "$page"");

    $res->execute();
    $lesSecteurs = array();
    while($ligne=$res->fetch(PDO::FETCH_ASSOC))
    {	 
        // Version 2
        $lesjeunes[] = array_map("utf8_encode", $ligne);
    }
    echo json_encode($lesjeunes);
}
else 
    if($_GET['page'] == "2") {
        $page = 10;
        $res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes LIMIT "$page" OFFSET 5");

        $res->execute(array());
        $lesSecteurs = array();
        while($ligne=$res->fetch(PDO::FETCH_ASSOC))
    }
else
    if($_GET['page'] == "3") {
        $page = 15;
        $res = connexionBase()->prepare("SELECT id,nom,prenom,filiere,annee FROM jeunes LIMIT "$page" OFFSET 10");

        $res->execute(array());
        $lesSecteurs = array();
        while($ligne=$res->fetch(PDO::FETCH_ASSOC))


        {	 
            // Version 2
            $lesjeunes[] = array_map("utf8_encode", $ligne);
        }
        echo json_encode($lesjeunes);
    }
?>
