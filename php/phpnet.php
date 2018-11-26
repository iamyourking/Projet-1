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

$select3 = $bdd->query("SELECT id, prenom, nom, mail FROM jeunes WHERE id = '".$_SESSION['etudiant']['id']."'" ) ;

$recup3 = $select2->fetch(PDO::FETCH_ASSOC);

$recup4 = $select3->fetch(PDO::FETCH_ASSOC);


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
$mail2 = new PHPMailer(true);
$mail->Encoding = 'base64';
$mail2->Encoding = 'base64';
$mail->CharSet='utf-8';
$mail2->CharSet='utf-8';
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
    $destnom = $_SESSION['etudiant']['nom'];
    $destprenom = $_SESSION['etudiant']['prenom'];
    $link = $_SESSION['etudiant']['id'];
    $mail->Body    = "<b>Nouvelle Candidature sur GeoLoc !<br>Voici le profil du candidat : il se prénomme $destnom $destprenom.</b><br> <a href='http://localhost/Projet/Geoloc/php/candidatures.php?id=$link'>Cliquez ici !</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();



            /////////
            

    //Server settings
    
    $mail2->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail2->isSMTP();                                      // Set mailer to use SMTP
    $mail2->Host = 'smtp.phpnet.org';  // Specify main and backup SMTP servers
    $mail2->SMTPAuth = true;                               // Enable SMTP authentication
    $mail2->AuthType = 'LOGIN';
    $mail2->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));
    $mail2->Username = 'noreply@jeremytchiss.fr';                 // SMTP username
    $mail2->Password = 'G7family91';                           // SMTP password
    $mail2->SMTPSecure = 'tls';
    
    $mail2->SMTPAutoTLS = false;
    // Enable TLS encryption, `ssl` also accepted
    $mail2->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail2->setFrom('noreply@jeremytchiss.fr', 'GeoLoc Assistant');
    $address = $recup4['mail'];
    $nom = $recup4['nom'];
    $mail2->ClearAllRecipients();
    $mail2->addAddress($address, $nom);     // Add a recipient


    //Content
    $mail2->isHTML(true);                                  // Set email format to HTML
    $titre = $recup['titre'];
    $mail2->Subject = "Récapitulatif - Candidature $titre";
    $mail2->Body    = "<h1>
                        <b>Nouvelle Candidature sur GeoLoc !</b>
                        </h1>
                        <br><h3>
                        <b>Votre candidature à l'offre <u>$titre</u> à bien été prise en charge.</b>
                        </h3>
                        <br> 
                        <p>Vous serez recontacté directement par l'employeur dans le cas ou votre candidature est retenue, bonne Chance.</p>
                        <footer><img src='../geoloc.png' alt=''/></footer>
                        ";

    $mail2->AltBody = "<h1>
    <b>Nouvelle Candidature sur GeoLoc !</b>
    </h1>
    <br><h3>
    <b>Votre candidature à l'offre $titre à bien été prise en charge.</b>
    </h3>
    <br> 
    <p>Vous serez recontacté directement par l'employeur dans le cas ou votre candidature est retenue, bonne Chance.</p>
    <footer><img src='../geoloc.png' alt=''/></footer>";

   $mail2->send();
     echo '<script>alert("Candidature envoyée.");</script>';
            header("refresh:0.1;url=../index.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail2->ErrorInfo;
}