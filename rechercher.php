<?php
require  "bd.php";

if(!isset($_POST['rechercher'])){
    $req="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM recruteur r, offre_emploi o, wilaya w, daira d WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC";
                    $rep = mysqli_query($connection,$req);
                    
}

elseif(isset($_POST['rechercher']))
    {
      $typeTravail= 'tout';
  //$typeTravail=$_POST['type_travail'];
  $domaine_formation=$_POST['domaine_formatio'];
  $choix = '8';
  
if ($domaine_formation=='tout'){
  if ($choix=='0')
{
    if($typeTravail== 'tout'){
        $req1="SELECT o.code_offre,o.date_f, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM  offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req1);

    }else{
        $req1="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM  offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE o.typeTravail='$typeTravail' AND er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req1);
    }
}
elseif ($choix=='2')
{   
    if($typeTravail== 'tout'){
        $req2="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req2);
    
    }else{ 
        $req2="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE o.typeTravail='$typeTravail' AND er.nombre_annee<=4 AND er.nombre_annee>2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req2);
    }

}
elseif ($choix=='4')
{   
    if($typeTravail== 'tout'){
        $req3="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req3);
    
    }else{
        $req3="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE o.typeTravail='$typeTravail' AND er.nombre_annee<=6 AND er.nombre_annee>4 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req3);
    }
}
elseif ($choix=='6')
{
    if($typeTravail== 'tout'){
        $req4="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req4);
    
    }else{  
        $req4="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, experience_requise er, recruteur r, wilaya w, daira d WHERE o.typeTravail='$typeTravail' AND er.nombre_annee>6 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req4);
    }    

}elseif ($choix=='8')
{   
    if($typeTravail== 'tout'){
        $req5="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, recruteur r, wilaya w, daira d WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req5);
       
    
    }else{
        $req5="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM offre_emploi o, recruteur r, wilaya w, daira d WHERE o.typeTravail='$typeTravail' AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req5);
    }

}

//-------domaine # tout------

}else{
  if ($choix=='0')
  {
      if($typeTravail== 'tout'){
        $req1="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation   AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req1);

      }else{
        $req1="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation   AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND o.typeTravail='$typeTravail' AND er.nombre_annee<=2 AND er.code_offre=o.code_offre  AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
        $rep=mysqli_query($connection,$req1);
      }
  }
  elseif ($choix=='2')
  {   
      if($typeTravail== 'tout'){
          $req2="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation  AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req2);
      
      }else{ 
          $req2="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation  AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND o.typeTravail='$typeTravail' AND er.nombre_annee<=4 AND er.nombre_annee>2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req2);
      }

  }
  elseif ($choix=='4')
  {   
      if($typeTravail== 'tout'){
          $req3="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation   AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req3);
      
      }else{
          $req3="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation  AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND o.typeTravail='$typeTravail' AND er.nombre_annee<=6 AND er.nombre_annee>4 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req3);
      }
  }
  elseif ($choix=='6')
  {
      if($typeTravail== 'tout'){
          $req4="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation  AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND er.nombre_annee<=2 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req4);
      
      }else{  
          $req4="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, experience_requise er, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation  AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND o.typeTravail='$typeTravail' AND er.nombre_annee>6 AND er.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req4);
      }    

  }elseif ($choix=='8')
  {   
      if($typeTravail== 'tout'){
          $req5="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, recruteur r, wilaya w, daira d  WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation   AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req5);
      
      }else{
          $req5="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.  nom_daira, w.nom_wilaya FROM formation f, specialite s, offre_emploi o,   specialite_requise sr, recruteur r, wilaya w, daira d WHERE f.ref_formation='$domaine_formation' AND s.ref_formation=f.ref_formation AND s.code_specialite=sr.code_specialite AND sr.code_offre=o.code_offre AND o.typeTravail='$typeTravail' AND r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya ORDER BY o.code_offre DESC ";
          $rep=mysqli_query($connection,$req5);
      }

  
  }}}
       ?> 
  <table id="tableData" class="col-12 col-lg-10 mx-auto mx-0 px-0 ">
  <?php
  if (mysqli_num_rows($rep)>0)
  {
  while($row = mysqli_fetch_assoc($rep))

{
?>
<tbody>
  <tr>
    
    <td>
      <div class="row col-12 px-0 mx-0 text-center" data-aos="fade">
        <div class="col-md-12 mx-0 px-0">
          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
            <div class="mb-4 mb-md-0">
              <div class="job-post-item-header d-block d-md-flex align-items-center">
                <h5 class="mr-3 text-black "><?php echo $row['poste']; ?></h5>
                <div class="badge-wrap">
                  <span class="bg-warning text-black badge py-2 px-4"><?php echo $row['typeTravail']; ?></span>
                </div>
              </div>
              <div class="job-post-item-body d-block d-md-flex">
                <div class=""><span class="fl-bigmug-line-portfolio23"></span> <a href="#"><?php echo $row['nom_entreprise']; ?>&emsp;</a></div>
                <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $row['nom_daira'] .', '.$row['nom_wilaya']; ?></span></div>
              </div>
            </div>
            <div class="ml-auto">
              
              <a href="detail_offre.php?id=<?=$row['code_offre'];?>" class="btn btn-primary py-2">Détail</a>
            </div>
          </div>
        </div>
      </div>
    </td>
    <?php
    } ?>
    
  </tr>
</tbody>
</table>

    <?php
    }
    ?>
