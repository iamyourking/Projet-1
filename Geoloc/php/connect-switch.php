<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=geoloc2;charset=utf8', 'root', 'root');

    if(isset($_POST['email']) && isset($_POST['passw'])) {
        $upass = $_POST['passw'];
        // vérification dans la BDD du n°Siret et le MDP
        $vlogin = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['email']."' AND passw = '".$_POST['passw']."' AND grade = 'etudiant'") ;
        $count = $vlogin->rowCount();
        $login = $_POST['email'];
        if ($count == 1) {
            session_start();
            $result = $vlogin->fetch(PDO::FETCH_ASSOC);
            $_SESSION['loggedin'] = true;
            $_SESSION['jeunes'] = $result;
            header("location: ../logged.php");
        } else 
            if($count == 0) { 
                $vlogin = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['email']."' AND passw = '".$_POST['passw']."' AND grade = 'entreprise'") ;
                $count = $vlogin->rowCount();
                $login = $_POST['email'];
                if($count == 1) {
                    session_start();
                    $result = $vlogin->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['loggedin'] = true;
                    $_SESSION['partenaires'] = $result;
                    header("location: ../logged.php");
                } else 
                    if($count == 0) {
                        $vlogin = $bdd->query("SELECT * FROM users WHERE email = '".$_POST['email']."' AND passw = '".$_POST['passw']."' AND grade = 'admin'") ;
                        $count = $vlogin->rowCount();
                        $login = $_POST['email'];
                        if ($count == 1) {
                            session_start();
                            $result = $vlogin->fetch(PDO::FETCH_ASSOC);
                            $_SESSION['loggedin'] = true;
                            $_SESSION['administrateur'] = $result;
                            header("location: ../logged.php");
                        } else {
                            header("location: index.php");
                    }
                }
            }
        
    }
}

catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>