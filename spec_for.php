<?php
require "bd.php";
$id =$_POST["formationREF"];

	$query = "SELECT * FROM specialite where ref_formation='$id'";
	$do = mysqli_query($connection,$query);
	$count = mysqli_num_rows($do);

	if ($count>0){
		while($row = mysqli_fetch_array($do)){
			echo '<option   value="'.$row['nom_specialite'].'">';
		}
		
	}else{
		echo '<option value="pas de spécialté disponible ">pas de specialite diponible </option>';
		
	}




?>