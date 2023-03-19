<?php
session_start();  
$idC=$_SESSION['id_candidat'];


require "bd.php";

    $FirstName = mysqli_real_escape_string($connection, $_POST["first_name"]);
    $LastName = mysqli_real_escape_string($connection, $_POST["last_name"]);
    $sexe = mysqli_real_escape_string($connection, $_POST["sexe"]);
    $DateDeNaissance = mysqli_real_escape_string($connection,$_POST["date_naissance"]) ;
    $Adresse = mysqli_real_escape_string($connection, $_POST["adresse"]) ;
   
    $wilaya = mysqli_real_escape_string($connection, $_POST["wilaya"]) ;
    $daira = mysqli_real_escape_string($connection, $_POST["daira"]) ;
   
    $Phone = mysqli_real_escape_string($connection, $_POST["phone"]) ;
  
    if((!empty($_POST["first_name"])) && (!empty($_POST["last_name"])) &&  (!empty($_POST["sexe"])) && (!empty($_POST["date_naissance"])) && (!empty($_POST["adresse"])) &&  (!empty($_POST["wilaya"])) &&(!empty($_POST["daira"])) && (!empty($_POST["phone"])) )
    {
      
        $req_wilaya ="SELECT w.num_wilaya from wilaya w WHERE w.nom_wilaya = '$wilaya'";
        $resultW = mysqli_query($connection, $req_wilaya);

        if($row = mysqli_fetch_assoc($resultW)) {
            $w=$row['num_wilaya']; } 

        $req_daira ="SELECT d.num_daira from daira d WHERE d.nom_daira = '$daira' ";
        $resultD = mysqli_query($connection, $req_daira);

        if($rowd = mysqli_fetch_assoc($resultD)) {
            $d=$rowd['num_daira']; }
       
            
       
            $query_inscription = "UPDATE candidat SET nom ='$LastName', prenom = '$FirstName', date_naissance= '$DateDeNaissance', sexe='$sexe', adresse = '$Adresse', num_daira ='$d' , num_tel ='$Phone' WHERE id_candidat ='$idC' ";
            mysqli_query($connection, $query_inscription);
          
            
    

    }
  