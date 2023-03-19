<?php include("inscriptionController.php")?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>inscription </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

   
        <link rel="stylesheet" href="assets/css/style.css">
 

        
</head>

<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">
     
    <header>
            
            
            <!--le premier meneu header-->
            <nav class=" navbar navbar-expand navbar1 overflow-hidden "style="height:80px;">
              <div class="container">
                <a class="navbar-brand  " href="index.php"><img class="logo"src="photo/capture.png"></a>
                <ul class="navbar-nav d-flex">
                  <li class="nav-item " >
                    <!--  MODAL Nous contacter-->
                    <a class="nav-link d-none d-md-inline d-lg-inline d-xl-inline  mr-5" style="color:#365390"  href="" >Nous Contacter</a>
                    
                    
                    
                    
                    
                  </li>
                 
                </ul>
              </div>
            </nav>
            <!-- le menu-->
            <nav class="navbar navbar-expand-md  navbar2 " >
              <div class="container ">
                
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span><img style="height:30px" src="photo/Menu1.png"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
                  <ul class="navbar-nav " >
                    <li class="nav-item ">
                      <a class="nav-link   mr-5 hv" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link   mr-5 hv" href="list_offre.php">Offres</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link   mr-5 hv" href="about.php">A propos</a>
                    </li>
                    
                    <li class="nav-item dropdown  ">
                      <a href="contact.html" class="nav-link mr-5 hv " >contact</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </nav>
            
          </header>
   <br>
    <script src="js/main.js"></script>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script type="text/javascript">
  // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>



        <!-- Header End -->
    

    <!-- ================ contact section start ================= -->
   
  

    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="row col-12 mx-auto mx-0 px-0">
   
           <div class="text-center mx-auto col-12 col-sm-8 col-lg-6 mx-0 px-0 bg-white mt-3 mb-5">
           <form method="POST" action="" id="inscForm" class="text-center col-12 mx-auto mx-0 px-0">
            
                <h2 class="form-title titre mb-5">Create account</h2>
                <div class="form-group col-12 col-lg-11 mx-auto"> 
                    <input type="text" class="form-input form-control col-12" name="name" id="name" placeholder="Votre nom"/>
                     <?php if (isset($errors['name'])): ?>
                     <p><?php echo $errors['name'] ;?> </p>
                     <?php endif ; ?>
                </div>
                <div class="form-group col-12 col-lg-11 mx-auto ">
                    <input type="text" class="form-input form-control col-12" name="prenom" id="prenom" placeholder="Votre prénom"/>
                     <?php if (isset($errors['prenom'])): ?>
                     <p><?php echo $errors['prenom'] ;?> </p>
                     <?php endif ; ?>
                </div>
                <div class="form-group col-12 col-lg-11 mx-auto">
                    <input type="email" class="form-input form-control col-12" name="email" id="email" placeholder="Votre Email"/>
                    <?php if (isset($errors['email'])): ?>
                     <p><?php echo $errors['email'] ;?> </p>
                     <?php endif ; ?>
                </div>
                <div class="form-group col-12 col-lg-11 mx-auto">
                    <input type="password" class="form-input form-control col-12" name="password" id="password" placeholder="Mot de passe"/>
                    <span toggle="#password" class="toggle-password "></span>
                    <?php if (isset($errors['password'])): ?>
                     <p><?php echo $errors['password'] ;?> </p>
                     <?php endif ; ?>
                </div>
                     <div class="form-group col-12 col-lg-11 mx-auto">
                    <input type="password" class="form-input form-control col-12" name="password1" id="password1" placeholder="Confirmer votre mot de passe">
                    <?php if (isset($errors['password'])): ?>
                     <p><?php echo $errors['password'] ;?> </p>
                     <?php endif ; ?>
                </div>
                <div class="form-group text-left col-12 col-lg-11 mx-auto">
                   <input type="radio" id="candidat" name="role" value="candidat" checked="checked">
                      <label for="male">candidat</label>&emsp;
                      <input type="radio" id="recruteur" name="role" value="recruteur">
                      <label for="female">Recruteur</label>   
                  </div>
                  <div class=" form-group col-12 col-lg-11 mx-auto" id="nom_entreprise">
                    <input type="text" class="form-control " name="nom_entreprise"  placeholder="Nom d'entreprise" title="entrer le nom de votre entreprise.">
                  </div>
      
                <div class="text-left form-group col-12 col-lg-11 mx-auto">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term " />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les termes de contrat <a href="#" class="text-primary"></a></label>
                </div>

                <div class=" form-group col-12 col-lg-11 mx-auto">
                    <button type="submit" name="inscrire" id="submit" class="form-submit btn btn-primary">Inscrire</button>
                     <p class="loginhere">
                avez vous déja un compte ? <a href="connecter.php" class="loginhere-link text-primary">connectez vous</a> </p>
                </div>

            </form></div>
            
           
           


    </div>

     



    <!-- ================ contact section end ================= -->
    
        <!-- Footer Start-->
        <?php include "footers.php";?>
        <!-- Footer End-->
 


         <script>
                $(document).ready(function() {
                    $("#nom_entreprise").hide();
                $("#recruteur").click(function(){
                $("#nom_entreprise").show();});
                $("#candidat").click(function(){
                $("#nom_entreprise").hide();});
                })
            </script>

        
    </body>
    
    </html>