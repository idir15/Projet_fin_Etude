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
		<style>
			.dropdown-toggle::after {
 
    
        display: inline-block;
    width: 0;
    height: 0;
    margin-left: .3em;
    vertical-align: middle;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-left: .3em solid transparent;
    float: right;
    margin-top: 8px;

}
		</style>
		<body>
			<?php include("headerRliste.php")?>
			 
			<?php
			 $req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre";
			$rep = mysqli_query($connection,$req);
			
			?>
			<div class="row col-12 mt-4 mb-4">
				
				<div class="row col-12 col-lg-3 mb-4 d-none d-md-block ">
					<div class="col-12 border shadow bg-white" id="sidebar-wrapper">
					
					
						<div class="list-group list-group-flush mt-2 ">
							<a href="#" class="list-group-item list-group-item-action tc ">Toutes les candidatures</a>
							<a  href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=" list-group-item dropdown-toggle list-group-item-action">Candidats préselectionnés</a>
							<ul class="collapse list-unstyled " id="homeSubmenu">
								<div class="list-group list-group-flush ">
									<a href="#" class="list-group-item  list-group-item-action cr">Conditions requises satisfaites</a>

									<a href="#" class="list-group-item  list-group-item-action ms">Manque de spécialités</a>
								
									<a href="#" class="list-group-item list-group-item-action me">Manque d'experiences</a>
								
									<a href="#" class="list-group-item list-group-item-action ml">Manque de langues</a>

									<a href="#" class="list-group-item list-group-item-action mc">Manque de compétences</a>
								</div>
							</ul>
							<a href="#" class="list-group-item list-group-item-action cs">Candidats selectionnés</a>

							
						</div>
					</div>
				</div>
				<div class=" col-12 col-lg-9 mx-auto shadow ">
					
					
					<div class="col-12 col-lg-8 mx-auto"> <input type="text" id="search" class="form-control shadow" name="" placeholder="Nom document,type"></div>
					<div id="gh">
					<table id="myTable" cellspacing="0" width="100%" class=" table border responsive table-striped   mt-4 align-center ">
	
	<thead class="text-left text-white" style="background:#142136 ">
		<tr>
			<th class="d-none">Nom</th>
			<th class="d-none">Prenom</th>
			<th class="d-none">Poste de l'offre</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Poste de l'offre</th>
			<th>Remarque</th>
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
			<td class="d-none"><?php echo $row['id_candidat']; ?></td>
			<td class="d-none"><?php echo $row['code_offre']; ?></td>
			<td class="d-none"><?php echo $row['email']; ?></td>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prenom']; ?></td>
			<td><?php echo $row['poste']; ?></td>
			<td><?php echo $row['etat']; ?></td>
			<td class="text-center"><a href="detail_candidat.php?id=<?=$row['id_candidat'];?>" class="btn btn-primary py-2">+</a></td>


		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table>
