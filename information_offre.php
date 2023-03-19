<?php
session_start();  
$idR=$_SESSION['id_recruteur'];



require "bd.php";
    
    $nom_offre = mysqli_real_escape_string($connection, $_POST["nom_offre"]);
    $detail_offre = mysqli_real_escape_string($connection, $_POST["detail_offre"]);
    $wilaya_offre = mysqli_real_escape_string($connection, $_POST["wilaya_offre"]);
    $daira_offre = mysqli_real_escape_string($connection, $_POST["daira_offre"]);
    $date_fin_offre = mysqli_real_escape_string($connection,$_POST["date_fin_offre"]) ;
    $type_de_travail = mysqli_real_escape_string($connection, $_POST["type_de_travail"]) ;
    $adresse_offre = mysqli_real_escape_string($connection, $_POST["adresse_offre"]) ;

   
  
    
       $req_wilayaa ="SELECT num_wilaya from wilaya WHERE nom_wilaya = '$wilaya_offre'";
        $resultWw = mysqli_query($connection, $req_wilayaa);

        if($roww = mysqli_fetch_assoc($resultWw)) {
            $ww=$roww['num_wilaya']; } 

        $req_dairaa ="SELECT num_daira from daira WHERE nom_daira = '$daira_offre' ";
        $resultDr = mysqli_query($connection, $req_dairaa);

        if($rowd = mysqli_fetch_assoc($resultDr)) {
            $nd=$rowd['num_daira']; }
       
            
       
            $query_add_offre = "INSERT INTO offre_emploi (date_f, poste, typeTravail, detail,adresse, id_recruteur, num_daira)";
            $query_add_offre .= "VALUES('$date_fin_offre', '$nom_offre', '$type_de_travail', '$detail_offre', '$adresse_offre', '$idR', '$nd') ";
            $regOffre = mysqli_query($connection, $query_add_offre);

            $idofff = mysqli_insert_id($connection);
            //$idofff=$idofff1+1;

        
            $_SESSION['code_offre']= $idofff ;
            //var_dump( $_SESSION['code_offre']);




            
            
          
            
    

    



   
  
  




