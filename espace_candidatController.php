<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$id_cand=$_SESSION['id_candidat'];

//var_dump($id_cand);die();

//--------requette pour les candidature-------------
  $reqCnd = "SELECT c.etat, c.code_offre, o.poste, r.nom_entreprise FROM candidature c, offre_emploi o, recruteur r WHERE c.id_candidat='$id_cand' AND c.code_offre=o.code_offre AND o.id_recruteur=r.id_recruteur";
  
  
   
  $repCnd = mysqli_query($connection, $reqCnd);


  $nb=0;

  ?>