</div>
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
 function validerCR(id1,id2,eml){
	 if(confirm("Voulez vous accepter ce candidat?")){
var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidatureCR.php",
		method: "post",
		data: {
		  idc:idc ,
		  cof:cof,
		  emaila:eml

		},
		success: function (response) {
		  alert(idc);
		  alert(eml);
		  $("#myTable").html(response);

		},

});

  }}
  
  function refuserCR(id1,id2,e){
  	if(confirm("Voulez vous refuser ce candidat?")){
var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidatureCR.php",
		method: "post",
		data: {
		  idcc:idc ,
		  coff:cof ,
		  emailr:mail
		},
		success: function (response) {
		  alert(idc);
		  alert(mail);
		  $("#myTable").html(response);

		},

});

  }}
  
  </script>

  		  <script>
 function validerMS(id1,id2,eml){
	 if(confirm("Voulez vous accepter ce candidat?")){

var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidatureMS.php",
		method: "post",
		data: {
		  idc:idc ,
		  cof:cof,
		  emaila:eml

		},
		success: function (response) {
		  alert(idc);
		  alert(eml);
		  $("#myTable").html(response);

		},

});

  }}
  
  function refuserMS(id1,id2,e){
if(confirm("Voulez vous refuser ce candidat?")){
var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidatureMS.php",
		method: "post",
		data: {
		  idcc:idc ,
		  coff:cof ,
		  emailr:mail
		},
		success: function (response) {
		  alert(idc);
		  alert(mail);
		  $("#myTable").html(response);

		},

});

  }}
  
  </script>
  <script>
 function validerME(id1,id2,eml){
	  if(confirm("Voulez vous accepter ce candidat?")){

var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidatureME.php",
		method: "post",
		data: {
		  idc:idc ,
		  cof:cof,
		  emaila:eml

		},
		success: function (response) {
		  alert(idc);
		  alert(eml);
		  $("#myTable").html(response);

		},

});

  }}
  
  function refuserME(id1,id2,e){
if(confirm("Voulez vous refuser ce candidat?")){
var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidatureME.php",
		method: "post",
		data: {
		  idcc:idc ,
		  coff:cof ,
		  emailr:mail
		},
		success: function (response) {
		  alert(idc);
		  alert(mail);
		  $("#myTable").html(response);

		},

});

  }}
  
  </script>

    <script>
 function validerML(id1,id2,eml){
	 if(confirm("Voulez vous accepter ce candidat?")){

var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidatureML.php",
		method: "post",
		data: {
		  idc:idc ,
		  cof:cof,
		  emaila:eml

		},
		success: function (response) {
		  alert(idc);
		  alert(eml);
		  $("#myTable").html(response);

		},

});

  }}
  
  function refuserML(id1,id2,e){
if(confirm("Voulez vous refuser ce candidat?")){
var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidatureML.php",
		method: "post",
		data: {
		  idcc:idc ,
		  coff:cof ,
		  emailr:mail
		},
		success: function (response) {
		  alert(idc);
		  alert(mail);
		  $("#myTable").html(response);

		},

});

  }}
  
  </script>

    <script>
 function validerMC(id1,id2,eml){
	 if(confirm("Voulez vous accepter ce candidat?")){

var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidatureMC.php",
		method: "post",
		data: {
		  idc:idc ,
		  cof:cof,
		  emaila:eml

		},
		success: function (response) {
		  alert(idc);
		  alert(eml);
		  $("#myTable").html(response);

		},

});

  }}
  
  function refuserMC(id1,id2,e){
if(confirm("Voulez vous refuser ce candidat?")){
var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidatureMC.php",
		method: "post",
		data: {
		  idcc:idc ,
		  coff:cof ,
		  emailr:mail
		},
		success: function (response) {
		  alert(idc);
		  alert(mail);
		  $("#myTable").html(response);

		},

});

  }}
  
  </script>

		
		<script>
			$(document).ready(function () {


			$('.tc').click(function() {

										dTable =$('#myTable').DataTable();
					var head_item = dTable.columns(6).header();
$(head_item ).html('Remarque');


				var tc = 'tc';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { tc: tc , },
      					success: function (response) {$("#myTable").html(response);  dTable= $('#myTable').DataTable({ 

                      "destroy": true,
                     info:false,"lengthMenu": [4],
		lengthChange: false,

		responsive: true,
		"ordering": false,

		select: {
		toggleable: false
		},
		"dom": "lrtip" 
                   });},
        			});
			});		
			
			$('.cr').click(function() {
					var cr = 'cr';
				var a='a';
							dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Réponse');
			
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { cr: cr ,a:a , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});
      					;},
        			});
			});

			$('.ms').click(function() {
					dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Réponse');
				var ms = 'ms';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { ms: ms ,a:a , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});},
        			});
			});

			$('.me').click(function() {
					dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Réponse');
				var me = 'me';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { me: me ,a:a , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});},
        			});
			});	

			$('.ml').click(function() {
					dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Réponse');
				var ml = 'ml';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { ml: ml ,a:a , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});},
        			});
			});
			
			$('.mc').click(function() {
					dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Réponse');
				var mc = 'mc';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { mc: mc ,a:a , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});},
        			});
			});

		$('.cs').click(function() {
				dTable =$('#myTable').DataTable();
							var head_item = dTable.columns(6).header();
							$(head_item ).html('Cantacter');
				var cs = 'cs';
				
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { cs: cs , },
      					success: function (response) {$("#myTable").html(response); dTable= $('#myTable').DataTable({ 
                      					"destroy": true,
                     					info:false,"lengthMenu": [4],
										lengthChange: false,
										responsive: true,
										"ordering": false,
										select: {
										toggleable: false
										},
										"dom": "lrtip" //use for reinitialize datatable
                   					});},
        			});
			});			

		
		})
		</script>
		<script>
		dTable =$('#myTable').DataTable({ info:false,"lengthMenu": [4],
		lengthChange: false,

		responsive: true,
		"ordering": false,
		select: {
		toggleable: false
		},
		"dom": "lrtip"
		} );
		$('#search').keyup(function() {
		dTable.column(5).search($(this).val()).draw();


		// this  is for customized searchbox with datatable search feature.
		})
		
		</script>

	</html>