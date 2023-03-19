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
			<div class="d-block d-lg-none">
			<?php include("menu_admin.php")?>
			 </div>
		
			<div class="row col-12 mt-4 mb-4 ">
				
				<div class="d-none row col-12  col-lg-3 mb-4 d-lg-block ">
					<div class="col-12 border shadow bg-white" id="sidebar-wrapper">
						<div class="list-group list-group-flush mt-2">
										<a href="#" class="list-group-item list-group-item-action tc "><i class="fas fa-home mr-1"></i>Accueil</a>
										<a href="#" class="list-group-item list-group-item-action tc "><i class="fas fa-user-tie mr-1"></i>Recruteurs</a>
										<a href="#" class="list-group-item list-group-item-action tc "><i class="fas fa-users mr-1"></i>Condidats</a>
										<a href="#" class="list-group-item list-group-item-action tc "><i class="far fa-chart-bar mr-1"></i>Statistiques</a>
										<a href="#" class="list-group-item list-group-item-action tc "><i class="fas fa-cog mr-1"></i>Paramétres</a>
										<a href="#" class="list-group-item list-group-item-action tc "><i class="fas fa-user-times mr-1"></i>Déconnexion</a>

							
						</div>
					</div>
				</div>
				<div class=" col-12 col-lg-9 mx-auto shadow ">
						<!--content-->
						<div class="row col-12  mt-3 mx-0">
							<div class="col-12 col-sm-6 col-md-3 my-1 text-center "><div class="card  bg-success shadow py-3"><h5 class="text-white"><i class="fas fa-eye mr-1 text-center"></i>Visites 118</h5></div></div>
							<div class="col-12 col-sm-6 col-md-3 my-1 text-center"><div class="card bg-primary shadow py-3"><h5 class="text-white"><i class="fas fa-user-tie mr-1 text-center"></i>Recruteurs 10</h5></div></div>
							<div class="col-12 col-sm-6 col-md-3 my-1 text-center"><div class="card bg-secondary shadow py-3"><h5 class="text-white"><i class="fas fa-users mr-1 text-center"></i>Condidats 78</h5></div></div>
							<div class="col-12 col-sm-6 col-md-3 my-1 text-center "><div class="card bg-info shadow py-3"><h5 class="text-white"><i class="fas fa-briefcase mr-1 text-center"></i>Offres 6</h5></div></div>


						</div>
				
					<div class="row col-12  mt-3 mx-auto" >
						<div class="col-12 "><div class="card bg-dark shadow mt-3"><img src="images/123.jpg"></div></div>
						<div class="col-12 "><div class="card bg-danger shadow mt-3"><img src="images/1234.jpg"></div></div>
				
					</div>


				</div>





			</div>
	
	
		<script src="js/main.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>

	</body>
	</html>