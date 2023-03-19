<?php
if(!isset($_SESSION)){
  session_start();
}
require "bd.php";
$idR=$_SESSION['id_recruteur'];



$sujet = "Email de test";
$corp = "Salut ceci est un email de test envoyer par un script PHP";
$headers = "From: torecruit2020@gmail.com";
  
if(isset($_POST['idc'])){
        $idc=$_POST['idc'];
    $cof=$_POST['cof'];
    $dest = $_POST['emaila'];

    if (mail($dest, $sujet, $corp, $headers)) {
      echo "Email envoyé avec succès à $dest ...";
    } else {
      echo "Échec de l'envoi de l'email...";
    }

$req_rep="UPDATE candidature SET reponse='Accepté' WHERE id_candidat='$idc' AND code_offre='$cof'";
$rep_rep=mysqli_query($connection, $req_rep);
}

if(isset($_POST['idcc'])){
    $idcc=$_POST['idcc'];
$coff=$_POST['coff'];
$dest = $_POST['emailr'];

if (mail($dest, $sujet, $corp, $headers)) {
  echo "Email envoyé avec succès à $dest ...";
} else {
  echo "Échec de l'envoi de l'email...";
}
    $req_rep="UPDATE candidature SET reponse='Refusé' WHERE id_candidat='$idcc' AND code_offre='$coff'";
    $rep_rep=mysqli_query($connection, $req_rep);
 }
$req="SELECT c.email, o.code_offre, o.poste, c.nom, c.prenom, cd.etat, cd.id_candidat FROM recruteur r, offre_emploi o, candidature cd, candidat c WHERE r.id_recruteur = o.id_recruteur AND o.id_recruteur='$idR' AND c.id_candidat=cd.id_candidat AND cd.code_offre=o.code_offre AND cd.reponse IS NULL ";
$rep = mysqli_query($connection,$req);




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
	<div class="d-none"><?php include 'header.php'?></div>


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
			<td class='d-none cof'><?php echo $row['email']; ?></td>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prenom']; ?></td>
			<td><?php echo $row['poste']; ?></td>
			<td><button onClick="valider('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>','<?php echo $row["email"]; ?>')" class="btn-primary"><i class="fa fa-check"></i></button> <button onClick="refuser('<?php echo $row["id_candidat"]; ?>','<?php echo $row["code_offre"]; ?>','<?php echo $row["email"]; ?>')" class="btn-danger"><i class="fa fa-times"></i></button></td>
			<td class="text-center">+</td>
		
		</tr>
		<?php
    } }
    ?>
	</tbody>
	
      
</table>


</body>
<script src="js/main.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>
		  <script>
 function valider(id1,id2,eml){
	 if(confirm("sdfghnj")){

var idc=id1;
var cof=id2;
var eml=eml;
$.ajax({
		url: "rep_candidature.php",
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
  
  function refuser(id1,id2,e){

var idc=id1;
var cof=id2;
var mail=e;
$.ajax({
		url: "rep_candidature.php",
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

  }
  
  </script>
		
		<script>
			$(document).ready(function () {

			$('.tc').click(function() {
				var tc = 'tc';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { tc: tc , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});		
			
			$('.cr').click(function() {
				var cr = 'cr';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { cr: cr ,a:a , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});

			$('.ms').click(function() {
				var ms = 'ms';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { ms: ms ,a:a , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});

			$('.me').click(function() {
				var me = 'me';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { me: me ,a:a , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});	

			$('.ml').click(function() {
				var ml = 'ml';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { ml: ml ,a:a , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});
			
			$('.mc').click(function() {
				var mc = 'mc';
				var a='a';
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { mc: mc ,a:a , },
      					success: function (response) {$("#myTable").html(response);},
        			});
			});

		$('.cs').click(function() {
				var cs = 'cs';
				
      			$.ajax(
      					{url: "cand_sel.php", method: "post",data: { cs: cs , },
      					success: function (response) {$("#myTable").html(response);},
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
		dTable.column(2).search($(this).val()).draw(); // this  is for customized searchbox with datatable search feature.
		})
		
		</script>
</html>


