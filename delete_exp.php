<?php if (session_start()) {
$id_cand=$_SESSION['id_candidat'];

}

$connection=  mysqli_connect('localhost', 'root','','TORecruit');
$query ="SET NAMES utf8";
mysqli_query($connection,$query);


    if (isset($_POST["id"]) ) {
        foreach($_POST["id"] as $id){
    $requete = "DELETE FROM experience_aquise WHERE id_candidat='$id_cand' AND ref_experience='".$id."'" ;
   // var_dump($requete);die();
       
     mysqli_query($connection, $requete);
}

    }
?>