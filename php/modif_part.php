<?php
session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
    // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']) && isset($_POST['mail']) && isset($_POST['passw'])) {

        // Vérification du champs "mail" dans la table partenaires
        /*$vmail = $bdd->query("SELECT * FROM jeunes WHERE id = '".$_SESSION['etudiant']['id']."'") ;
        $count = $vmail->rowCount();*/
        var_dump($_POST);
        // if ($count !== 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
        // insertion des données dans les champs de la table
        $req = $bdd->prepare("UPDATE partenaires SET nom = :nom, prenom = :prenom, fonction = :fonction, mail = :mail, passw = :passw WHERE id = :id");

        // Affectation des variables
        echo    $_SESSION['partenaire']['id'] ;
        $req->execute(array(
            ':nom' =>  $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':fonction' => $_POST['fonction'],
            ':mail' => $_POST['mail'],
            ':passw' => $_POST['passw'],
            ':id' => $_SESSION['partenaire']['id']
        )); 

        $_SESSION['partenaire']['nom'] =   $_POST['nom'] ;
        $_SESSION['partenaire']['prenom'] = $_POST['prenom'];
        $_SESSION['partenaire']['fonction'] = $_POST['fonction'];
        $_SESSION['partenaire']['mail'] = $_POST['mail'];
        $_SESSION['partenaire']['passw'] = $_POST['passw'];


?>

<script>
    alert('modification effectué');
    window.location.href='index_partenaires.php';
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