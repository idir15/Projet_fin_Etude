<?php
if(!isset($_SESSION)){
    session_start();
  } 
   include "bd.php"
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jobstart &mdash; Colorlib Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
            <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
       
        <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/pretty-checkbox.min.css">
        <style>
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
        
        
         
<?php 
if(!isset($_SESSION['id_candidat'])){
  include("header.php");
}
  else{

  include("headerC.php");}
  ?>
        <style>

 .btn-light { background-color: white }
  .btn-light:hover{
    background-color: white
  }
    .btn-light:focus{
    background-color: white
  }
  
</style>

        
        <br>
        <div class="row col-12 mx-auto job-listing-area ">
            
            
                    <!-- Left content -->
                    <div class="col-12 col-md-3  border mb-5">
                    <form action="" method="POST">  
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50 mx-auto">
                           <div class="single-listing mt-4 mb-5 ">
                                <!-- select-Categories start -->
                                <div class="select-Categories ">
                                    <div class="small-section-tittle2 mb-3">
                                        <h4>Domaine</h4>
                                    </div>
                                    
                                           <?php 
                    $reqw="SELECT * FROM formation";
                    $repw=mysqli_query($connection,$reqw);?>
                     
                   
                  <select class="form-control  border selectpicker" data-live-search="true"  name="domaine_formatio"  id="domaine_formation" >
                   
                    
             
          <option selected="true" value="tout">Tout les domaines</option>
          <?php
                    while($row=mysqli_fetch_assoc($repw)){?>
                    <option  value="<?php echo $row["ref_formation"];
                      ?>"> <?php echo $row["nom_formation"];
                      ?></option> <?php  }?>
          </select>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single one -->
                            <div class="single-listing">
                            
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories mt-5 mb-3">
                                    <div class="small-section-tittle2 mb-3">
                                        <h4>Type de Travail</h4>
                                    </div>
                                    <div class="pretty  p-image p-rotate p-plain  mb-3">
                                         <input type="radio" name="type_travail" value='tout' checked="checked" />
                                            <div class="state ">
                                                <img class="image" src="photo/chek.png">
                                             <label>Tout type</label>
                                           </div>
                                      </div><br>
                                    <div class="pretty p-image p-rotate p-plain mb-3 ">
                                         <input type="radio" name="type_travail" value='temps plein' <?php 
                                         
                                         if(isset($_POST['type_travail'])){
                                          if($_POST['type_travail']=="temps plein"){
                                           echo 'checked="checked"';
                                          }
                                        }
                                         ?> />

                                            <div class="state ">
                                                <img class="image" src="photo/chek.png">
                                             <label>Temps plein</label>
                                           </div>
                                      </div><br>
                                   <div class="pretty p-image p-rotate p-plain mb-3">
                                         <input type="radio" name="type_travail" value='temps partiel' />
                                            <div class="state ">
                                                <img class="image" src="photo/chek.png">
                                             <label>Temps partiel</label>
                                           </div>
                                      </div><br>
                                <div class="pretty  p-image p-rotate p-plain  mb-3">
                                         <input type="radio" name="type_travail" value='A distance' />
                                            <div class="state ">
                                                <img class="image" src="photo/chek.png">
                                             <label>A distance</label>
                                           </div>
                                      </div><br>
                                    
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single two -->
                           
                            <!-- single three -->
                           
                            
                        </div>
                        <!-- Job Category Listing End -->
                        <div class=" text-center mb-2">
                          <button class="btn btn-primary " type="submit" name="rechercher" >Rechercher</button>
                        </div>
                    </div>

     
                    
                    
                    
              <div class="row col-12 col-md-9 mx-auto mx-0 px-0 " >
             <div class="col-12 site-section bg-light ">            
          <div class=" mx-auto">
            <div class="row col-12  text-center mb-3">
              <div class="col-12 " data-aos="fade">
                <h2 class="font-weight-bold text-black">Listes des Offres</h2>
              </div>
            </div>
            
            
            <?php include "rechercher.php" ?>
              
            
            
          </div>
      </div>
            
        </div>
                </div>
            
        </div>

        
        
        <?php 
if(!isset($_SESSION['id_candidat'])){
  include("footers.php");
}
  else{

    include("footerC.php");}
  ?>
 
    </div>
    
    
 
    <script src="js/main.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>     <script type="text/javascript" src="paging.js"></script>
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