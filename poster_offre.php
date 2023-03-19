<?php
session_start();  
if(!isset($_SESSION['id_recruteur'])){
    header('Location:connecter.php');   
    exit();     
}

$idR=$_SESSION['id_recruteur'];
$c_of=0;
require "bd.php";
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
 
      <style>.ph:hover{cursor:pointer ;} </style>
      <style>
      
      .listt {
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
      max-height: 200px;
      overflow: hidden;
      overflow-y: scroll;
      position: absolute;
      margin-left: 15px;
      margin-right: 14px;
      }

      .error{
        color: red;
      }
      
     
      </style>
      
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
             <style>

 .btn-light { background-color: white }
  .btn-light:hover{
    background-color: white
  }
    .btn-light:focus{
    background-color: white
  }
  
</style>
          
          <div class=" col-12  text-center mx-auto  mx-0 px-0 " >
            <form method="POST" action="" id="info_offre_form" class="text-center ">
              <!-- information sur l'offre -->
              <div id="form1" class="text-center mx-auto col-12 col-sm-8 col-lg-6" style="background-color: white">
                <h2 class="form-title titre mb-3 mt-3">Créer votre offre</h2>
                <div class="form-group text-left text-gray col-12">
                  <h5  class="mb-0">Information sur l'offre</h5>
                  <hr   class="mt-2">
                </div>
                <div class="form-group col-12 text-left">
                  <label class="mb-0 mt-1 ">Poste</label>
                  <input type="text" class="form-input form-control col-12" name="nom_offre" id="nom_offre" placeholder="Poste"/>
                  
                </div>
                
                <div class="form-group  col-12 text-left">
                  <label class="mb-0 ">description</label>
               
                  <textarea class="form-input form-control col-12" name="detail_offre" id="detail_offre" placeholder="description"></textarea>
                  
                </div>

                <div class="form-group  col-12 text-left">
                  <label class="mb-0 ">adresse</label>
                  <input type="text" class="form-input form-control col-12" name="adresse_offre" id="adresse_offre" placeholder="adresse"/>
                  
                </div>

                <div class="form-group row col-12 px-0 text-left mx-auto">
                            <div class="col-12 col-md-6 py-2">
                      <label for="ville" style="margin-bottom:0.0rem">Wilaya</label>
          <?php 
                    $reqw="SELECT * FROM wilaya";
                    $repw=mysqli_query($connection,$reqw);?>
                     
                   
                  <select name="select" class="form-control selectpicker border" data-live-search="true"  name="wilaya_offre" id="wilaya_offre" >
                   
                    <?php
                    while($row=mysqli_fetch_assoc($repw)){?>
                    <option   value="<?php echo $row["num_wilaya"];
                      ?>"><?php echo $row["nom_wilaya"];
                      ?></option> <?php  }?>
                   
                  </select>
                    </div>
                                 <?php 
                    $reqwill="SELECT * FROM wilaya";
                    $repwill=mysqli_query($connection,$reqwill);
                    if($rowwill=mysqli_fetch_assoc($repwill)){
                      $will=$rowwill['num_wilaya'];
                      } 

                      $reqdaa="SELECT * FROM daira where num_wilaya='$will'";
                      $repdaa=mysqli_query($connection,$reqdaa);
                      ?>
                      <div class="col-12 col-md-6 py-2">
                      <label for="daira" style="margin-bottom:0.0rem">Daira</label>
                     <select name="select" class="form-control daira_offre"  name="daira_offre" id="daira_offre" >
                   
                    
                       <?php
                    while($rowdaa=mysqli_fetch_assoc($repdaa)){?>
                    <option   value="<?php echo $rowdaa["num_daira"];
                      ?>"><?php echo $rowdaa["nom_daira"];
                    ?></option> <?php  }?>
                   
                  </select>
                    </div>
                </div>
                
                <div class="form-group row col-12 px-0 text-left mx-auto">
                  <div class="col-12 col-md-6 py-2">
                    <label class="mb-0 ">Date de fin de l'offre</label>
                    <input type="date" class="form-input form-control " name="date_fin_offre" id="date_fin_offre" value="<?php echo date('Y-m-d'); ?>"/>
                  </div>
                  <div class="col-12 col-md-6 py-2">
                    <label class="mb-0 ">type de travail</label>
                    <div class="">
                      <select name="niveau_langue_offre" id="niveau_langue_offre" class="form-control type_offre">
                                  <option value="Temps plein">Temps plein</option>
                                  <option value="Temps partiel">Temps partiel</option>
                                  <option value="A distance">A distance</option>
                                  
                                </select>
                    </div>
                  </div>
                </div>
                <div class="form-group  text-left">
                  <button class="btn btn-primary btn-sm ml-3 px-4 py-2 info_offre"
                  id="btf1"   type="submit"><i class="glyphicon glyphicon-ok-sign"></i>suivant</button>  
                </div>
              </div>
            </form>
            <!-- information sur le travail -->
            <div class="text-center px-0 mx-0 mx-auto col-12 col-sm-8 col-lg-6"  id="form2" style="">
              
              <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                <!-- Accordion card -->
             
                <div class="card">
                  <!-- Card header -->
                  <form method="POST" action="" id="formation_offre_form" class="text-center ">
                    <div class="card-header mb-1" role="tab" id="headingTwo1">
                      <div class="row col-12">
                        <div class="col-12">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                            aria-expanded="true" aria-controls="collapseTwo1">
                            <h6 class="mb-0 mx-auto text-left">
                            Formations
                            </h6>
                          </a>
                        </div>
                      
                      </div>
                    </div>
                    <!-- Card body -->
                    <div id="collapseTwo1" class=" row col-12 collapse show" role="tabpanel"  aria-labelledby="headingTwo1"
                      data-parent="#accordionEx1">
                      <div class="card-body">
                        
                           <div class="form-group col-12 text-left mx-0 px-0">
                      <label for="formation" style="margin-bottom:0.0rem">Domaine formation</label>
                       <?php 
                    $reqw="SELECT * FROM formation";
                    $repw=mysqli_query($connection,$reqw);?>
                     
                   
                  <select name="select" class="form-control selectpicker border domaine_formation_offre" data-live-search="true"  name="domaine_formation_offre" id="domaine_formation_offre" >
                    
                    <?php
                    while($row=mysqli_fetch_assoc($repw)){?>
                    <option   value="<?php echo $row["ref_formation"];
                      ?>"><?php echo $row["nom_formation"];
                      ?></option> <?php  }?>
                   
                  </select>
                    
                        </div>
                              <?php 
                    $reqfo="SELECT * FROM formation";
                    $repfo=mysqli_query($connection,$reqfo);
                    if($rowfo=mysqli_fetch_assoc($repfo)){
                      $fo=$rowfo['ref_formation'];
                      } 

                      $reqspec="SELECT * FROM specialite where ref_formation='$fo'";
                      $repspec=mysqli_query($connection,$reqspec);
                      ?>
                        <div class="form-group col-12 text-left mx-0 px-0">
                          <label class="mb-0 mt-1 ">Spécialité</label>
                          
                                      <input type="text" list="specialitelistoffre" class="form-control " id="specialite_offre" name="specialite_offre">
  <datalist id="specialitelistoffre" class="form-group col-12 "  >
       <?php
                    while($rowspec=mysqli_fetch_assoc($repspec)){?>
                    <option   value="<?php echo $rowspec["nom_specialite"];
                      ?>"><?php echo $rowspec["nom_specialite"];
                    ?></option> <?php  }?>
 
  </datalist>
                        </div>
                         <br>
                     <div class="col-12 mx-auto">
                          <button type="submit" class="btn btn-sm btn-primary ml-auto ajouter_formation_offre px-5 py-2" id="ajouter_for">Ajouter</button>
                        </div>
                        <br>
                        <br>
                        <div class="form-group col-12 text-left">

                          <!--table-->
                          <div class="resultt"></div>
                        </div>
                      </div>
                    </div>
                   
                    
                  </form>
                </div>
                <!-- fin Accordion card -->
                <!-- debut Accordion card -->
                <div class="card">
                  <!-- Card header -->
                  <form method="POST" action="" id="experience_offre_form" class="text-center ">
                    <div class="card-header mb-1" role="tab" id="headingTwo2">
                      <div class="row col-12">
                        <div class="col-12">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                            aria-expanded="false" aria-controls="collapseTwo21">
                            <h6 class="mb-0 mx-auto text-left">
                            Experiences proffesionnelles
                            </h6>
                          </a>
                        </div>
                      
                      </div>
                    </div>
                    <!-- Card body -->
                    <div id="collapseTwo21" class="collapse" role="tabpanel"  aria-labelledby="headingTwo21"
                      data-parent="#accordionEx1">
                      
                      <div class="card-body">
                        <div class="form-group row col-12 px-0 mx-auto">
                          <div class="form-group col-12 col-sm-7 text-left ">
                            <label class="mb-0 mt-1 ">Poste de travail</label>
                            <input type="text" class="form-input form-control col-12" name="domaine_experience_offre" id="domaine_experience_offre" placeholder="Poste de travail" list="listexperience" />
                            <?php 
                    $reqexp="SELECT * FROM experience_professionnele";
                    $repexp=mysqli_query($connection,$reqexp);?>
                            <datalist id="listexperience">
                              <?php
                    while($rowexp=mysqli_fetch_assoc($repexp)){?>
                    <option   value="<?php echo $rowexp["poste"];
                      ?>"><?php echo $rowexp["poste"];
                    ?></option> <?php  }?>
 
                            </datalist>
                            
                          </div>
                          <div class="form-group col-12 col-sm-5 text-left ">
                            <label class="mb-0 mt-1 ">Nombre d'année</label>
                            <input type="number" min="0" class="form-input form-control col-12" name="nombre_annee" id="nombre_annee" value="0" />
                            
                          </div>
                        </div>
                        <br>
                          <div class="col-12 mx auto">
                          <button type="submit" class="btn btn-sm btn-primary ml-auto ajouter_experience_offre px-5 py-2" id="ajouter_exp">Ajouter</button>
                        </div>
                        <div class="form-group  col-12 text-left">
                          <div class="resultExp"></div>
                          <!--table-->
                          
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- fin Accordion card -->
                <!-- debut Accordion card -->
                <div class="card">
                  <!-- Card header -->
                  <form method="POST" action="" id="langue_offre_form" class="text-center ">
                    <div class="card-header mb-1" role="tab" id="headingTwo3">
                      <div class="row col-12">
                        <div class="col-12">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo31"
                            aria-expanded="false" aria-controls="collapseTwo31">
                            <h6 class="mb-0 mx-auto text-left">
                            Compétences linguistiques
                            </h6>
                          </a>
                        </div>
                       
                      </div>
                    </div>
                    <!-- Card body -->
                    <div id="collapseTwo31" class="collapse" role="tabpanel"  aria-labelledby="headingTwo31"
                      data-parent="#accordionEx1">
                      <div class="card-body">
                        <div class="row col-12 px-0 mx-auto">
                          <div class="form-group col-12 col-lg-6 text-left">
                            <label class="mb-0  ">Nom de langue</label>
                          
                              <?php 
                    $reqw="SELECT * FROM competence_linguistique";
                    $repw=mysqli_query($connection,$reqw);?>
                     
                   
                  <select name="select" class="form-control  nom_langue_offre"  name="nom_langue_offre" id="nom_langue_offre" >
                    
                    <?php
                    while($row=mysqli_fetch_assoc($repw)){?>
                    <option   value="<?php echo $row["code_langue"];
                      ?>"><?php echo $row["nom_langue"];
                      ?></option> <?php  }?>
                   
                  </select>
                            
                          </div>
                          <div class="form-group col-12 col-lg-6  text-left ">
                            <div class="col-12 px-0 mx-0 ">
                              <label class="mb-0 ">Niveau langue</label>
                              <div class="">
                                <select name="niveau_langue_offre" id="niveau_langue_offre" class="form-control niveau_langue_offre">
                                  <option value="a">a</option>
                                  <option value="b">b</option>
                                  <option value="c">c</option>
                                  
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                         <div class="col-12 mx-auto">
                          <button type="button" class="btn btn-sm btn-primary ml-auto px-5 py-2 ajouter_langue_offre">Ajouter</button>
                        </div>
                        <div class="form-group col-12 text-left">
                          <div class="result_langue"></div>
                          <!--table-->
                          
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Accordion card -->
                <!-- Accordion card -->
                <div class="card">
                  <!-- Card header -->
                  <form method="POST" action="" id="competence_offre_form" class="text-center ">
                    <div class="card-header mb-1" role="tab" id="headingTwo4">
                      <div class="row col-12">
                        <div class="col-12">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo41"
                            aria-expanded="false" aria-controls="collapseTwo41">
                            <h6 class="mb-0 mx-auto text-left">
                            Autre competences
                            </h6>
                          </a>
                        </div>
                     
                      </div>
                    </div>
                    <!-- Card body -->
                    <div id="collapseTwo41" class="collapse" role="tabpanel"  aria-labelledby="headingTwo41"
                      data-parent="#accordionEx1">
                      <div class="card-body">
                        <div class="form-group col-12 text-left">
                          <label class="mb-0 mt-1 ">Nom competence</label>
                          <input type="text" class="form-input form-control col-12" name="nom_competence_offre" id="nom_competence_offre" placeholder="competences"/>
                          
                        </div>
                        <br>
                           <div class="col-12 mx-auto">
                          <button type="submit" class="btn btn-sm btn-primary ml-auto ajouter_competence_offre px-5 py-2" id="ajouter_comp">Ajouter</button>
                        </div>
                        
                        <div class="form-group col-12 text-left">
                        <div class="competence_offre"></div>
                
                          <!--table-->
                          
                        </div>
                      </div>
                    </div>
                    <!-- Accordion card -->
                    </form>
                  </div>
                
                <!-- Accordion wrapper -->
              </div>

              <a href="espacerec.php"><button class="btn btn-primary px-5 mt-2" type="button">Poster</button></a>
            </div>

        
    <br>
   <?php include("footers.php")?>

    <script src="js/main.js"></script>
    <script src="wiaya_daira_offre.js"></script>
     <script src="spec_for_offre.js"></script>
    <script>
    $(document).ready(function() {
    $("#form1").show();
    $("#form2").hide();
    $("#btf1").click(function(){
            if( document.getElementById("nom_offre").value.length==0){
                    document.getElementById("nom_offre").style.border="1px solid red"
                }; 
                     if( document.getElementById("detail_offre").value.length==0){
                    document.getElementById("detail_offre").style.border="1px solid red"
                };
                           if( document.getElementById("adresse_offre").value.length==0){
                    document.getElementById("adresse_offre").style.border="1px solid red"
                };
       if( document.getElementById("nom_offre").value.length>=3 &&
            document.getElementById("detail_offre").value.length>=3 &&
            document.getElementById("adresse_offre").value.length>=3

            ){
    $("#form1").hide();
    $("#form2").show();
    }});
    $("#bt1").click(function(){
    $("#form1").show();
    $("#form2").hide();
    });

     $("#ajouter_for").click(function(){
      if( document.getElementById("specialite_offre").value.length==0){
                    document.getElementById("specialite_offre").style.border="1px solid red"
                }; 

    });
      $("#ajouter_exp").click(function(){
      if( document.getElementById("domaine_experience_offre").value.length==0){
                    document.getElementById("domaine_experience_offre").style.border="1px solid red"
                }; 
   
    });

         $("#ajouter_comp").click(function(){
      if( document.getElementById("nom_competence_offre").value.length==0){
                    document.getElementById("nom_competence_offre").style.border="1px solid red"
                }; 

    });
       })
    </script>
    
    
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script_wilaya.js"></script>
    <script src="information_offre.js"></script>
    <script src="formation_offre.js"></script>
    <script src="experience_offre.js"></script>
    <script src="langue_offre.js"></script>
    <script src="competence_offre.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script>
  $(document).ready(function () {
   



    $('#info_offre_form').validate({
      rules: {
        nom_offre: { 
          required: true,
          minlength: 3,    
        },
          detail_offre: {  
          required: true,
          minlength: 3,  
        },
         adresse_offre: {
         
           required: true,
           minlength: 3,
          
        },
    
      },
      messages: {
        nom_offre:{
          required: 'Remplissez ce champs !',
         minlength: 'le nom de poste doit contenir au moins 3 lettres',
        },
           detail_offre:{
          required: 'Remplissez ce champs !',
         minlength: 'le description doit contenir au moins 3 lettres',
        },

          adresse_offre:{
          required: 'Remplissez ce champs !',
          minlength: 'l\'adresse doit contenir au moins 3 lettres ',
          
        
        },
          
        
      },



     
    });

$('#formation_offre_form').validate({
      rules: {
        specialite_offre: {
          required: true,
          minlength: 3,
          },
      
      },
      messages: {
        specialite_offre:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez une spécialité valable ',
        },
      
      }, 
    });

$('#experience_offre_form').validate({
      rules: {
        domaine_experience_offre: {
          required: true,
          minlength: 3,
          },
      
      },
      messages: {
        domaine_experience_offre:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez un nom de poste de travail valable ',
        },
      
      }, 
    });

$('#competence_offre_form').validate({
      rules: {
        nom_competence_offre: {
          required: true,
          minlength: 3,
      
      },
      },
      messages: {
        nom_competence_offre:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez un nom de compétence valable ',
        },
      
      }, 
    });
   

    

      

  });
</script>

    
  </body>
</html>