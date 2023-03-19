<?php include("information_candidatController.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">
    </head>
    <body>
      <style>.ph:hover{cursor:pointer ;} </style>
      <style>
      *{ box-sizing: border-box; }
      body {
      font: 16px Arial;
      }
      .autocomplete {
      /*the container must be positioned relative:*/
      position: relative;
      display: inline-block;
      }
      .autocomplete-items {
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
      .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: cyan;
      border-bottom: 1px solid #d4d4d4;
      
      }
      .autocomplete-items div:hover {
      /*when hovering an item:*/
      background-color: #e9e9e9;
      }
      .autocomplete-active {
      /*when navigating through the items using the arrow keys:*/
      background-color: DodgerBlue !important;
      color: #ffffff;
      }</style>
      
      <div class="site-wrap">
        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
          </div> <!-- .site-mobile-menu -->
          
          
          <header class="site-navbar  mb-4" style="border-bottom:solid #523691; background: white" role="banner">
            <div class="container">
              <div class="row align-items-center">
                
                <div class="col-6 col-xl-2">
                  <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">TO<strong>Recruit</strong></a></h1>
                </div>
                <div class="col-10 col-xl-10 d-none d-xl-block">
                  <nav class="site-navigation text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="offre.html">Offres</a></li> 
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li>
                        <img src="images/userprofile.png"  class="avatar rounded-circle d-none d-md-inline" alt="avatar" style=" float: none;
                            width: 35px;
                           height: 35px; "> 
                      </li>
                      <li></li>
                      <li></li>
                    </ul>
                  </nav>
                </div>
                <div class="col-6 col-xl-2 text-right d-block">
                  
                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                </div>
              </div>
            </div>
            
          </header>
          
          <div class=" col-12  text-center mx-auto  mx-0 px-0 " >
            <form method="POST" action="" id="inscForm" class="text-center ">
              <!-- information sur l'offre -->
              <div id="form1" class="text-center mx-auto col-12 col-sm-8 col-lg-6" style="background-color: white">
                <h2 class="form-title titre mb-3 mt-3">Créer votre offre</h2>
                <div class="form-group text-left text-gray col-12">
                  <h5  class="mb-0">Information sur l'offre</h5>
                  <hr   class="mt-2">
                </div>
                <div class="form-group col-12 text-left">
                  <label class="mb-0 mt-1 ">Nom de l'offre</label>
                  <input type="text" class="form-input form-control col-12" name="nom_offre" id="nom_offre" placeholder="Nom de l'offre"/>
                  
                </div>
                
                <div class="form-group  col-12 text-left">
                  <label class="mb-0 ">Adresse</label>
                  <input type="text" class="form-input form-control col-12" name="adresse" id="adresse" placeholder="adresse"/>
                  
                </div>
                <div class="form-group row col-12 px-0 text-left mx-auto">
                  <div class="col-12 col-md-6 py-2 text-left">
                    <label class="mb-0 ">Wilaya</label>
                    <input type="text" class="form-input form-control col-12" name="wilaya" id="wilaya" placeholder="adresse"/>
                    
                  </div>
                  <div class="col-12 col-md-6 py-2 text-left">
                    <label class="mb-0 ">Daira</label>
                    <input type="text" class="form-input form-control col-12" name="daira" id="daira" placeholder="adresse"/>
                    
                  </div>
                </div>
                
                <div class="form-group row col-12 px-0 text-left mx-auto">
                  <div class="col-12 col-md-6 py-2">
                    <label class="mb-0 ">Date de fin de l'offre</label>
                    <input type="date" class="form-input form-control " name="date_fin_offre" id="date_fin_offre" value="<?php echo date('Y-m-d'); ?>"/>
                  </div>
                  <div class="col-12 col-md-6 py-2">
                    <label class="mb-0 ">type de travail</label>
                    <div class="select-pays">
                      <select name="select" class="form-control">
                        <option value="">All Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <option value="">Category 4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group  text-left">
                  <button class="btn btn-primary btn-sm ml-3 px-4 py-2"
                  id="btf1"   type="button"><i class="glyphicon glyphicon-ok-sign"></i>suivant</button>  <label>&emsp;1/4</label>
                </div>
                
                
                
                
                
              </div>
              <!-- information sur le travail -->
              <div class="text-center px-0 mx-0 mx-auto col-12 col-sm-8 col-lg-6"  id="form2" style="">
                
                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                  <!-- Accordion card -->
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header mb-1" role="tab" id="headingTwo1">
                      <div class="row col-12">
                        <div class="col-10">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                            aria-expanded="true" aria-controls="collapseTwo1">
                            <h6 class="mb-0 mx-auto text-left">
                            Formations
                            </h6>
                          </a>
                        </div>
                        <div class="col-2">
                          <button class="btn btn-sm btn-primary ml-auto"><i class="fas fa-plus" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    </div>
                    <!-- Card body -->
                    <div id="collapseTwo1" class="collapse show" role="tabpanel"  aria-labelledby="headingTwo1"
                      data-parent="#accordionEx1">
                      <div class="card-body">
                        <div class="form-group col-12 text-left">
                          <label class="mb-0 mt-1 ">Domaine formation</label>
                          <input type="text" class="form-input form-control col-12" name="domaineformation" id="domaine_formation" placeholder="Domaine formation"/>
                          
                        </div>
                        <div class="form-group col-12 text-left">
                          <label class="mb-0 mt-1 ">Spécialité</label>
                          <input type="text" class="form-input form-control col-12" name="spécialité" id="spécialité" placeholder="spécialité"/>
                          
                        </div>
                        <div class="form-group col-12 text-left">
                          <table class="table-sm col-12">
                            <thead class="">
                              <tr><th>Mes formations</th>
                              
                            </tr></thead>
                            <tbody>
                              <tr><td>Formation1</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td><tr>
                              
                              </tr><td>Formation2</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td></tr>
                              
                            </tbody>
                          </table>
                          <!--table-->
                          
                        </div>
                      </div>
                    </div>
                    <!-- fin Accordion card -->
                    <!-- debut Accordion card -->
                    <div class="card">
                      <!-- Card header -->
                      <div class="card-header mb-1" role="tab" id="headingTwo2">
                        <div class="row col-12">
                          <div class="col-10">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                              aria-expanded="false" aria-controls="collapseTwo21">
                              <h6 class="mb-0 mx-auto text-left">
                              Experiences proffesionnelles
                              </h6>
                            </a>
                          </div>
                          <div class="col-2">
                            <button class="btn btn-sm btn-primary ml-auto"><i class="fas fa-plus" aria-hidden="true"></i></button>
                          </div>
                        </div>
                      </div>
                      <!-- Card body -->
                      <div id="collapseTwo21" class="collapse" role="tabpanel"  aria-labelledby="headingTwo21"
                        data-parent="#accordionEx1">
                        
                        <div class="card-body">
                          <div class="form-group row col-12 px-0 mx-auto">
                            <div class="form-group col-12 col-sm-7 text-left ">
                              <label class="mb-0 mt-1 ">Domaine experience</label>
                              <input type="text" class="form-input form-control col-12" name="domaine_experience" id="domaine_experience" placeholder="Domaine experience"/>
                              
                            </div>
                            <div class="form-group col-12 col-sm-5 text-left ">
                              <label class="mb-0 mt-1 ">Nombre d'année</label>
                              <input type="number" min="0" class="form-input form-control col-12" name="nombre_année" id="nombre_année" placeholder="0"/>
                              
                            </div>
                          </div>
                          <div class="form-group col-12 text-left">
                            <table class="table-sm col-12">
                              <thead class="">
                                <tr><th>Experiences</th>
                                
                              </tr></thead>
                              <tbody>
                                <tr><td>Experience 1</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td><tr>
                                
                                </tr><td>Experience 2</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td></tr>
                                
                              </tbody>
                            </table>
                            <!--table-->
                            
                          </div>
                        </div>
                      </div>
                      <!-- fin Accordion card -->
                      <!-- debut Accordion card -->
                      <div class="card">
                        <!-- Card header -->
                        <div class="card-header mb-1" role="tab" id="headingTwo3">
                          <div class="row col-12">
                            <div class="col-10">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo31"
                                aria-expanded="false" aria-controls="collapseTwo31">
                                <h6 class="mb-0 mx-auto text-left">
                                Compétences linguistiques
                                </h6>
                              </a>
                            </div>
                            <div class="col-2">
                              <button class="btn btn-sm btn-primary ml-auto"><i class="fas fa-plus" aria-hidden="true"></i></button>
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
                              <input type="text" class="form-input form-control col-12" name="nom_langue" id="langue" placeholder="Langue"/>
                              
                            </div>
                            <div class="form-group col-12 col-lg-6  text-left">
                              <div class="col-12 px-0 mx-0 ">
                                <label class="mb-0 ">Niveau langue</label>
                                <div class="select-pays">
                                  <select name="select" class="form-control">
                                    <option value="">Niveau</option>
                                    <option value="">Bas</option>
                                    <option value="">Moyen</option>
                                    <option value="">Elevé</option>
                                    
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="form-group col-12 text-left">
                              <table class="table-sm col-12">
                                <thead class="">
                                  <tr><th>Langues</th>
                                  
                                </tr></thead>
                                <tbody>
                                  <tr><td>Langue 1</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td><tr>
                                  
                                  </tr><td>Langue 2</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td></tr>
                                  
                                </tbody>
                              </table>
                              <!--table-->
                              
                            </div>
                          </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header mb-1" role="tab" id="headingTwo4">
                            <div class="row col-12">
                              <div class="col-10">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo41"
                                  aria-expanded="false" aria-controls="collapseTwo41">
                                  <h6 class="mb-0 mx-auto text-left">
                                  Autre competences
                                  </h6>
                                </a>
                              </div>
                              <div class="col-2">
                                <button class="btn btn-sm btn-primary ml-auto"><i class="fas fa-plus" aria-hidden="true"></i></button>
                              </div>
                            </div>
                          </div>
                          <!-- Card body -->
                          <div id="collapseTwo41" class="collapse" role="tabpanel"  aria-labelledby="headingTwo41"
                            data-parent="#accordionEx1">
                            <div class="card-body">
                              <div class="form-group col-12 text-left">
                                <label class="mb-0 mt-1 ">Nom competence</label>
                                <input type="text" class="form-input form-control col-12" name="nom_competence" id="nom_competence" placeholder="Nom de l'offre"/>
                                
                              </div>
                              
                              <div class="form-group col-12 text-left">
                                <table class="table-sm col-12">
                                  <thead class="">
                                    <tr><th>Compétences</th>
                                    
                                  </tr></thead>
                                  <tbody>
                                    <tr><td>competence 1</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td><tr>
                                    
                                    </tr><td>competence 2</td><td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>&emsp;<button class="btn btn-sm btn-secondary"><i class="fas fa-pencil-alt"></i></button></td></tr>
                                    
                                  </tbody>
                                </table>
                                <!--table-->
                                
                              </div>
                            </div>
                          </div>
                          <!-- Accordion card -->
                        </div>
                        <!-- Accordion wrapper -->
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <footer class="site-footer mb-auto pt-5 pb-0">
            <div class="container">
              
              <div class="row">
                <div class="col-lg-9">
                  <div class="row">
                    <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                      <h3 class="footer-heading mb-4">For Candidates</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Find Jobs</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Search Jobs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                      <h3 class="footer-heading mb-4">For Employers</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">Employer Account</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Find Candidates</a></li>
                        <li><a href="#">Terms &amp; Policies</a></li>
                        <li><a href="#">Careers</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                      <h3 class="footer-heading mb-4">Archives</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">January 2018</a></li>
                        <li><a href="#">February 2018</a></li>
                        <li><a href="#">March 2018</a></li>
                        <li><a href="#">April 2018</a></li>
                        <li><a href="#">May 2018</a></li>
                        <li><a href="#">June 2918</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                      <h3 class="footer-heading mb-4">Company</h3>
                      <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Terms &amp; Policies</a></li>
                        <li><a href="#">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <h3 class="footer-heading mb-4">Contact Info</h3>
                  <ul class="list-unstyled">
                    <li>
                      <span class="d-block text-white">Address</span>
                      New York - 2398 10 Hadson Carl Street
                    </li>
                    <li>
                      <span class="d-block text-white">Telephone</span>
                      +1 232 305 3930
                    </li>
                    <li>
                      <span class="d-block text-white">Email</span>
                      info@yourdomain.com
                    </li>
                  </ul>
                  
                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
                
              </div>
            </div>
          </footer>
          
          <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/jquery-migrate-3.0.1.min.js"></script>
          <script src="js/jquery-ui.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.stellar.min.js"></script>
          <script src="js/jquery.countdown.min.js"></script>
          <script src="js/jquery.magnific-popup.min.js"></script>
          <script src="js/bootstrap-datepicker.min.js"></script>
          <script src="js/aos.js"></script>
          
          
          <script>
          $(document).ready(function() {
          $("#form1").show();
          $("#form2").hide();
          $("#btf1").click(function(){
          $("#form1").hide();
          $("#form2").show();
          });
          $("#bt1").click(function(){
          $("#form1").show();
          $("#form2").hide();
          });
          })
          </script>
          <script src="js/main.js"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script>
          var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
          autocomplete(document.getElementById("domaine_formation"), countries);
          autocomplete(document.getElementById("spécialité"), countries);
          autocomplete(document.getElementById("wilaya"), countries);
          autocomplete(document.getElementById("daira"), countries);
          autocomplete(document.getElementById("domaine_experience"), countries);
          autocomplete(document.getElementById("langue"), countries);
          function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
          var a, b, i, val = this.value;
          /*close any already open lists of autocompleted values*/
          closeAllLists();
          if (!val) { return false;}
          currentFocus = -1;
          /*create a DIV element that will contain the items (values):*/
          a = document.createElement("DIV");
          a.setAttribute("id", this.id + "autocomplete-list");
          a.setAttribute("class", "autocomplete-items");
          /*append the DIV element as a child of the autocomplete container:*/
          this.parentNode.appendChild(a);
          /*for each item in the array...*/
          for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
          /*insert the value for the autocomplete text field:*/
          inp.value = this.getElementsByTagName("input")[0].value;
          /*close the list of autocompleted values,
          (or any other open lists of autocompleted values:*/
          closeAllLists();
          });
          a.appendChild(b);
          }
          }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
          var x = document.getElementById(this.id + "autocomplete-list");
          if (x) x = x.getElementsByTagName("div");
          if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
          } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
          } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
          }
          }
          });
          function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
          x[i].classList.remove("autocomplete-active");
          }
          }
          function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
          if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
          }
          }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function (e) {
          closeAllLists(e.target);
          });
          }
          </script>
          
        </body>
      </html>