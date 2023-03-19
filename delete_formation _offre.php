<?php if (session_start()) {

$code_off=$_SESSION['code_offre'];
}

$connection=  mysqli_connect('localhost', 'root','' ,'torecruit');
$query ="SET NAMES utf8";
mysqli_query($connection,$query);


    if (isset($_POST["id"]) ) {
        foreach($_POST["id"] as $id){
    $requete = "DELETE FROM specialite_requise WHERE code_offre ='$code_off' AND code_specialite='".$id."'";
   // var_dump($requete);die();
       
    mysqli_query($connection, $requete);
}

    }
?>