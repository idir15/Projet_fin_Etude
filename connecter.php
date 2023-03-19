<?php include "connecterController.php";?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Connexion </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link rel="stylesheet" href="assets/css/style.css">
 
      
    
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

    

<br>
    <div class=" row col-12">
   
           <div class="text-center mx-auto col-6">
           <form method="POST" action="" id="inscForm" class="text-center col-12 ">
            
                <h2 class="form-title titre mb-5">Connecter</h2>
              
                <div class="form-group">
                   
                    <input type="email" class="form-input form-control col-12" name="email" id="email" placeholder="Your Email"/>
                    <?php if (isset($error1['password'])): ?>
                     <p><?php echo $error1['password'] ;?> </p>
                     <?php endif ; ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input form-control col-12" name="password" id="password" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password "></span>
                    <?php if (isset($error1['password'])): ?>
                     <p><?php echo $error1['password'] ;?> </p>
                     <?php endif ; ?>
                </div>
              
            
                <div class="form-group">
                    
                    <button type="submit" name="connecter" id="submit" class="form-submit btn btn-primary">Connecter</button>
                    <p class="loginhere">
                vous n'avez pas un compte ? <a href="inscription.php" class="loginhere-link text-primary">inscrivez-vous</a> </p>
                <span class="psw"><a href="mdp_oublie.php">Mot de passe oublié ?</a></span>
                </div>
            </form></div>
            
           
           


    </div>






    <!-- ================ contact section end ================= -->
    
        <!-- Footer Start-->
        <?php include "footers.php";?>
        <!-- Footer End-->
 

        
    </body>
    
    
    </html>