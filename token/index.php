<?php 
echo "bonjour";

require "../bd.php"; 
$email='';

if (isset($_GET['token']) && $_GET['token'] != '') 
{
	$token=$_GET['token'];
	$req = "SELECT email from candidat WHERE token = '$token'";
    $result = mysqli_query($connection, $req);
    if($row = mysqli_fetch_assoc($result))
    {
		$email=$row['email'];
            
    }
if ($email)
     {
?>
     	<!DOCTYPE html>
     	<html>
     	<head>
     		<title></title>
     	</head>
     	<body>
     		<form method="post">
     			<label for="newpassword"> new password</label>
     			<input type="text" name="newpassword">
     			<button  name="sebmit" >ok</button>
     		</form>
     	
     	</body>
     	</html>
<?php
     } 
}





if (isset($_POST['sebmit']))
{

	
	
	$pwd=$_POST['newpassword'];
	$hachedpassword = password_hash($pwd, PASSWORD_DEFAULT,array('cost' => 7));
	$sql = "UPDATE candidat SET mdp = '$hachedpassword', token=NULL WHERE email= '$email'";
	$ret = mysqli_query($connection, $sql);
	
	



    echo "mot de passe modifier";

}

?>

