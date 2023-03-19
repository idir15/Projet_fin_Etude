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


  
  //var_dump($r);die(); 


$code_s=0;


$domaine_formation_offre = mysqli_real_escape_string($connection, $_POST["domaine_formation_offre"]);

$specialite_offre = mysqli_real_escape_string($connection, $_POST["specialite_offre"]);


$req_formation ="SELECT ref_formation FROM formation WHERE nom_formation = '$domaine_formation_offre' ";
$resultF = mysqli_query($connection, $req_formation);

if($rowF = mysqli_fetch_assoc($resultF)) {
$reff=$rowF['ref_formation'];}


 
$req_specialite ="SELECT code_specialite from specialite WHERE nom_specialite = '$specialite_offre' ";
$resultS = mysqli_query($connection, $req_specialite);

if($rowS = mysqli_fetch_assoc($resultS)) {
$code_s=$rowS['code_specialite'];}



if ($code_s==0) {

  $query_specialite_add= "INSERT INTO specialite (nom_specialite, ref_formation) VALUES('$specialite_offre', '$reff')";
  mysqli_query($connection, $query_specialite_add);



  $re_sp="SELECT code_specialite from specialite WHERE nom_specialite = '$specialite_offre' ";
  $resultS1 = mysqli_query($connection, $re_sp);
  if($rowS1 = mysqli_fetch_assoc($resultS1)) {
  $code_s=$rowS1['code_specialite'];}
}

$codoff= $_SESSION['code_offre'];




 $req_add_specialite_requise= "INSERT INTO specialite_requise (code_specialite, code_offre) VALUES('$code_s', '$codoff')";
 mysqli_query($connection, $req_add_specialite_requise);
 //var_dump($x);


if ($connection) {
 
  # code...

$reqf = "SELECT  f.nom_formation, sr.code_specialite, s.nom_specialite FROM specialite_requise sr, specialite s, formation f WHERE sr.code_offre='$codoff' AND s.ref_formation=f.ref_formation AND sr.code_specialite= s.code_specialite";
$repf = mysqli_query($connection, $reqf);


}
?>
     
     <table class=" table-sm col-12">
          <thead class="bg-dark text-white">
            <tr>
              <th>Formation</th>
              
            </tr>
          </thead>





          
          <tbody>
   

           
            <?php

if (mysqli_num_rows($repf) > 0) {

while ($rowf = mysqli_fetch_assoc($repf)) {    ?>
  <tr id="<?php echo $rowf["code_specialite"];?>"> 
    <td> <?php echo $rowf["nom_specialite"];?> </td>
    <td><input type="checkbox" name="id" value="<?php echo $rowf['code_specialite'];
    ?>"></td>
              
         </tr>
         <?php

}
?>
</tbody></table>
<button class="btn btn-danger" type="button" name="delete" id="delete">Supprimer</button>
<?php } ?>


<script>
$(document).ready(function() {
    $('#delete').click(function() {
        if(confirm("sup")){
          var id= [];
          $(':checkbox:checked').each(function(i){
            id[i]= $(this).val();
          });
          if (id.length === 0) {
            alert("selectionner une formation");
          }else{
            $.ajax({
            url: "delete_formation _offre.php",
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
 

  


    


