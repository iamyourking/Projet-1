<?php
session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'root');
    // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['filiere']) && isset($_POST['annee']) && isset($_POST['mail']) && isset($_POST['passw'])) {

        // Vérification du champs "mail" dans la table partenaires
        /*$vmail = $bdd->query("SELECT * FROM jeunes WHERE id = '".$_SESSION['etudiant']['id']."'") ;
        $count = $vmail->rowCount();*/
        var_dump($_POST);
        // if ($count !== 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
        // insertion des données dans les champs de la table
        $req = $bdd->prepare("UPDATE jeunes SET nom = :nom, prenom = :prenom, filiere = :filiere,  annee = :annee,mail = :mail, passw = :passw WHERE id = :id");

        // Affectation des variables
        echo    $_SESSION['etudiant']['id'] ;
        $req->execute(array(
            ':nom' =>  $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':filiere' => $_POST['filiere'],
            ':annee' => $_POST['annee'],
            ':mail' => $_POST['mail'],
            ':passw' => $_POST['passw'],
            ':id' => $_SESSION['etudiant']['id']
        )); 

        $_SESSION['etudiant']['nom'] =   $_POST['nom'] ;
        $_SESSION['etudiant']['prenom'] = $_POST['prenom'];
        $_SESSION['etudiant']['filiere'] = $_POST['filiere'];
        $_SESSION['etudiant']['annee'] = $_POST['annee'];
        $_SESSION['etudiant']['mail'] = $_POST['mail'];
        $_SESSION['etudiant']['passw'] = $_POST['passw'];


?>

<script>
    alert('modification effectué');
    window.location.href='index_jeunes.php';
</script>
<?php
    }

    else {

        header('Location: index.php');

    }  

}


catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}   
?>