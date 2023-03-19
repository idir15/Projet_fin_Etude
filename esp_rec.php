
<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$idR=$_SESSION['id_recruteur'];
$nom=$_SESSION['nom'];
$pnom=$_SESSION['prenom'] ;

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
  <style>
    .card-body:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    cursor: pointer;
}

  </style>

</head>
<body>



  <?php include'headerR.php'?>
  <div class="row col-12">

    <div class="col-12 col-lg-3">

          <div class="card mx-auto bg-white mt-4">
                  <div class="d-flex flex-column align-items-center text-center bg-white">
                    <img src="photo/avapro.jpg" alt="Admin" class="rounded-circle mt-3" width="150">
                    <div class="mt-3">
                     <h4>Nom: <?= $nom ?></h4>
                    <h4>Prénom: <?= $pnom ?></h4>
                      
                      <br>
                      <br>
                     
                    </div>
                  </div>
          </div>
      
    </div>

    <div class="row col-12 col-lg-9 bg-light">
       <a href="poster_offre.php" class="col-12 col-lg-4 card-body mx-auto text-black ">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <br>
                    <img src="photo/postjob.png" alt="Admin" class="" width="80">
                    <div class="mt-3">
                      <h4 class="text-dark" >Ajouter une offre</h4>
                      <br>

                    </div>
                  </div>
          </a>
        <a href="list_offre_rec.php" class="col-12 col-lg-4 card-body mx-auto text-black ">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <br>
                    <img src="photo/offre_emploi.png" alt="Admin" class="" width="120">
                    <div class="mt-3">
                      <h4 class="text-dark" >Offres d'emplois</h4>
                      <br>

                    </div>
                  </div>
          </a>
            <a href="liste_candidature.php" class="col-12 col-lg-4 card-body mx-auto">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <img src="photo/cand.png" alt="Admin" class="" width="120">
                    <div class="mt-3">
                      <h4 class="text-dark">28 Candidatures</h4>
                      <br>
                      
                      
                     
                    </div>
                  </div>
          </a>
           <a  href="" class=" col-12 col-lg-4 card-body mx-auto ">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <img src="photo/cand.jpg" alt="Admin" class="" width="120">
                    <div class="mt-3">
                      <h4 class="text-dark">21 candidats postulants</h4>
                      <br>
                     </div>
                  </div>
          </a>
               <a href=""  class=" col-12 col-lg-4 card-body mx-auto ">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <img src="photo/cand_ret.jpg" alt="Admin" class="" width="120">
                    <div class="mt-3">
                      <h4 class="text-dark">10 candidats retenus</h4>
                      <br>  
                    </div>
                  </div>
          </a>
                <a href="profilrec.php"  class=" col-12 col-lg-4 card-body mx-auto ">
                  <div class="d-flex flex-column align-items-center text-center bg-white shadow">
                    <img src="photo/profedit.jpg" alt="Admin" class="" width="120">
                    <div class="mt-3">
                      <h4 class="text-dark">profil / modifier</h4>
                      <br>  
                    </div>
                  </div>
          </a>
       
      

    </div>
    

  </div>
  <br>
  <br>



  <?php include'footerR.php'?>
</body>
</html>