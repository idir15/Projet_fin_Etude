<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$idr=$_SESSION['id_recruteur'];

//var_dump($id_cand);die();

//--------requette pour les candidature-------------
  $reqCnd = "SELECT DISTINCT  c.nom , c.prenom ,c.date_naissance,c.email,c.num_tel FROM candidat c,candidature cd,recruteur r,offre_emploi o WHERE r.id_recruteur='$idr' AND cd.code_offre=o.code_offre AND cd.id_candidat=c.id_candidat AND o.id_recruteur=r.id_recruteur";
  
  
   
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
		<?php include("headerR.php")?>
    
		
		<div class="row col-12 mx-auto mt-4  ">

			
			<div class="row col-12 col-lg-10 shadow  mx-auto">
			<div class="col-12 text-center">
				<h4>Liste des postulants</h4>
				
			</div>

				<div class="col-12 mx-auto">
        

<table id="myTable" cellspacing="0" width="100%" class="table responsive table-striped   mt-4 align-center ">
						<thead class="text-left text-white" style="background:#142136 ">
							<tr>
								
								<th>Nom</th>
								<th>Prénom</th>
                <th>Date de naissance</th>
								<th>Email</th>
                <th>Numéro téléphone</th>
							</tr>
						</thead>
						<tbody>
            <?php
              if (mysqli_num_rows($repCnd) > 0) {
                while ($row = mysqli_fetch_assoc($repCnd)) {
                  $nb=$nb+1;
            ?>
							<tr>
								
								<td><?php echo $row["nom"];?></td>
								<td><?php echo $row["prenom"];?></td>
                <td><?php echo $row["date_naissance"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["num_tel"];?></td>
                
                
                
							</tr>
              <?php }} ?>
						</tbody>
					</table>


				</div>


        </div>

			</div>
			
		</div>
    <br>
		<?php include("footers.php")?>
		
  <script src="js/main.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>
    



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