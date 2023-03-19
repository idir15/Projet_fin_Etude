<?php
if(!isset($_SESSION)){
    session_start();
  } 
  //$idR=$_SESSION['id_recruteur'];
require "bd.php";
$idc = $_GET['id'];




if ($connection)
{


$req="SELECT * FROM candidat WHERE id_candidat='$idc'";
$repC = mysqli_query($connection,$req);
if($rowC = mysqli_fetch_assoc($repC)) 
{

  $nom=$rowC['nom'];
  $prenom=$rowC['prenom'];
  $sexe=$rowC['sexe'];
  $date_naissance=$rowC['date_naissance'];
  $email=$rowC['email'];
  $num_tel=$rowC['num_tel'];
 
}



}

if ($connection) {
 
  # code...

$reqf = "SELECT DISTINCT f.nom_formation, s.nom_specialite FROM specialite_requise sr, specialite s, formation f, offre_emploi o WHERE s.ref_formation=f.ref_formation AND sr.code_specialite= s.code_specialite";
$repf = mysqli_query($connection, $reqf);


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    
    
    
  <?php 


  include("headerR.php");
  ?>

   
    
    

    <div class="site-section bg-light">
      <div class="container row col-10 mx-auto">
        <div class="row col-12">
          <div class="col-lg-5">
            
            
            <div class="row col-12  bg-white mx-auto text-center">
             <div class="col-12 text-center p-3 py-5 "><img class="rounded-circle w-50 " src="photo/avapro.jpg" class="font-weight-bold">
            </div>
            <h5 class="col-12 ">Nom: <?= $nom ?></h5>
            <h5 class="col-12">Prénom:<?= $prenom ?></h5>
            <h5 class="col-12 ">Date naissance: <?= $date_naissance ?></h5>
            <h5 class="col-12 ">Email: <?= $email ?></h5>
            <h5 class="col-12 ">N° Téléphone: <?= $num_tel ?></h5>
            



            </div>
          </div>
       
          <div class="col-md-12 col-lg-7 mb-5">
          
            
          
            <div class="p-5 bg-white">

    
              
              <h5>1-Formations</h5>
              <table class="table">
          <thead>
            <tr>
              <th>Domaine</th>
              <th>Spécialité</th>
            </tr>
          </thead>





          
          <tbody>
   

           
            <?php

$reqf = "SELECT DISTINCT f.nom_formation, s.nom_specialite FROM specialite_aquise sa, specialite s, formation f WHERE sa.id_candidat='2' AND s.ref_formation=f.ref_formation AND sa.code_specialite= s.code_specialite";
$repf = mysqli_query($connection, $reqf);       

if (mysqli_num_rows($repf) > 0) {

while ($rowf = mysqli_fetch_assoc($repf)) {    ?>
  <tr> 
    <td> <?php echo $rowf["nom_formation"];?> </td>
    <td> <?php echo $rowf["nom_specialite"];?> </td>
              
         </tr>
         <?php

}}
?>
</tbody></table>

                <h5 class="mt-5">2-Experiences</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Poste de travail</th>
                    <th>Nombre d'années</th>
                    
                  </tr>
                </thead>
                <tbody>
   

           
   <?php
 



       $reqE = "SELECT e.poste, ea.date_fin, ea.date_debut FROM experience_aquise ea, experience_professionnele e WHERE ea.id_candidat='$idc' AND ea.ref_experience =e.ref_experience";
       $repE = mysqli_query($connection, $reqE);

if (mysqli_num_rows($repE) > 0) {

while ($rowE = mysqli_fetch_assoc($repE)) {  
  $dd=$rowE['date_debut'];
  $df=$rowE['date_fin'];
  $datD= strtotime($dd);
  $datF = strtotime($df);
  
  $d = date('M j, Y', $datD);
  $f = date('M j, Y', $datF);
  $diff = date_diff(date_create($d),date_create($f));
  $dattt=$diff->format('%y');

  ?>
<tr> 
<td> <?php echo $rowE["poste"];?> </td>

<td> <?php echo $dattt;?> </td>    
</tr>
<?php

}}
?>
</tbody></table>

                  <h5 class="mt-5">3-Langues</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Langue</th>
                    <th>Niveau</th>
                    
                  </tr>
                  <tbody>
   

           
   <?php
  $reqlang = "SELECT cl.nom_langue, cl.code_langue, lm.niveau FROM langue_maitrisee lm, competence_linguistique cl WHERE id_candidat='$idc' AND lm.code_langue = cl.code_langue ";

  $replang = mysqli_query($connection, $reqlang);
  

if (mysqli_num_rows($replang) > 0) {

while ($rowlang = mysqli_fetch_assoc($replang)) {    ?>
<tr> 
<td> <?php echo $rowlang["nom_langue"];?> </td>
<td> <?php echo $rowlang["niveau"];?> </td>
     
</tr>
<?php

}}
?>
</tbody></table>
                

              
            </div>
          </div>

       
        </div>
      </div>
    </div>

   


    

    

  


  <?php include("footers.php")?>
  </div>



  <script src="js/main.js"></script>
    
  </body>
</html>