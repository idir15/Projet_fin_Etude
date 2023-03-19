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
                     
                  
                    </ul>
                </div>
            </nav>
            <!-- le menu-->
            <nav class="navbar navbar-expand-lg  navbar2 ">
                <div class="container ">

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span><img style="height:30px" src="photo/Menu1.png"></span>
          </button>
                    <div class="collapse navbar-collapse " id="navbarNav" style="justify-content: center">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link   mr-5 hv cs" href="esp_rec.php" style="font-size: 22px">
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link   mr-5 hv cs" href="list_offre_rec.php" style="font-size: 22px">
                                   Recruteurs
                                </a>
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link   mr-5 hv cs" href="liste_candidature.php" style="font-size: 22px ">
                                    Candidats
                                </a>
                            </li>
                                 <li class="nav-item ">
                                <a class="nav-link   mr-5 hv cs" href="#" style="font-size: 22px ">
                                    Statistiques
                                </a>
                 
                             <li class="nav-item ">
                                <a class="nav-link   mr-5 hv cs  " href="#" style="font-size: 22px ">
                                  Paramétres
                                </a>
                            </li>
                         
                             <li class="nav-item ">
                                <a href="logout.php" class="nav-link   mr-5 hv  cs" style="font-size: 22px ">
                                       Déconnexion
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