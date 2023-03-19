<?php
if(!isset($_SESSION)){
    session_start();
  } 
  //$idR=$_SESSION['id_recruteur'];
require "bd.php";
$cOff = $_GET['id'];
$_SESSION['code_offre']=$cOff;


if ($connection)
{


$req="SELECT o.detail, o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM recruteur r, offre_emploi o, wilaya w, daira d WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya AND o.code_offre='$cOff' ";
$repC = mysqli_query($connection,$req);
if($rowC = mysqli_fetch_assoc($repC)) 
{
  $poste=$rowC['poste'];
  $typeTravail=$rowC['typeTravail'];
  $nom_daira=$rowC['nom_daira'];
  $nom_wilaya=$rowC['nom_wilaya'];
  $nom_entreprise=$rowC['nom_entreprise'];
  //$adresse=
  $detail=$rowC['detail'];
}



}

if ($connection) {
 
  # code...

$reqf = "SELECT DISTINCT f.nom_formation, s.nom_specialite FROM specialite_requise sr, specialite s, formation f, offre_emploi o WHERE sr.code_offre='$cOff' AND s.ref_formation=f.ref_formation AND sr.code_specialite= s.code_specialite";
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
if(!isset($_SESSION['id_candidat'])){
  include("header.php");
}
  else{

  include("headerC.php");}
  ?>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0"><?=  $poste; ?></h2>
        
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <div class="p-5 bg-white">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?php echo $poste; ?></h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4"><?=  $typeTravail; ?></span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#"><?=  $nom_entreprise; ?></a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span><?=  $nom_daira; ?>, <?=  $nom_wilaya; ?></span></div>
               </div>
              </div>
              
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
       $reqE = "SELECT e.poste, er.nombre_annee FROM experience_requise er, experience_professionnele e WHERE er.code_offre='$cOff' AND er.ref_experience =e.ref_experience ";
       $repE = mysqli_query($connection, $reqE);

if (mysqli_num_rows($repf) > 0) {

while ($rowE = mysqli_fetch_assoc($repE)) {    ?>
<tr> 
<td> <?php echo $rowE["poste"];?> </td>
<td> <?php echo $rowE["nombre_annee"];?> </td>
     
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
  $reqlang = "SELECT cl.nom_langue, cl.code_langue, ld.niveau FROM langue_demandee ld, competence_linguistique cl WHERE ld.code_offre='$cOff' AND ld.code_langue = cl.code_langue ";

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
                

              <p class="mt-5"><a href="ajouter_candidature.php" class="btn btn-primary  py-2 px-4">poster</a></p>
            </div>
          </div>

          <div class="col-lg-4">
            
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Plus d'infos</h3>
              <p><?= $detail?></p>

              <p><a href="ajouter_candidature.php" class="btn btn-primary  py-2 px-4">poster</a></p>
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