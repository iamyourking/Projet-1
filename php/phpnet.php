<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';
$bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'G7family91');
$select1 = $bdd->query("SELECT id_partenaire, id, titre FROM ajout_offre WHERE id = '".$_GET['id']."'" ) ;
$recup = $select1->fetch(PDO::FETCH_ASSOC);

$select2 = $bdd->query("SELECT id, mail, nom FROM partenaires WHERE id = '".$recup['id_partenaire']."'" ) ;

$recup2 = $select2->fetch(PDO::FETCH_ASSOC);

$select3 = $bdd->query("SELECT id, prenom, nom FROM jeunes WHERE id = '".$_SESSION['etudiant']['id']."'" ) ;

$recup3 = $select2->fetch(PDO::FETCH_ASSOC);


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.phpnet.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->AuthType = 'LOGIN';
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));
    $mail->Username = 'noreply@jeremytchiss.fr';                 // SMTP username
    $mail->Password = 'G7family91';                           // SMTP password
    $mail->SMTPSecure = 'tls';
    
    $mail->SMTPAutoTLS = false;
    // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@jeremytchiss.fr', 'GeoLoc');
    $address = $recup2['mail'];
    $nom = $recup2['nom'];
    $mail->addAddress($address, $nom);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $titre = $recup['titre'];
    $mail->Subject = "Candidature $titre";
    $destnom = $recup3['nom'];
    $destprenom = $recup3['prenom'];
    $link = $_SESSION['etudiant']['id'];
    $mail->Body    = "<b>Nouvelle Candidature sur GeoLoc !<br>Voici le profil du candidat : il se prénomme $destnom $destprenom.</b> <a href='http://localhost/Projet/Geoloc/php/candidatures.php?id=$link'>Cliquez ici !</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}