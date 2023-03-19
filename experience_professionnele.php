<?php if (session_start()) {
$id_cand=$_SESSION['id_candidat'];
}



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

require "bd.php";



$poste = mysqli_real_escape_string($connection, $_POST["poste_de_travail"]);
$entreprise = mysqli_real_escape_string($connection, $_POST["entreprise"]);
$date_debut = mysqli_real_escape_string($connection, $_POST["date_d_e"]);
$date_fin = mysqli_real_escape_string($connection,$_POST["date_f_e"]) ;



  

$Rex ='0';
 $req_exp ="SELECT ref_experience from experience_professionnele WHERE poste = '$poste' ";
 $resultExp = mysqli_query($connection, $req_exp); 
 if($rowexp = mysqli_fetch_assoc($resultExp)) {
 $Rex=$rowexp['ref_experience'];}


 
 if ($Rex==0) {

  $query_add_expr= "INSERT INTO experience_professionnele (poste) VALUES('$poste')";
  $e=mysqli_query($connection, $query_add_expr);


  $req_epr="SELECT ref_experience from experience_professionnele WHERE poste = '$poste' ";
  $resultExpp = mysqli_query($connection,  $req_epr); 
  if($rowexpp = mysqli_fetch_assoc($resultExpp)) {
  $Rex=$rowexpp['ref_experience'];}
}

 

     $query_ins_exp= "INSERT INTO experience_aquise (id_candidat, ref_experience, entreprise, date_debut, date_fin) VALUES('$id_cand', '$Rex', '$entreprise', '$date_debut', '$date_fin')";
      $a=mysqli_query($connection, $query_ins_exp);
     
        

      var_dump($Rex);
    
  if ($connection) {
  $reqE = "SELECT * FROM experience_aquise WHERE id_candidat='$id_cand'";
  $repE = mysqli_query($connection, $reqE);

  }

  ?>
     
     <table class=" table-sm col-12">
          <thead class="bg-dark text-white">
            <tr>
              <th>Expériences</th>
              
            </tr>
          </thead>





          
          <tbody>
   

           
            <?php

if (mysqli_num_rows($repE) > 0) {

    while ($rowE = mysqli_fetch_assoc($repE)) {
     
     
    ?>
     <tr id="<?php echo $rowE["ref_experience"];?>"> 
            <td> <?php echo $rowE["entreprise"];?> </td>
           

                
                <td><input type="checkbox" name="id" value="<?php echo $rowE["ref_experience"];?>"> </td>
                 
            </tr>
            <?php
    }
?>

            
          </tbody>

        </table>

        <?php
}


?>
<button type="button" class="btn btn-danger" name="deleteE" id="deleteE">Supprimer</button>

<script>
$(document).ready(function() {
    $('#deleteE').click(function() {
        if(confirm("sup")){
          var id= [];
          $(':checkbox:checked').each(function(i){
            id[i]= $(this).val();
          });
          if (id.length === 0) {
            alert("selectionner une experience");
          }else{
            $.ajax({
            url: "delete_exp.php",
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