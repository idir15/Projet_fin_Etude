<?php session_start(); ?>
<?php
$_SESSION['id_candiadat'] = NULL;
$_SESSION['id_recruteur'] = NULL;
$_SESSION['nom'] = NULL;
$_SESSION['prenom'] = NULL;
$_SESSION['email'] = NULL;
$_SESSION['code_offre']= NULL;
session_destroy();

header("location:index.php");


?>