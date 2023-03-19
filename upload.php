<?php
if(!isset($_SESSION)){
    session_start();
    }
$idC=$_SESSION['id_candidat'];
	
	// Include database connectivity
	
	include_once('bd.php');
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
		@media screen and (max-width: 767px) {
        .imagg{
    width:60%; 
    height:60%;
     border-radius: 50%; 
    }}
    	@media screen and (min-width: 768px) {
        .imagg{
    width:190px; 
    height:190px;
      
    }}
		
	</style>

	
</head>
<body>
	
</body>
</html>
	<?php
	
	// upload file using move_uploaded_file function in php
	
	if (!empty($_FILES['image']['name'])) {

	    $fileName = $_FILES['image']['name'];
		
	    $fileExt = explode('.', $fileName);
	    $fileActExt = strtolower(end($fileExt));
	    $allowImg = array('png','jpeg','jpg');
	    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
	    $filePath = 'images/candidat/'.$fileNew; 

	if (in_array($fileActExt, $allowImg)) {
	    if ($_FILES['image']['size'] > 0  && $_FILES['image']['error']==0) {
           
            $query= "UPDATE candidat SET imagee ='$fileNew' WHERE id_candidat ='$idC' ";
  
	        if ($connection->query($query)) {
		    move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
    		    echo '<img class="imagg" src="'.$filePath.'" />';
	        }else{
		    return false;
	        }	
	      }else{
	        return false;
	    }
	}else{	
    	    return false;
	}
    }

?>