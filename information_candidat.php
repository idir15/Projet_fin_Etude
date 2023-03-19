<?php
if(!isset($_SESSION)){
session_start();
}
include "bd.php";
$n  = $_SESSION['nom'];
$p  = $_SESSION['prenom'];
$eml= $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
      <link rel="stylesheet" href="css/style.css">
      
    </head>
    <body>
      <style>
      .ph:hover {
      cursor: pointer;
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
          <?php include("headerC.php")?>
          <style>
          .btn-light { background-color: white }
          .btn-light:hover{
          background-color: white
          }
          .btn-light:focus{
          background-color: white
          }
          
          </style>
          <hr>
          <div class="row col-12 px-0 mx-0" id="Form1">
            <div class="col-12 text-center">
              <div class="col-12 col-lg-9">
                
              
                <h4 data-toggle="tab" class=" " style=" font-family: 'calibri', 'Times', 'serif'; color: darkblue">Informations personnelles  </h4>
                
              </div>
           <hr>
              
            </div>

            <div class=" col-12 col-sm-3 mb-5">
              
              
              
              <form id="submitForm">
                <div class="form-group mb-5 ">
                  <div class="custom-file text-center">
                    <input type="file" class="custom-file-input d-none" name="image" id="image">
                    <label for="image" id="imageView" class=" text-white ph mt-4"> <img src="images/userprofile.png"
                      class="avatar d-none d-md-inline mt-2" alt="avatar" style=" float: none;
                      
                      width: 190px;
                      height: 190px; ">
                      <img src="https://mongenealogiste.com/images/userprofile.png"
                      class="avatar rounded-circle d-md-none d-inline mb-5 " alt="avatar" style="float: none;
                      
                      width: 60%;
                      height: 60%;">
                    </label>
                  </div>
                </div>
              </div>
              </form>
              </hr><br>
          <div class="col-12 col-sm-9 ">
           
            <div class="tab-pane ">
              <br>
              <form action="" id="contactform" method="post">
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="first_name" style="margin-bottom:0.0rem">Prenom</label>
                    <input type="text" class="form-control " name="first_name" id="first_name" value="<?=$p?>"
                    title="enter your first name if any.">
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                    <label for="last_name" style="margin-bottom:0.0rem">Nom</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?=$n?>"
                    title="enter your last name if any.">
                  </div>
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="sexe" style="margin-bottom:0.6rem">sexe</label>
                    <div class="form-group label-floating ">
                      <input type="radio" id="sexe" name="sexe" value="male" checked="checked">
                      <label for="male">Male</label>&emsp;
                      <input type="radio" id="sexe" name="sexe" value="female">
                      <label for="female">Female</label>
                    </div>
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                    <label for="date" style="margin-bottom:0.0rem">Date de naissance</label>
                    <input type="date" class="form-control" name="date_naissance" id="date_naissance" value="1950-01-01">
                  </div>
                </div>
                <div class="form-group row col-12">
                   <div class="col-12 col-md-5">
                    <label for="phone" style="margin-bottom:0.0rem">N° Téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="N° Téléphone"
                    title="enter your phone number if any.">
                  </div>
                   &emsp;
                  <div class="col-12 col-md-5  ">
                    <label for="adresse" style="margin-bottom:0.0rem">Adresse</label>
                    <input type="text" class="form-control" st name="adresse" id="adresse" placeholder="adresse"
                    title="entrer votre adresse.">
                  </div>
                 
                  
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="ville" style="margin-bottom:0.0rem">Wilaya</label>
                    <?php
                    $reqw="SELECT * FROM wilaya";
                    $repw=mysqli_query($connection,$reqw);?>
                    
                    
                    <select name="select" class="form-control selectpicker border" data-live-search="true"  name="wilaya" id="wilaya" >
                    
                      <?php
                      while($row=mysqli_fetch_assoc($repw)){?>
                      <option   value="<?php echo $row["num_wilaya"];
                        ?>"><?php echo $row["nom_wilaya"];
                      ?></option> <?php  }?>
                      
                    </select>
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                      <?php 
                    $reqwill="SELECT * FROM wilaya";
                    $repwill=mysqli_query($connection,$reqwill);
                    if($rowwill=mysqli_fetch_assoc($repwill)){
                      $will=$rowwill['num_wilaya'];
                      } 

                      $reqdaa="SELECT * FROM daira where num_wilaya='$will'";
                      $repdaa=mysqli_query($connection,$reqdaa);
                      ?>
                    <label for="daira" style="margin-bottom:0.0rem">Daira</label>
                    <select name="select" class="form-control daira "  name="daira" id="daira" >
                      
                      <?php
                    while($rowdaa=mysqli_fetch_assoc($repdaa)){?>
                    <option   value="<?php echo $rowdaa["num_daira"];
                      ?>"><?php echo $rowdaa["nom_daira"];
                    ?></option> <?php  }?>
                      
                    </select>
                  </div>
                </div>
              
                <div class="form-group row col-12">
                  <button class="btn btn-primary btn-sm ml-3 px-4 py-2 ajouterinf" id="to_form2" type="submit" name="Informations_personnelles">suivant</button>
                                  </div>
              </form>
              
              <hr>
              <div class="result">
              </div>
            </div>
            <!--/tab-pane-->
          </div>
        </div>
        <!-- form2-->
        <div class="row col-12" id="Form2">
          <div class="col-12 col-md-9 ">
            <div class="tab-pane">
              <ul class="nav nav-tabs">
                <li>
                  <p data-toggle="tab" class="text-danger">&emsp;Formation </p>
                </li>
              </ul>
              <br>
              <form method="post" id="formation_form">
                <div class="form-group row col-12">
                  
                  <div class="col-12 col-md-6 py-2">
                    <label for="formation" style="margin-bottom:0.0rem">Formation</label>
                    <?php
                    $reqw="SELECT * FROM formation";
                    $repw=mysqli_query($connection,$reqw);
                    
                    ?>
                    
                    
                    
                    <select  class="form-control selectpicker border domaine_formation" data-live-search="true"  name="domaine_formation" id="domaine_formation" >
                      
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
                  <div class="col-12 col-md-6 py-2">
                    <label for="specialite" style="margin-bottom:0.0rem">Spécialité</label>
                    <input type="text" list="specialitelist" class="form-control" id="specialite" name="specialite">
                    <datalist id="specialitelist" >
                    <?php
                    while($rowspec=mysqli_fetch_assoc($repspec)){?>
                    <option   value="<?php echo $rowspec["nom_specialite"];
                      ?>"><?php echo $rowspec["nom_specialite"];
                    ?></option> <?php  }?>
                    
                    </datalist>
                  </div>
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-6 py-2">
                    <label for="etablissement" style="margin-bottom:0.0rem">Etablissement formation</label>
                    <input type="text" class="form-control" name="etablissement" id="etablissement"
                    placeholder="etablissement" title="etablissement">
                  </div>
                  <div class="col-12 col-md-6 py-2">
                    <label for="date_d_f" style="margin-bottom:0.0rem">Date de début</label>
                    <input type="date" class="form-control" id="date_d_f" name="date_d_f" value="2000-01-01">
                  </div>
                  
                </div>
                <div class="form-group row col-12">
                  
                  <div class="col-12 col-md-6">
                    <label for="date_f_f" style="margin-bottom:0.0rem">Date de fin</label>
                    <input type="date" class="form-control" id="date_f_f" name="date_f_f" value="2000-01-01">
                  </div>
                </div>
                <div class="form-group row col-12">
                  <button class="btn btn-primary btn-sm px-4 py-2 ml-3 mr-3 formation_ajouter" id="formation_ajouter" type="submit" name="formation_ajouter">Ajouter formation</button>
                  <button class="btn btn-primary btn-sm px-4 py-2" type="button" id="to_form3"
                  name="formationbtn">Suivant</button>
                  
                </div>
              </form>
              
              <hr>
            </div>
            <!--/tab-pane-->
          </div>
          <div class="col-12 col-md-3 px-0 mx-0">
            <br>
            
            <div class="resF"></div>
          </div>
        </div>
        <!-- form3-->
        <div class="row col-12" id="Form3">
          <div class="col-12 col-md-9">
            <ul class="nav nav-tabs">
              <li>
                <p data-toggle="tab" class="text-danger">&emsp;Experiences professionnelles &emsp;</p>
              </li>
            </ul>
            <div class="tab-pane">
              <br>
              <form class="form" action="##" method="post" id="experience_form">
                <div class="form-group row col-12">
                  <div class="col-12 col-md-6">
                    <label for="poste_de_travail" style="margin-bottom:0.0rem">Poste</label>
                    <input type="text" class="form-control" name="poste_de_travail" id="poste_de_travail"
                    placeholder="Poste" title="poste de travail" list="listexperience">

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

                  <div class="col-12 col-md-6">
                    <label for="entreprise" style="margin-bottom:0.0rem">Entreprise</label>
                    <input type="text" class="form-control" name="entreprise" id="entreprise" placeholder="Entreprise"
                    title="Entreprise">
                  </div>
                </div>
                <div class="form-group row col-12 ">
                  <div class="col-12 col-md-6 py-2">
                    <label for="date_d_t" style="margin-bottom:0.0rem">Date de début</label>
                    <input type="date" class="form-control" id="date_d_e" name="date_d_e" value="2000-01-01">
                  </div>
                  <div class="col-12 col-md-6 py-2">
                    <label for="date_f_t" style="margin-bottom:0.0rem">Date de fin</label>
                    <input type="date" class="form-control" name="date_f_e" id="date_f_e" value="2000-01-01">
                  </div>
                </div>
                <div class="form-group row col-12">
                  
                  <button class="btn btn-primary btn-sm px-4 py-2 ml-3 mr-3 ajouter_experience" id="ajouter_experience"
                  type="submit" name="ajouter_experience">Ajouter experience</button>
                  <button class="btn btn-primary btn-sm px-4 py-2" id="to_form4" type="button"><i class="glyphicon glyphicon-ok-sign"></i>suivant</button>
                </div>
              </form>
              
              
              <hr>
            </div>
          </div>
          
          <div class="col-12 col-md-3 px-0 mx-0">
            <br>
            <div class="resEXP"></div>
          </div>
        </div>
        <!-- form4-->
        <div class="row col-12 " id="Form4">
          <div class="col-12 col-md-6 mx-auto   ">
            <ul class="nav nav-tabs">
              <li>
                <p data-toggle="tab" class="text-danger mt-3">&emsp;Langues &emsp;</p>
              </li>
              
            </ul>
            <div class="tab-pane">
              <br>
              <form class="form" action="##" method="post" id="langue_Forme" >
                <div class="form-group row col-12">
                  <div class="col-12 col-md-10">
                    <label for="formation" style="margin-bottom:0.0rem">Langue</label>
                    <div class="select-formation">
                      <select id="nom_langue" name="nom_langue" class="form-control nom_langue">
                        
                        <option value="francais">francais</option>
                        <option value="anglais">anglais</option>
                        <option value="arab">arab</option>
                        <option value="russe">russe</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-10">
                    <label for="formation" style="margin-bottom:0.0rem">Niveau</label>
                    <div class="select-formation">
                      <select  id="niveau_langue" name="niveau_langue" class="form-control niveau_langue ">
                        
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="form-group row col-12">
                  
                  
                  <div class="col-12 col-md-6">
                    <button type="button" class="btn btn-primary ajouter_langue" >Ajouter</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="afficherLangue"></div>
            
          </div>
        </div>
        <!-- form5-->
        <div class="row col-12 " id="Form5">
          <div class="col-12 col-md-6 mx-auto">
            <ul class="nav nav-tabs">
              <li>
                <p data-toggle="tab" class="text-danger mt-3">&emsp;Autre compétences &emsp;</p>
              </li>
            </ul>
            <div class="tab-pane">
              <br>
              <form class="form" action="##" method="post" id="autre_competenceForm" >
                <div class="form-group row col-12">
                  <div class="col-12 col-md-10">
                    <label for="autre_competence" style="margin-bottom:0.0rem">Autre compétence</label>
                    <input type="text" class="form-control" name="nom_competence" id="nom_competence" placeholder="autre competence"
                    title="vos competence">
                  </div>
                </div>
                <div class="form-group row col-12">
                  
                  <div class="col-12 col-md-6">
                    <button type="submit" class="btn btn-primary ajouter_comp">Ajouter</button>
                  </div>
                </div>
                
                
                
              </form>
              
              
              
              
              
            </div>
            <div class="form-group row col-12   ">
              
              <div class="col-12 col-md-6 text-center mx-auto">
                <a href="espace_cand.php" class="btn btn-secondary py-2 px-3">Valider</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="resCompt"></div>
            
          </div>
        </div>
         <hr>
        <?php include("footers.php")?>
        
        <script src="script_wilaya.js"></script>
        <script src="information_candidat.js"></script>
        <script src="spec_for.js"></script>
        <script src="js/main.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
         <script>
  $(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$/i.test(value);
}, "Letters only please");
    $('#contactform').validate({
      rules: {
        first_name: {
          lettersonly: true,  
          required: true,
          minlength: 3,
          
         
        },
          last_name: {
          lettersonly: true,  
          required: true,
          minlength: 3,
          
         
        },
         phone: {
          number: true, 
          required: true,
           minlength: 10,
           maxlength: 10,
          
        },
          adresse: { 
          required: true, 
          minlength: 4,
        },
       
      },
      messages: {
        first_name:{
          required: 'Remplissez ce champs !',
         lettersonly : 'Saisissez un prenom valable',
         minlength: 'le prénom doit contenir au moins 3 lettres',
        },
           last_name:{
          required: 'Remplissez ce champs !',
         lettersonly : 'Saisissez un nom valable',
         minlength: 'le nom doit contenir au moins 3 lettres',
        },

          phone:{
          required: 'Remplissez ce champs !',
          number: 'ce champs doit contenir que des chiffres',
          minlength: 'Entrz un numero valable ',
          maxlength: 'Entrz un numero valable ',
          
        
        },
          adresse:{
          required: 'Remplissez ce champs !',
          minlength: 'ce champs doit contenir au moins 4 caractères'
         
        
        },
     
        
      },
     
    });

      $('#formation_form').validate({
      rules: {
        specialite: {
          required: true,
          minlength: 3,
          },
          etablissement: { 
          required: true,
          minlength: 3,
        },
      },
      messages: {
        specialite:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez une spécialité valable ',
        },
           etablissement:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez un nom d\'etablissement valable',
        },  
      }, 
    });

      $('#experience_form').validate({
      rules: {
        poste_de_travail: {
          required: true,
          minlength: 3,
          },
          entreprise: { 
          required: true,
          minlength: 3,
        },
      },
      messages: {
        poste_de_travail:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez une spécialité valable ',
        },
           entreprise:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez un nom d\'entreprise valable',
        },  
      }, 
    });

      $('#autre_competenceForm').validate({
      rules: {
        nom_competence: {
          required: true,
          minlength: 3,
      
      },
      },
      messages: {
        nom_competence:{
          required: 'Remplissez ce champs !',
         minlength: 'Entrez un nom de compétence valable ',
        },
      
      }, 
    });

  });
