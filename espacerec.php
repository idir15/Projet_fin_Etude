
<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$idR=$_SESSION['id_recruteur'];

//var_dump($id_cand);die();

//--------requette pour les candidature-------------
  //$reqRec = "SELECT c.etat, c.code_offre, o.poste, r.nom_entreprise FROM candidature c, offre_emploi o, recruteur r WHERE c.id_candidat='$idc' AND c.code_offre=o.code_offre AND o.id_recruteur=r.id_recruteur";
  
  
   
  //$repRec = mysqli_query($connection, $reqRec);


  //$nb=0;

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>



  <?php include'headerR.php'?>

<h4><?php  echo 'Bonjour ' .$_SESSION['prenom'] ;?></h4>
    
    <div class="row col-12 mx-auto mt-4  ">
      <div class="row col-12 col-lg-3 border ">
                <div class="col-12 py-0 ">
        <h5>Nom:  <?php  echo $_SESSION['nom'] ;?></h5>
    
        <h5>Prénom:  <?php  echo $_SESSION['prenom'] ;?></h5>
        
      </div>
          
  <?php
            $req="SELECT o.code_offre, o.poste, c.nom, c.prenom, cd.etat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre ";
            $rep = mysqli_query($connection,$req);
            
            ?>

      </div>
      
      <div class="row col-12 col-lg-9  border mx-auto">
      <div class="col-12 text-center">
        <h4>Mes Offres</h4>
        
      </div>

        <div class="col-12 mx-auto">
        

<table id="myTable" cellspacing="0" width="100%" class=" table responsive table-striped   mt-4 align-center ">
  
  <thead >
    <tr>
      <th>Numero offr</th>
      <th>Poste de l'offre</th>
      <th>Nombre candidature</th>
      <th>Detail</th>
      
      
    </tr>
  </thead>
  
  <tbody>
    <?php
  if (mysqli_num_rows($rep)>0)
  {
  while($row = mysqli_fetch_assoc($rep))

{
?>
    <tr>
      <td><?php echo $row['nom']; ?></td>
      <td><?php echo $row['prenom']; ?></td>
      <td><?php echo $row['poste']; ?></td>
      <td class=""><button type="button" class="btn btn-sm btn-primary ml-auto ajouter_formation_offre" id="ajouter_for"><i class="fas fa-plus" aria-hidden="true"></i></button></td>
        
     
    
    </tr>
    <?php
    } }
    ?>
  </tbody>
  
      
</table>


        </div>


        </div>
      </div>


  <?php include'footers.php'?>
</body>
</html>