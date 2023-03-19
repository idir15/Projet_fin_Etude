<?php
session_start();  
if(!isset($_SESSION['id_recruteur'])){
    header('Location:connecter.php');   
    exit();     
}

$idR=$_SESSION['id_recruteur'];
$enpr=$_SESSION['nom_entreprise'] ;
$adr=$_SESSION['adresse'];
$eml=$_SESSION['email'];
$nom=$_SESSION['nom'];
$pnom=$_SESSION['prenom'] ;


$c_of=0;
require "bd.php";
if(isset($_POST["save"])){

$FirstName = mysqli_real_escape_string($connection, $_POST["nom"]);
$LastName = mysqli_real_escape_string($connection, $_POST["prenom"]);
$Adresse = mysqli_real_escape_string($connection, $_POST["adresse"]) ;
$nom_entreprise = mysqli_real_escape_string($connection, $_POST["nom_entreprise"]) ;

          $query_mod = "UPDATE recruteur SET nom ='$FirstName' , prenom = '$LastName', adresse = '$Adresse', nom_entreprise ='$nom_entreprise' WHERE id_recruteur ='$idR' ";
         $a= mysqli_query($connection, $query_mod);
         


          
  
  
  } ?>


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
 
      <style>.ph:hover{cursor:pointer ;} </style>
    
    
      
      <div class="site-wrap">
        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
          </div> <!-- .site-mobile-menu -->
          
          
         <?php include("headerR.php")?>
      
          <br>
<div class="container row col-md-8 mx-auto rounded bg-white mt-5 mb-5">
    <div class="row col-12">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle " src="photo/avapro.jpg" class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span>
            </div>
        </div>
        <div class="row col-md-7 border-right mx-auto ">
            
             <form class="col-12 px-0 mx-auto mx-0" method="post">
                <div class="col-12 col-md-10 mx-auto mx-0 px-0 mt-3"><label class="mb-0 mt-3">Nom</label><input type="text" name='nom' class="form-control" placeholder="Nom" value="<?=$nom ?> "></div>
   
                   <div class="col-12 col-md-10 mx-auto mx-0 px-0 mt-3"><label class="mb-0 ">Prénom</label><input type="text" name='prenom' class="form-control" placeholder="Prénom" value="<?=$pnom ?>"></div>
                    

                  
                   <div class="col-12 col-md-10 mx-auto mx-0 px-0 mt-3"><label class="mb-0 ">Adresse</label><input type="text" class="form-control" placeholder="Adresse" value="<?=$adr ?>" name='adresse'></div>
                  <div class="col-12 col-md-10 mx-auto mx-0 px-0 mt-3"><label class="mb-0 ">Nom d'entreprise</label><input type="text" class="form-control" name='nom_entreprise' placeholder="Nom d'entreprise" value="<?=$enpr ?>"></div>
                
             
             
        
               <div class="col-12 mt-5 text-center mb-4"><button class="btn btn-primary profile-button" type="submit" name="save">Save Profile</button></div>
                 </form>
            </div>
        </div>
     
</div>
   <?php include("footers.php")?>


    


    
  </body>
</html>