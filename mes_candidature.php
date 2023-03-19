<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mes candidaures</title>
	
	<link rel="stylesheet" type="text/css" href="
https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


</head>
<body>

<?php include("headerC.php")?>
<div class="row col-12 mt-4 mb-4">
		
<div class="col-12 mx-auto">
	

<table  id="myTable" cellspacing="0" width="100%" class="table responsive table-striped   mt-4 align-center ">
	
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
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			
		</tr>
	</tbody>
</table>
</div>
</div>

<?php include("footers.php")?>


	
</body>

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
    oLanguage: {
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
  <script src="js/main.js"></script>

</html>