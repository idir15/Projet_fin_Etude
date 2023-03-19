<?php if (session_start()) {
$cOf=$_SESSION['code_offre'];

}

require "bd.php";


    if (isset($_POST["id"]) ) {
        foreach($_POST["id"] as $id){
    $requete = "DELETE FROM experience_requise WHERE code_offre='$cOf' AND ref_experience='".$id."'" ;
   // var_dump($requete);die();
       
     mysqli_query($connection, $requete);
}

    }
?>