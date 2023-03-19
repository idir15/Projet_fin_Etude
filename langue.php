<?php if (session_start()) {
$id_cand=$_SESSION['id_candidat'];
}

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
$niveau_langue ='';

if (!empty($_POST)) {

    
    $nom_langue=      mysqli_real_escape_string($connection, $_POST["nom_langue"]);
    $niveau_langue  = mysqli_real_escape_string($connection, $_POST["niveau_langue"]);
    //$nom_langue=   'francais';   
    //$niveau_langue  = 'a' ;


    $req_lang = "SELECT code_langue from competence_linguistique WHERE nom_langue = '$nom_langue'";
    $result_lang = mysqli_query($connection, $req_lang);
    if ($rowl = mysqli_fetch_assoc($result_lang)) {
        $cLang = $rowl['code_langue'];}

        $query_add_lang = "INSERT INTO langue_maitrisee (id_candidat, code_langue, niveau) VALUES('$id_cand', '$cLang', '$niveau_langue')";
        mysqli_query($connection, $query_add_lang);

    

}



if ($connection) {
    $reqL  = "SELECT lm.code_langue, cl.nom_langue from competence_linguistique cl, langue_maitrisee lm WHERE lm.code_langue = cl.code_langue AND id_candidat='$id_cand'";
    $repL = mysqli_query($connection, $reqL);
  
    }
  
    ?>
       
       <table class=" table-sm col-12">
            <thead class="bg-dark text-white">
              <tr>
                <th>Langue</th>
                
              </tr>
            </thead>
  
  
  
  
  
            
            <tbody>
     
  
             
              <?php
  
  if (mysqli_num_rows($repL) > 0) {
  
      while ($rowL = mysqli_fetch_assoc($repL)) {
       
       
      ?>
       <tr id="<?php echo $rowL["code_langue"];?>"> 
              <td> <?php echo $rowL["nom_langue"];?> </td>
              
             
  
                  
                  <td><input type="checkbox" name="id" value="<?php echo $rowL['code_langue'];?>"> </td>
                   
              </tr>
              <?php
      }
  ?>
  
              
            </tbody>
  
          </table>
  
          <?php
  }
  
  
  ?>
  <button type="button" class="btn btn-danger"  name="delete_lng" id="delete_lng">Supprimer</button>
  
  <script>
  $(document).ready(function() {
      $('#delete_lng').click(function() {
          if(confirm("sup")){
            var id= [];
            $(':checkbox:checked').each(function(i){
              id[i]= $(this).val();
            });
            if (id.length === 0) {
              alert("selectionner une langue");
            }else{
              $.ajax({
              url: "delete_langue.php",
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
   
  
  
    
  
  
      
  
  
  
