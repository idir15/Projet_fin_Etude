<?php
require "bd.php";
$id =$_POST["wilayaaa"];

	$query = "SELECT * FROM daira where num_wilaya='$id'";
	$do = mysqli_query($connection,$query);
	$count = mysqli_num_rows($do);

	if ($count>0){
		while($row = mysqli_fetch_array($do)){
			echo '<option value="'.$row['num_daira'].'">'.$row['nom_daira'].'</option>';
		}
		
	}else{
		echo '<option>pas de daira diponible</option>';
		
	}




?>