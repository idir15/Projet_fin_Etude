<?php
if(!isset($_SESSION)){
  session_start();
}

$p=$_SESSION['prenom'];
$n=$_SESSION['nom'];
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylee.css">
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <header>


            <!--le premier meneu header-->
            <nav class=" navbar navbar-expand navbar1  " style="height:83px;">
                <div class="container">

                    <a class="navbar-brand  " href="esp_rec.php"><img class="logo" src="photo/capture.png"></a>
                    <ul class="navbar-nav d-flex">
                        <li class="nav-item ">
                            <!--  MODAL Nous contacter-->
                            <a class="nav-link d-none d-md-inline d-lg-inline d-xl-inline  mr-5" style="color:#365390" href="contact.html">Nous Contacter</a>





                        </li>
                        <li class="nav-item">
                            <label class=" mr-5 d-none d-md-inline d-lg-inline d-xl-inline  " style="margin-top: 7px">|</label>
                        </li>
                        <li class="nav-item">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown mr-3">

                                    <a href="#" class="nav-link dropdown-toggle nav-link d-inline" style="color:#365390" data-toggle="dropdown">
                                    <?php echo $p.' '.' '.$n; ?><i class="fas fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu">

                                        <a href="#" class="dropdown-item">
                                            <i class="fas fa-cog"></i> Paramétres
                                        </a>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="fas fa-user-times"></i> Déconnexion
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </div>
            </nav>
            <!-- le menu-->
            <nav class="navbar navbar-expand-md  navbar2 ">
                <div class="container ">

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span><img style="height:30px" src="photo/Menu1.png"></span>
          </button>
                    <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link   mr-5 hv" href="esp_rec.php" style="font-size: 22px">
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link   mr-5 hv " href="list_offre_rec.php" style="font-size: 22px">
                                    Mes Offres
                                </a>
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link   mr-5 hv d-none d-md-block  " href="liste_candidature.php" style="font-size: 22px ">
                                    Candidature
                                </a>
                            </li>
                                 <li class="nav-item ">
                                <a class="nav-link   mr-5 hv d-md-none  tc" href="#" style="font-size: 22px ">
                                    Toutes les candidatures
                                </a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link   mr-5 hv dropdown-toggle d-md-none" data-toggle="dropdown" href="#" style="font-size: 22px">
                                    Candidats préselectionnés
                                </a>
                                   <div class="dropdown-menu  " style="background:#4f68b1;border: none" >
                  <ul class="list-unstyled " >
                    <li><a href="#" class="dropdown-item hvlist cr">Conditions requises satisfaites</a></li>
                    <li><a href="#" class="dropdown-item hvlist ms">Manque de spécialités</a></li>
                    <li><a href="#" class="dropdown-item hvlist me">Manque d'experiences</a></li>
                    <li><a href="#" class="dropdown-item hvlist ml">Manque de langues</a></li>
                    <li><a href="#" class="dropdown-item hvlist mc">Manque de compétences</a></li>
                    
                    

                  </ul>
                </div>
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link   mr-5 hv d-md-none cs  " href="#" style="font-size: 22px ">
                                    Candidats selectionnés
                                </a>
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



    </body>

    </html>