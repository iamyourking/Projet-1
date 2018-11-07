<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');

    if(isset($_POST['id']) ) {
        // vérification dans la BDD de l'etudiant et le MDP
        $vlogin = $bdd->query("SELECT id, titre, filiere, date_ajout, ville FROM ajout_offre WHERE id = '".$_POST['id']."'" ) ;
        $count = $vlogin->rowCount();
        $login = $_POST['id'];
        if ($count == 1) {
            session_start();
            $result = $vlogin->fetch(PDO::FETCH_ASSOC);
            $_SESSION['loggedin'] = true;
            $_SESSION['etudiant'] = $result;
            header("location: index_jeunes.php");
        } else {
            echo '<script>alert("Identifiant incorrecte");</script>';
            header("refresh:0.1;url=../index.php");
        }
    }
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>