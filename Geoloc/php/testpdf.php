<?php
// 
//require('consulter_offre.php');
$bdd = new PDO('mysql:host=localhost;dbname=geoloc;charset=utf8', 'root', 'root');
$offre = $bdd->query("SELECT id,titre, filiere, date_debut, duree, adresse, ville, code_postal, telephone, description FROM ajout_offre WHERE id = '".$_GET['id']."'" ) ;

$result = $offre->fetch(PDO::FETCH_ASSOC);


require('fpdf181/fpdf.php');

// creer le pdf en mode portrait, unites en mm, de 270 sur 180 mm
$pdf=new FPDF('P','mm',array(297,210));
$pdf->SetAutoPageBreak(0);
// cree une page dans le document, sinon vide
$pdf->AddPage();

// couleur de remplissage : noir
$pdf->SetFillColor(0,0,0);

// on crée la tranche avec un rectangle noir
$pdf->Rect(0, 5, 270, 2, "F");
$pdf->Rect(0, 22, 270, 2, "F");
$pdf->Rect(57, 5.5, 2, 18, "F");
$pdf->Rect(0,270,210,297, "F");
$pdf->Rect(0,66,270,2, "F");
$pdf->SetFillColor(230,230,240);
$pdf->Rect(0,24,270,42, "F");
$pdf->SetFillColor(255,255,255);
$pdf->Rect(57,270,2,297, "F");


// placement du pointeur et ecriture du titre
$pdf->SetFont('Arial','B',25);
$pdf->SetXY(7,8);
$pdf->MultiCell(100,15,'GEOLOC',0,"L");

// placer le copyright

$pdf->SetXY(5,277);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','BI',29);
$texte="Copyright crew";
$pdf->MultiCell(100,15,'GEOLOC',0,"L");
$pdf->SetTextColor(0,0,0);


// definir le texte
$pdf->SetXY(80,11);
$pdf->SetFont('Arial','B',14);
// moche bidouille : placer des retour chariot pour la tranche
$texte= $result['titre'];
$pdf->MultiCell(100,5,utf8_decode(strtoupper($texte)),0,"C");
// Champ filière
$pdf->SetFont('Arial','BI',12);
$pdf->SetXY(20, 30);
$texte = $result['filiere'];
$pdf->MultiCell(120,10,"Recherche : $texte");
// Champ date début
$pdf->SetFont('Arial','BI', 12);
$pdf->SetXY(90, 30);
$texte = $result['date_debut'];
$pdf->Cell(60,10,"A partir du : $texte");
// Champ durée
$pdf->SetFont('Arial','BI', 12);
$pdf->SetXY(160, 30);
$texte = $result['duree'];
$pdf->MultiCell(60,10,utf8_decode("durée : $texte"));
// Champ adresse
$pdf->SetFont('Arial','BI', 12);
$pdf->SetXY(20, 40);
$adresse = $result['adresse']; $ville = $result['ville']; $dep = $result['code_postal'];
$pdf->MultiCell(160,10,"Adresse : $adresse, $ville, $dep");
// Champ telephone
$pdf->SetFont('Arial','BI', 12);
$pdf->SetXY(20, 50);
$texte = $result['telephone'];
$pdf->MultiCell(50,10,"contact : $texte");

// descriptif
$pdf->SetAutoPageBreak('on',50) ;
$pdf->SetXY(20,85);
$pdf->SetFont('Arial','',11);
$texte= $result['description'];
$pdf->MultiCell(170,5,utf8_decode($texte));





// sortir le pdf vers le navigateur


//$pdf->AddPage();
$pdf->Output("pdf_test.pdf", "F");
?>