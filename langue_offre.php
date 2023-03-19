<?php
session_start();
$id_rec=$_SESSION['id_recruteur'];
$codoff= $_SESSION['code_offre'];


require "bd.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    


<?php

if (!empty($_POST)) {

  
   $nom_langue_offre= mysqli_real_escape_string($connection, $_POST["nom_langue_offre"]);
    $niveau_langue_offre  = mysqli_real_escape_string($connection, $_POST["niveau_langue_offre"]);



    $req_lang = "SELECT code_langue from competence_linguistique WHERE nom_langue = '$nom_langue_offre'";
    $result_lang = mysqli_query($connection, $req_lang);
    if ($rowl = mysqli_fetch_assoc($result_lang)) {
        $cLang = $rowl['code_langue'];
    }
    
        $query_add_lang = "INSERT INTO langue_demandee (code_offre, code_langue, niveau) VALUES('$codoff', '$cLang', '$niveau_langue_offre')";
        mysqli_query($connection, $query_add_lang);
    

}


if ($connection) {
 
  
  $reql = "SELECT cl.nom_langue, cl.code_langue  FROM langue_demandee ld, competence_linguistique cl WHERE ld.code_offre='$codoff' AND ld.code_langue = cl.code_langue ";
  $repl = mysqli_query($connection, $reql);
  
  
  }

  ?>
       
       <table class=" table-sm col-12">
     
            <thead class="bg-dark text-white">
              <tr>
                <th>Langues</th>
                
              </tr>
            </thead>
  
  
  
  
  
            
            <tbody>
     
  
             
              <?php
  
  if (mysqli_num_rows($repl) > 0) {
  
  while ($rowl = mysqli_fetch_assoc($repl)) {    ?>
    <tr id="<?php echo $rowl["code_langue"];?>"> 
      <td> <?php echo $rowl["nom_langue"];?> </td>
      <td><input type="checkbox" name="id" value="<?php echo $rowl['code_langue'];
      ?>"> </td>
                
           </tr>
           <?php
  
  }
  ?>
  </tbody></table>
  <button type="button" class="btn btn-danger" name="delete_lan_offre" id="delete_lan_offre">sup</button>
  <?php } ?>
  
  
  <script>
  $(document).ready(function() {
      $('#delete_lan_offre').click(function() {
          if(confirm("sup")){
            var id= [];
            $(':checkbox:checked').each(function(i){
              id[i]= $(this).val();
            });
            if (id.length === 0) {
              alert("selectionner une langue");
            }else{
              $.ajax({
              url: "delete_langue_offre.php",
              method: "POST",
              data: {id:id},
             
              success: function() {
                for(var i=0; i<id.length; i++)
                {
                  $('tr#'+id[i]+'').css('background-color', '#ccc');
                  $('tr#'+id[i]+'').fadeOut('slow');
  
                }
              }
              });
  
            }
         
          }
      });
  });
  
  </script>
  
  
  
   
  
  
  
  
  
  
  </body>
  </html>
   

  
      
  
  
  
