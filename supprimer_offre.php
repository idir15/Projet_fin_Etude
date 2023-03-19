

<?php 
if (session_start()) {
$idr=$_SESSION['id_recruteur'];

}

    require "bd.php";
    $cofr=$_GET['id'] ;
    var_dump($cofr);
    if (isset($cofr)) {
        ?>
   
    <?php
        $requetef = "DELETE FROM specialite_requise WHERE code_offre='$cofr'";
        $resultatf = mysqli_query($connection,$requetef);
        
        $requeteexp = "DELETE FROM experience_requise WHERE code_offre='$cofr'";
        $resultatexp = mysqli_query($connection,$requeteexp);
      
        $requetel = "DELETE FROM langue_demandee WHERE code_offre='$cofr'";
        $resultatl = mysqli_query($connection,$requetel);
        
        $requetec = "DELETE FROM competence_demandee WHERE code_offre='$cofr'";
        $resultatc = mysqli_query($connection,$requetec);

        $requetecan = "DELETE FROM candidature WHERE code_offre='$cofr'";
        $resultatcan = mysqli_query($connection,$requetecan);
       
        $requete = "DELETE FROM offre_emploi WHERE code_offre='$cofr' AND id_recruteur='$idr'";
        //die($requete);
        $resultat = mysqli_query($connection,$requete);
   

    header("location:list_offre_rec.php");
    }
    else {die("Sans variables!");}

?>