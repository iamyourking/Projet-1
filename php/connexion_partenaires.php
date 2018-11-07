<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');

    if(isset($_POST['siret']) && isset($_POST['passw'])) {
        $upass = $_POST['passw'];
        // vérification dans la BDD du n°Siret et le MDP
        $vlogin = $bdd->query("SELECT * FROM partenaires WHERE Siret = '".$_POST['siret']."' AND passw = '".$_POST['passw']."'") ;
        $count = $vlogin->rowCount();
        $login = $_POST['siret'];
        if ($count == 1) {
            session_start();
            $result = $vlogin->fetch(PDO::FETCH_ASSOC);
            $_SESSION['loggedin1'] = true;
            $_SESSION['partenaire'] = $result;
            header("location: index_partenaires.php");
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