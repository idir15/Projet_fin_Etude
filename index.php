<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
      <link rel="stylesheet" href="css/style.css">

    
    
    
    
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    .paging-nav {
    text-align: center;
    padding-top: 2px;
    }
    
    .paging-nav a {
    margin: auto 3px;
    margin-top: 50px;
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    border: 1px solid #ccc;
    }
    
    .paging-nav .selected-page {
    background: #26baee;
    font-weight: bold;
    color: white;
    }
    
  
    </style>
    
  </head>
  <body>
    
  <!-- .site-mobile-menu -->
        
        

        <?php include("header.php") ?>
                <div class=" d-sm-inline d-none ">
      <!--slider-->
      <div style="width:100%;">
        <div class="slider">
                  
            <div class=" row col-12 mx-0 px-0 row-custom align-items-center">
              <div class=" col-md-9 mx-auto  row-custom align-items-center">
                <h1 class="text-white text-center  " style=" font-size: 50px;font-style: oblique; font-family: cursive; margin-top: 70px ">Bienvenue au site de recrutement <br> TORecruit </h1>
                
                <div class="job-search  ">

                  <div class="tab-content bg-white p-4 rounded " style="opacity:80% " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                      <form action="#" method="post">
                        <div class="row col-12 mx-0 px-0">
                          <div class="col-md-5 col-lg-5 mb-3 mb-lg-0 ">
                          <input type="text" class="form-control" placeholder="Domaine de travail" id="domaine_travail" name="domaine_travail">
                          </div>
                          <div class="col-12 col-md-5 col-lg-5 mb-3 mb-lg-0 ">
                             <input type="text" class="form-control" placeholder="Poste de travail" id="poste_travail" name="poste_travail">  
                          </div>
                          
                          <div class="text-center mx-auto col-6 col-md-2 col-lg-2 mb-3 mb-lg-0 mx-0 px-0">
                            <button type="submit" class="btn btn-primary " >Rechercher</button>
                           
                          </div>
                        </div>
                      </form>
                    </div>
                    
                  
                   
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      
    </div>

    <div class="d-sm-none d-inline">
      
               <div class="row col-12 mx-0 px-0 row-custom align-items-center">
              <div class=" col-md-9 mx-auto mx-0 px-0  row-custom align-items-center">
                
                <div class="job-search  ">

                  <div class="tab-content bg-white p-4 rounded " style="opacity:90% " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                      <form action="#" method="post">
                        <div class="row col-12 mx-0 px-0">
                          <div class="col-md-5 col-lg-5 mb-3 mb-lg-0 px-0 mx-0 ">
                            <input type="text" class="form-control" placeholder="Domaine de travail" id="domaine_travail" name="domaine_travail">
                          </div>
                          <div class="col-12 col-md-5 col-lg-5 mb-3 mb-lg-0 px-0 mx-0 ">
                            <input type="text" class="form-control" placeholder="Poste de travail" id="poste_travail" name="poste_travail">
                          </div>
                          
                          <div class="text-center mx-auto col-6 col-md-2 col-lg-2 mb-3 mb-lg-0 mx-0 px-0">
                            <button type="submit" class="btn btn-primary " >Rechercher</button>
                           
                          </div>
                        </div>
                      </form>
                    </div>
                    
                  
                   
                  </div>
                </div>
              </div>
            </div>
          
    </div>

        
        
        <div class="site-section bg-light mt-4">
          <div class="">
            <div class="row col-12 container text-center mb-5">
              <div class="col-md-7 col-12 " data-aos="fade">
                <h2 class="font-weight-bold text-black">Offres récentes</h2>
              </div>
              <div class="col-md-2 col-12" data-aos="fade" data-aos-delay="200">
                <a href="#" class="btn btn-primary py-3 btn-block"><span class="h5">+</span>Poster une offre</a>
              </div>
            </div>
            
            
            
              <?php
                    require  "bd.php";
                    if ($connection)
                    {
                    
                    
                    $req="SELECT  o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM recruteur r, offre_emploi o, wilaya w, daira d WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya order BY o.date_d ASC";
                    $rep = mysqli_query($connection,$req);
                    
                    }
                    else
                    {
                    echo".................";
                    }
                    ?>
            
            
            <table id="tableData" class="col-12 col-lg-10 mx-auto ">
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
                      <a href="detail_offre.php?id=<?= $row['code_offre'] ?>">
                      <div class="col-md-12">
                        
                        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                          <div class="mb-4 mb-md-0">
                            <div class="job-post-item-header d-block d-md-flex align-items-center">
                              <h2 class="mr-3 text-black h4"><?php echo $row['poste']; ?></h2>
                              <div class="badge-wrap">
                                <span class="bg-warning text-white badge py-2 px-4"><?php echo $row['typeTravail']; ?></span>
                              </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                              <div class=""><span class="fl-bigmug-line-portfolio23"></span> <a href="#"><?php echo $row['nom_entreprise']; ?>&emsp;</a></div>
                              <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $row['nom_daira'] .', '.$row['nom_wilaya']; ?></span></div>
                            </div>
                          </div>
                          <div class="ml-auto">
                            
                            <a href="detail_offre.php?id=<?= $row['code_offre'] ?>" class="btn px-4 py-2 text-white" style="background-color:#244cb3;" >Detail</a>
                          </div>
                        </div>

                      </div>
                      </a>
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
            
          </div>
        </div>
        
        
        
      </div>
    </div>
    
    
    <div class="site-section">
      <div class="container">
        <div class="row col-12 justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Pourquoi TO<strong>Recruit</strong> </h2>
          </div>
        </div>
        <div class="row col-12 hosting">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                </div>
                <h2 class="h5">Informatique</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-big104"></span>
                </div>
                <h2 class="h5">Santé</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
                </div>
                <h2 class="h5">Marketing</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
                </div>
                <h2 class="h5">Ingenierie</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-clipboard68"></span>
                </div>
                <h2 class="h5">Juridique</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5">Logistique</h2>
              </div>
              <div class="unit-3-body">
                <p></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    
    
    
    <?php include("footers.php")?>
  </div>
  
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
  async defer></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script type="text/javascript" src="paging.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $('#tableData').paging({
  limit: 5
  });
  });
  </script>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
  })();
  </script>
  
</body>
</html>