</script>

        <script>
        $(document).ready(function () {
        $("#Form1").show();
        $("#Form2").hide();
        $("#Form3").hide();
        $("#Form4").hide();
        $("#Form5").hide();

          

            $("#to_form2").click(function(){
                    if( document.getElementById("first_name").value.length==0){
                    document.getElementById("first_name").style.border="1px solid red"
                }; 
                     if( document.getElementById("last_name").value.length==0){
                    document.getElementById("last_name").style.border="1px solid red"
                };
                           if( document.getElementById("phone").value.length==0){
                    document.getElementById("phone").style.border="1px solid red"
                };
                           if( document.getElementById("adresse").value.length==0){
                    document.getElementById("adresse").style.border="1px solid red"
                };
                  if( (document.getElementById("first_name").value.length>=3 && 
                  document.getElementById("first_name").value.match(/^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$/) ) &&
                  (document.getElementById("last_name").value.length>=3 && 
                  document.getElementById("last_name").value.match(/^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$/) ) &&
                  (document.getElementById("adresse").value.length>=4) &&
                  (document.getElementById("wilaya").value.length>0) &&
                  (document.getElementById("daira").value.length>0) &&
                  (document.getElementById("phone").value.length==10 && document.getElementById("phone").value.match("^[0-9]+$"))


                  ){
                $("#Form1").hide();
                $("#Form2").show();
                $("#Form3").hide();
                $("#Form4").hide();
                $("#immg").hide()
                
              }});
               $("#formation_ajouter").click(function(){
          if( document.getElementById("specialite").value.length==0 ){
               document.getElementById("specialite").style.border="1px solid red"
          };
           if( document.getElementById("etablissement").value.length==0 ){
               document.getElementById("etablissement").style.border="1px solid red"
          };
        });

                  $("#ajouter_experience").click(function(){
          if( document.getElementById("poste_de_travail").value.length==0 ){
               document.getElementById("poste_de_travail").style.border="1px solid red"
          };
           if( document.getElementById("entreprise").value.length==0 ){
               document.getElementById("entreprise").style.border="1px solid red"
          };
        });
                             $("#ajouter_experience").click(function(){
          if( document.getElementById("nom_competence").value.length==0 ){
               document.getElementById("nom_competence").style.border="1px solid red"
          };
        
        });

        $("#to_form3").click(function () {
        $("#Form1").hide();
        $("#Form2").hide();
        $("#Form3").show();
        $("#Form4").hide();
        $("#Form5").hide();
        });
        $("#to_form4").click(function () {
        $("#Form1").hide();
        $("#Form2").hide();
        $("#Form3").hide();
        $("#Form4").show();
        $("#Form5").show();
        });
        $("#bt1").click(function () {
        $("#Form1").show();
        $("#immg").show();
        $("#Form2").hide();
        $("#Form3").hide();
        $("#Form4").hide();
        $("#Form5").hide();
        });
        $("#bt2").click(function () {
        $("#Form1").hide();
        $("#Form2").show();
        $("#Form3").hide();
        $("#Form4").hide();
        $("#Form5").hide();
        });
        $("#bt3").click(function () {
        $("#Form1").hide();
        $("#Form2").hide();
        $("#Form3").show();
        $("#Form4").hide();
        $("#Form5").hide();
        });
        })
        </script>
        <script>
          $(document).ready(function(){
          $("#submitForm").on("change", function(){
          var formData = new FormData(this);
          $.ajax({
          url  : "upload.php",
          type : "POST",
          cache: false,
          contentType : false, // you can also use multipart/form-data replace of false
          processData: false,
          data: formData,
          success:function(response){
          $("#preview").show();
          $("#imageView").html(response);
          $("#image").val('');
          alert("Image uploaded Successfully");
          }
          });
          });
          });
          </script>
        <script src="information_candidat.js"></script>
        <script src="experience.js"></script>
        <script src="formation.js"></script>
        <script src="competence.js"></script>
        <script src="langue.js"></script>
        
        
      </body>
    </html>