<?php 
session_start();
if ( $_SESSION['loggedin'] || $_SESSION['loggedin1'] == true) {
    
    session_destroy();
//    var_dump($_SESSION['etudiant']);
    header('Location: ../index1.php');
    //echo "Welcome to the member's area, " . $_SESSION['login'] . "!";
} else {
    echo "Please log in first to see this page.";
}
?>