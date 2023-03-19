<?php require  "bd.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site web</title>
  </head>
  <body>
    <h2>Mot de passe oublié</h2>
    <form method="post" >
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <button type="submit">Envoyer</button>
      </div>
    </form>
  </body>
</html>

<?php

if (isset($_POST['email'])) 
{  
  $e=$_POST['email'];
 
   $tok=uniqid();
   $url= "http://localhost/ghiles/token?token=$tok";

   $message= "Bonjour, voici votre lien pour la rénitialisation du mot de passe :$url";
   $headers = 'Content-type:text/plain; charset="utf-8"'."";

   if (mail($_POST['email'], 'mot de passe oublié', $message, $headers))
    {
   
     $sql = "UPDATE candidat SET token='$tok' WHERE email='$e'";
     $ret = mysqli_query($connection, $sql);
     echo "mail envoyé";
     

   }
   else{
     echo "Une erreur est survenue...";
   }

 }

 ?>
