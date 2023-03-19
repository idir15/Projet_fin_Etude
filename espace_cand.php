<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$idc=$_SESSION['id_candidat'];

//var_dump($id_cand);die();

//--------requette pour les candidature-------------
  $reqCnd = "SELECT c.etat, c.code_offre, o.poste, r.nom_entreprise FROM candidature c, offre_emploi o, recruteur r WHERE c.id_candidat='$idc' AND c.code_offre=o.code_offre AND o.id_recruteur=r.id_recruteur";
  
  
   
  $repCnd = mysqli_query($connection, $reqCnd);


  $nb=0;

  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>espace candidat</title>
		
		 <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="
https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
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
    .dataTables_length{
      display: none;
    }
    
  
    </style>
	</head>
	<body>
		<?php include("headerC.php")?>
    
		
		<div class="row col-12 mx-auto mt-4  ">
			<div class="row col-12 col-lg-3 border bg-white shadow">
				
              
                <div class="card-body mx-auto">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="photo/USA.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php  echo $_SESSION['nom'].' '.$_SESSION['prenom'] ;?></h4>
                      
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                     
                    </div>
                  </div>
                  </div>
                
          
			</div>
			
			<div class="row col-12 col-lg-9 shadow  mx-auto">
			<div class="col-12 text-center">
				<h4>Mes postulations</h4>
				
			</div>

				<div class="col-12 mx-auto">
        

<table id="myTable" cellspacing="0" width="100%" class="table responsive table-striped   mt-4 align-center ">
						<thead>
							<tr>
								<th>N° Candidature</th>
								<th>Poste</th>
								<th>Entreprise</th>
								<th>Réponse</th>
							</tr>
						</thead>
						<tbody>
            <?php
              if (mysqli_num_rows($repCnd) > 0) {
                while ($row = mysqli_fetch_assoc($repCnd)) {
                  $nb=$nb+1;
            ?>
							<tr>
								<td><?php echo $nb; ?></td>
								<td><?php echo $row["poste"];?></td>
								<td><?php echo $row["nom_entreprise"];?></td>
                <td id="etat"><?php if ($row["etat"]=="accepté"){ ?><span class="text-success">
                <?php echo $row["etat"]?></span> <?php } ?>

                <?php if ($row["etat"]=="en attente"){ ?><span class="text-gray"> <?php echo $row["etat"] ?> </span> <?php } 
                if ($row["etat"]=="refusé"){?><span class="text-danger"><?php echo $row["etat"] ?></span> <?php } ;?></td>
							</tr>
              <?php }} ?>
						</tbody>
					</table>


				</div>


        </div>
        <div class="row col-12 mx-auto mx-0 px-0">
        	 <div class="col-12 site-section bg-light mt-4">		    
          <div class=" mx-auto">
            <div class="row col-12  text-center mb-3">
              <div class="col-12 " data-aos="fade">
                <h2 class="font-weight-bold text-black">Offres recommandées</h2>
              </div>
            </div>
            
            
            
              <?php
                    require  "bd.php";
                    if ($connection)
                    {
                    
                      $req_formation ="SELECT DISTINCT nom_formation from formation f, specialite s, specialite_aquise sa WHERE s.ref_formation = f.ref_formation AND sa.id_candidat='$idc' AND sa.code_specialite=  s.code_specialite ";
                      $resultF = mysqli_query($connection, $req_formation);
                      
                      if($rowF = mysqli_fetch_assoc($resultF)) {
                      $nomF=$rowF['nom_formation'];}

                      $req_formation ="SELECT ref_formation from formation WHERE nom_formation ='$nomF' ";
                      $resultF = mysqli_query($connection, $req_formation);

                      if($rowF = mysqli_fetch_assoc($resultF)) {
                      $reff=$rowF['ref_formation'];}

                    //var_dump($reff);

                    $req="SELECT DISTINCT o.code_offre, f.nom_formation, r.nom_entreprise, o.poste, o.typeTravail, d.nom_daira, w.nom_wilaya FROM recruteur r, offre_emploi o, wilaya w, daira d, specialite_requise sr, formation f, specialite s WHERE r.id_recruteur = o.id_recruteur AND o.num_daira=d.num_daira AND d.num_wilaya=w.num_wilaya AND sr.code_offre=o.code_offre AND s.ref_formation= '$reff' AND s.code_specialite=sr.code_specialite AND s.ref_formation=f.ref_formation ";
                    $rep = mysqli_query($connection,$req);
                    
                    }
                    else
                    {
                    echo".................";
                    }
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
                            
                            <a href="detail_offre.php?id=<?= $row['code_offre'] ?>" class="btn btn-primary py-2">Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <?php
                  } } ?>
                  
                </tr>
              </tbody>
            </table>

                  
            
          </div>
      </div>
        	
        </div>

			</div>
			
		</div>
		<?php include("footers.php")?>
		
  <script src="js/main.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>
    
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
   <script>
    $(document).ready(function() {
  $("#myTable").dataTable({
    searching: false,
    info: false,
    lengthChange: false,
    responsive: true,
    autoWidth: false,
    ordering: true,
    oLanguage: {

        sEmptyTable: "Vous n'avez pas de candidatures",
    
      oPaginate: {
        sNext: 'Suiv <i class="fas fa-angle-double-right"></i>',
        sPrevious: '<i class="fas fa-angle-double-left"></i> Préc'

      }
    },

    iDisplayLength: 10,
    responsive: {
      pagingType: "simple"
    }
  });
});
</script>
  	</body>
</html>