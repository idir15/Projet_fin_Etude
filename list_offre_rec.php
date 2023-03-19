<?php

session_start();  
$idR=$_SESSION['id_recruteur'];



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
        
        
        <?php include("headerR.php")?>
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
        <div class="row col-12 mx-auto job-listing-area  ">
            
                    
              <div class="row col-12 col-md-10 mx-auto mx-0 px-0 " >
             <div class="col-12 site-section bg-light ">            
          <div class=" mx-auto">
            <div class="row col-12  text-center mb-3">
              <div class="col-12 " data-aos="fade">
                <h2 class="font-weight-bold text-black">Mes Offres</h2>
              </div>
            </div>
            
            
            <?php
            $req="SELECT o.code_offre, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM recruteur r, offre_emploi o, wilaya w, daira d WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya AND o.id_recruteur='$idR'";
                    $rep = mysqli_query($connection,$req);
            ?>


  <table id="tableData" class="col-12 col-lg-10 mx-auto mx-0 px-0 ">
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
        <div class="col-md-12 mx-0 px-0">
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
              
              <a href="detail_offre_rec.php?id=<?=$row['code_offre'];?>" class="btn btn-primary py-2">Détail</a>

              <?php echo "<a class='btn btn-primary py-2' onClick=\"javascript: return confirm('Please confirm deletion');\" href='supprimer_offre.php?id=".$row['code_offre']."'>Supprimer</a>"; ?>
              
            </div>
        
          </div>
        </div>
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
            
        </div>
        
        
        
        
        <?php include("footers.php")?>
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