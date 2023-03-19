<?php

session_start();  
$idR=$_SESSION['id_recruteur'];



require "bd.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Liste des candidats selectionés</title>
	<link rel="stylesheet" href="">
	 <link rel="stylesheet" href="css/style.css">
	 	<link rel="stylesheet" type="text/css" href="
https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">

</head>
<body>

<?php include("headerR.php")?>
<?php
            $req="SELECT o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL AND etat<>	
			refusé' ";
            $rep = mysqli_query($connection,$req);
            
            ?>
<div class="row col-12 mt-4 mb-4">
		
			<div class="row col-12 col-lg-3 border ">
				<div class=" col-12 text-center">
					<h4 class="mb-4">Candidatures</h4>
				
				
					<ul class="text-left">
						<li class=" mb-2"><a href="#" title="">Liste des candidatures</a></li>
						<li class="mb-2"><a href="#" title="">Liste des candidats selectionnés</a></li>
						<li class="mb-2"><a href="#" title="">Liste des candidats préselectionnés</a> </li>
						 
						
					</ul>
				</div>
			</div>

	<div class=" col-12 col-lg-9 mx-auto ">
		
	
<div class="col-12 col-lg-8 mx-auto"> <input type="text" id="search" class="form-control shadow" name="" placeholder="Nom document,type"></div>
<table id="myTable" cellspacing="0" width="100%" class=" table responsive table-striped   mt-4 align-center ">
	
	<thead >
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Poste de l'offre</th>
			<th>Réponse</th>
			<th>Detail</th>
			
			
		</tr>
	</thead>
	
	<tbody>
		<?php
  if (mysqli_num_rows($rep)>0)
  {
  while($row = mysqli_fetch_assoc($rep))

{
?>

		<tr>
			<td class='d-none idc'><?php echo $row['id_candidat']; ?></td>
			<td class='d-none cof'><?php echo $row['code_offre']; ?></td>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prenom']; ?></td>
			<td><?php echo $row['poste']; ?></td>
			<td> <button onClick="valider('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>')">hakim</button> <button onClick="refuser('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>')">hhh</button></td>
			<td class="text-center">+</td>
		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table>
</div>
</div>

<?php include("footers.php")?>
	
</body>
<script src="js/main.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>
   

  
      <script>
  dTable =$('#myTable').DataTable({ info:false,"lengthMenu": [7],
  lengthChange: false,
  responsive: true,
  "ordering": false,
  oLanguage: {

sEmptyTable: "Vous n'avez pas de candidatures",

oPaginate: {
sNext: 'Suiv <i class="fas fa-angle-double-right"></i>',
sPrevious: '<i class="fas fa-angle-double-left"></i> Préc'

}
},
  
  select: {
  toggleable: false
  },
  "dom": "lrtip"
  } );
  $('#search').keyup(function() {
  dTable.column(2).search($(this).val()).draw(); // this  is for customized searchbox with datatable search feature.
  })
  
  </script>
  <script>
 function valider(id1,id2){

var idc=id1;
var cof=id2;
$.ajax({
		url: "rep_candidature.php",
		method: "post",
		data: {
		  idc:idc ,
			cof:cof
		},
		success: function (response) {
		  alert(idc);
		  alert(cof);
		  $("#myTable").html(response);

		},

});

  }
  
  function refuser(id1,id2){

var idc=id1;
var cof=id2;
$.ajax({
		url: "rep_candidature.php",
		method: "post",
		data: {
		  idcc:idc ,
			coff:cof
		},
		success: function (response) {
		  alert(idc);
		  alert(cof);
		  $("#myTable").html(response);

		},

});

  }
  
  </script>
 




</html>