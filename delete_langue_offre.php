<?php if (session_start()) {
$cOf=$_SESSION['code_offre'];

}

require "bd.php";


    if (isset($_POST["id"]) ) {
        foreach($_POST["id"] as $id){
    $requete = "DELETE FROM langue_demandee WHERE code_offre='$cOf' AND code_langue='".$id."'" ;
   // var_dump($requete);die();
       
     mysqli_query($connection, $requete);
}

    }
?>