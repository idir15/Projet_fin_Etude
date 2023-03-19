<?php if (session_start()) {
$idc=$_SESSION['id_candidat'];
$cOffre=$_SESSION['code_offre'];
}

require "bd.php";
//var_dump($idc);die();

if(!isset($idc)){
  header("location:connecter.php");
}
  else
  {
    // La diff entre deux date pour calculer nombre d experience
    $req_date="SELECT date_fin, date_debut FROM experience_aquise WHERE id_candidat = '$idc'  ";
$rep_date=mysqli_query($connection, $req_date);
if($row = mysqli_fetch_assoc($rep_date)) {
    $dd=$row['date_debut'];
    $df=$row['date_fin'];    }
   

$datD= strtotime($dd);
$datF = strtotime($df);

$d = date('M j, Y', $datD);
$f = date('M j, Y', $datF);
$diff = date_diff(date_create($d),date_create($f));
$dattt=$diff->format('%y');


  
  $req_compare_specialite= "SELECT sa.code_specialite FROM specialite_aquise sa , specialite_requise sr WHERE sr.code_offre='$cOffre' AND sa.id_candidat='$idc' AND sr.code_specialite=sa.code_specialite ";
  $rep_compare_specialite=mysqli_query($connection, $req_compare_specialite); 

  $req_compare_formation="SELECT s.ref_formation from specialite s, specialite_aquise sa where sa.code_specialite=s.code_specialite AND sa.id_candidat='$idc' AND s.ref_formation  IN (SELECT s.ref_formation from specialite s, specialite_requise sr where sr.code_specialite=s.code_specialite AND sr.code_offre='$cOffre')";
  $rep_compare_formation=mysqli_query($connection, $req_compare_formation); 

  $req_compare_experience="SELECT ea.ref_experience from experience_aquise ea , experience_requise er where ea.id_candidat='$idc' AND ea.ref_experience=er.ref_experience AND er.code_offre='$cOffre' ";
  $rep_compare_experience=mysqli_query($connection, $req_compare_experience); 

  $req_compare_experience_nombre="SELECT ea.ref_experience from experience_aquise ea , experience_requise er where ea.id_candidat='$idc' AND ea.ref_experience=er.ref_experience AND  er.code_offre='$cOffre' AND er.nombre_annee<='$dattt'";
  $rep_compare_experience_nombre=mysqli_query($connection, $req_compare_experience_nombre); 

  $req_compare_langue="SELECT lm.code_langue FROM langue_maitrisee lm , langue_demandee ld WHERE lm.id_candidat='$idc' AND lm.code_langue=ld.code_langue AND ld.code_offre='$cOffre'";
  $rep_compare_langue=mysqli_query($connection, $req_compare_langue); 
  $rowlng = mysqli_num_rows($rep_compare_langue);

  $req_compare_niveau_langue="SELECT lm.code_langue FROM langue_maitrisee lm ,langue_demandee ld WHERE lm.id_candidat='$idc' AND ld.code_offre='$cOffre' AND lm.code_langue=ld.code_langue AND ld.niveau<=lm.niveau";
  $rep_compare_niveau_langue=mysqli_query($connection, $req_compare_niveau_langue); 
  $rowlng_niv = mysqli_num_rows($rep_compare_niveau_langue);

  $req_compare_lang="SELECT ld.code_langue FROM langue_demandee ld WHERE ld.code_offre='$cOffre'";
  $rep_compare_lang=mysqli_query($connection, $req_compare_lang); 
  $rowl = mysqli_num_rows($rep_compare_niveau_langue);

  $req_compare_competence="SELECT ca.code_competence FROM competence_aquise ca , competence_demandee cd WHERE ca.id_candidat='$idc' AND cd.code_offre='$cOffre' AND cd.code_competence=ca.code_competence";
  $rep_compare_competence=mysqli_query($connection, $req_compare_competence); 
 

  //$req_compare_="";
 // $rep_compare_=mysqli_query($connection, $req_compare_);
 $req_specialite ="SELECT code_specialite from specialite_requise WHERE code_offre = '$cOffre'";
 $resultS = mysqli_query($connection, $req_specialite);

 $req_exp ="SELECT ref_experience from experience_requise WHERE code_offre = '$cOffre'";
 $resultexp = mysqli_query($connection, $req_exp);

 $req_lang ="SELECT code_langue from langue_demandee WHERE code_offre = '$cOffre'";
 $resultlang = mysqli_query($connection, $req_lang);

 $req_comp ="SELECT code_competence from competence_demandee WHERE code_offre = '$cOffre'";
 $resultcomp = mysqli_query($connection, $req_comp);
 








  $sp=false;
  $form=false;
  $exp=false;
  $expn=false;
  $lang=false;
  $langn=false;
  $comp=false;

 if((mysqli_num_rows($rep_compare_specialite)>0) || mysqli_num_rows($resultS)==0) {$sp=true;}

 if((mysqli_num_rows($rep_compare_formation)>0) || mysqli_num_rows($resultS)==0) {$form=true;}

 if((mysqli_num_rows($rep_compare_experience)>0) || mysqli_num_rows($resultexp)==0) {$exp=true; }  

 if((mysqli_num_rows($rep_compare_experience_nombre)>0) || mysqli_num_rows($resultexp)==0) {$expn=true; var_dump($expn);}

 if(($rowl==$rowlng_niv) || mysqli_num_rows($resultlang)==0){$langn=true;}

 if(($rowl==$rowlng) || mysqli_num_rows($resultlang)==0) {$lang=true;}

 if((mysqli_num_rows($rep_compare_competence)>0) || mysqli_num_rows($resultcomp)==0) {$comp=true;}
 
 if($sp && $expn && $langn && $comp){
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat) VALUES('$idc', '$cOffre', 'Conditions requises satisfaites')";
  $x=mysqli_query($connection, $query_candidature_add); 
  ?>
  <script> alert("Inscription terminée !")</script>
<?php
  header("location:espace_cand.php?user=$idc");
  
 }elseif($form && $expn && $langn && $comp){
   $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','Manque de spécialités')";
   $x=mysqli_query($connection, $query_candidature_add); 
   ?>
   <script> alert("Inscription terminée !")</script>
 <?php
   header("location:espace_cand.php?user=$idc");
 
}elseif($sp && $exp && $langn && $comp){
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','Manque d'experiences')";
  $x=mysqli_query($connection, $query_candidature_add); 
  ?>
  <script> alert("Inscription terminée !")</script>
<?php
  header("location:espace_cand.php?user=$idc");
 
  
}elseif($sp && $langn && $comp){
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','Manque d'experiences')";
  $x=mysqli_query($connection, $query_candidature_add); 
  ?>
  <script> alert("Inscription terminée !")</script>
<?php
  header("location:espace_cand.php?user=$idc");
  

}elseif($sp && $expn && $comp){
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','Manque de langues')";
  $x=mysqli_query($connection, $query_candidature_add); 
  ?>
  <script> alert("Inscription terminée !")</script>
<?php
  header("location:espace_cand.php?user=$idc");


}elseif($sp && $expn && $langn){
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','Manque de compétences')";
  $x=mysqli_query($connection, $query_candidature_add); 
 header("location:espace_cand.php?user=$idc");

}else {
  $query_candidature_add= "INSERT INTO candidature (id_candidat, code_offre, etat)  VALUES('$idc', '$cOffre','refusé')";
  $x=mysqli_query($connection, $query_candidature_add); 
  ?>
  <script> alert("Inscription terminée !")</script>
<?php
  header("location:espace_cand.php?user=$idc");
 

}





        
       















  

}

  












   


?>