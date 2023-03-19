

<?php 
if (session_start()) {
$idc=$_SESSION['id_candidat'];

}

    require "bd.php";
    $cofr=$_GET['id'] ;
   
    if (isset($cofr)) {
        ?>
   
    <?php
      
        $requete = "DELETE FROM candidature WHERE code_offre='$cofr' AND id_candidat='$idc'";
        //die($requete);
        $resultat = mysqli_query($connection,$requete);
   

    header("location:mes_candidatures.php");
    }
    else {die("Sans variables!");}

?>