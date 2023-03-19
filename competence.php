<?php
if(!isset($_SESSION)){
    session_start();
  }
  $idcand=$_SESSION['id_candidat'];




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

   

    $nom_competence= mysqli_real_escape_string($connection, $_POST["nom_competence"]);
    $comp=0;

    


    $req_compt ="SELECT code_competence	from autre_competence WHERE nom_competence = '$nom_competence' ";
    $resultcomp = mysqli_query($connection, $req_compt); 
    if($rowcomp = mysqli_fetch_assoc($resultcomp))
    {
      $comp=$rowcomp['code_competence'];
    }
   

    if ($comp == 0) {

       $query_add_comp= "INSERT INTO autre_competence (nom_competence) VALUES('$nom_competence')";
      mysqli_query($connection, $query_add_comp);
 
     
       $req_compt ="SELECT code_competence from autre_competence WHERE nom_competence = '$nom_competence' ";
       $resultcomp = mysqli_query($connection, $req_compt); 
        if($rowcomp = mysqli_fetch_assoc($resultcomp))
        {
          $comp=$rowcomp['code_competence'];}
        }
   


    $query_ins_cmpt= "INSERT INTO competence_aquise (id_candidat, code_competence) VALUES('$idcand', '$comp')";
    mysqli_query($connection, $query_ins_cmpt);

    if ($connection) {
 
  
      $reqAc = "SELECT ca.code_competence, ac.nom_competence FROM autre_competence ac, competence_aquise ca WHERE ca.id_candidat='$idcand' AND ca.code_competence = ac.code_competence";
      $repAc = mysqli_query($connection, $reqAc);
      
      
      }
    
       

   }
   ?> 
   
   <div class="">
              <h6 class="bg-dark text-white py-1">Mes competence</h6><br>

      
       <?php
       

if (mysqli_num_rows($repAc) > 0) {

while ($rowAc = mysqli_fetch_assoc($repAc)) {    ?>
    <label><?=$rowAc["nom_competence"].','?></label>
    <?php

}
?>
          
              
              </div>

<?php } ?>


<script>
$(document).ready(function() {
$('#delete_comp').click(function() {
   if(confirm("sup")){
     var id= [];
     $(':checkbox:checked').each(function(i){
       id[i]= $(this).val();
     });
     if (id.length === 0) {
       alert("supprimer une competence");
     }else{
       $.ajax({
       url: "delete_competence.php",
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








              
          
          