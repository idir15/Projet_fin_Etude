<?php if (session_start()) {
$idc=$_SESSION['id_candidat'];

}

require "bd.php";


    if (isset($_POST["id"]) ) {
        foreach($_POST["id"] as $id){
    $requete = "DELETE FROM langue_maitrisee WHERE id_candidat='$idc' AND code_langue='".$id."'" ;
   // var_dump($requete);die();
       
     mysqli_query($connection, $requete);
}

    }
?>