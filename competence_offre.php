<?php
if(!isset($_SESSION)){
  session_start();
}
//$id_rec=$_SESSION['id_recruteur'];

$code_off= $_SESSION['code_offre'];


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

if(!empty($_POST)) {

   
    $comp_off=0;
    $nom_competence_offre= mysqli_real_escape_string($connection, $_POST["nom_competence_offre"]);
    

    


    $req_compt ="SELECT code_competence	from autre_competence WHERE nom_competence = '$nom_competence_offre' ";
    $resultcomp = mysqli_query($connection, $req_compt); 
    if($rowcomp = mysqli_fetch_assoc($resultcomp))
    {
      $comp_off=$rowcomp['code_competence'];
    }
   

    if ($comp_off == 0) {

       $query_add_comp= "INSERT INTO autre_competence (nom_competence) VALUES('$nom_competence_offre')";
      mysqli_query($connection, $query_add_comp);
 
     
       $req_compt ="SELECT code_competence	from autre_competence WHERE nom_competence = '$nom_competence_offre' ";
       $resultcomp = mysqli_query($connection, $req_compt); 
        if($rowcomp = mysqli_fetch_assoc($resultcomp))
        {
          $comp_off=$rowcomp['code_competence'];}
        }
   


    $query_ins_cmpt= "INSERT INTO competence_demandee (code_offre, code_competence) VALUES('$code_off', '$comp_off')";
    mysqli_query($connection, $query_ins_cmpt);

    if ($connection) {
 
  
      $reqAc = "SELECT cd.code_competence, ac.nom_competence    FROM autre_competence ac, competence_demandee cd WHERE cd.code_offre='$code_off' AND cd.code_competence = ac.code_competence";
      $repAc = mysqli_query($connection, $reqAc);
      
      
      }
    
       

   }
   ?> 
   
       
   <table class=" table-sm col-12">
     
      <thead class="bg-dark text-white">
       <tr>
         <th>Compétences</th>
         
       </tr>
     </thead>





     
     <tbody>


      
       <?php

if (mysqli_num_rows($repAc) > 0) {

while ($rowAc = mysqli_fetch_assoc($repAc)) {    ?>
<tr id="<?php echo $rowAc["code_competence"];?>"> 
<td> <?php echo $rowAc["nom_competence"];?> </td>
<td><input type="checkbox" name="id" value="<?php echo $rowAc['code_competence'];
?>"> </td>
         
    </tr>
    <?php

}
?>
</tbody></table>
<button type="button" class="btn btn-danger" name="delete_comp_offre" id="delete_comp_offre">Supprimer</button>
<?php } ?>


<script>
$(document).ready(function() {
$('#delete_comp_offre').click(function() {
   if(confirm("sup")){
     var id= [];
     $(':checkbox:checked').each(function(i){
       id[i]= $(this).val();
     });
     if (id.length === 0) {
       alert("selectionner une competence");
     }else{
       $.ajax({
       url: "delete_competence_offre.php",
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







