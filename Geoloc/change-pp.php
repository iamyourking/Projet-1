<?php
session_start();
mb_internal_encoding('UTF-8');
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(0,100)."-Pimg-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="./uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{     
        try{
            $connexion = new PDO('mysql:host=localhost;dbname=geoloc2;charset=utf8', 'root', 'root');
        } 
        catch (PDOException $e) {
	        echo 'Echec lors de la connexion : ' .$e->getMessage();
        }
        if($_POST['key'] !== 'entreprise' ) {
        // Requete compteur photo de profil d'un utilisateur si = 0 création, si >0 remplacement
            $req = $connexion->query("SELECT * FROM documents WHERE doc='PP' AND id_user='".$_SESSION['jeunes']['id']."'") ;
            $count = $req->rowCount();
 
            if ($count > 0) {
                $req = $connexion->query("UPDATE documents SET file ='".$new_file_name."' WHERE doc='PP' AND id_user='".$_SESSION['jeunes']['id']."'");
	?>
		        <script>
		            alert('successfully uploaded -- 1');
                    window.location.href='./profile.php?success';
                </script>
<?php
            } else if ($count == 0) {
                $req = $connexion->prepare("INSERT INTO documents(file,type,id_user,doc,date_ajout) VALUES(:file,:type,:id,:doc, NOW())");
                $req->execute(array(
                    ':file' => $final_file,
                    ':type' => $file_type,
                    ':id' => $_SESSION['jeunes']['id'],
                    ':doc' => PP
                ));
    ?>
            <script>
		        alert('successfully uploaded -- 2');
                window.location.href='./profile.php?success';
            </script>
<?php
            }  
        } else {
	?>
		<script>
		    alert('error while uploading file');
            window.location.href='./profile.php?fail';
        </script>
<?php
	}
}
}
?>
