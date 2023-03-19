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

$domaine_formation = mysqli_real_escape_string($connection, $_POST["domaine_formation"]);
$specialite =        mysqli_real_escape_string($connection, $_POST["specialite"]);
$etablissement = 	 mysqli_real_escape_string($connection, $_POST["etablissement"]); 
$date_d_f =      	 mysqli_real_escape_string($connection, $_POST["date_d_f"]);
$date_f_f =       	 mysqli_real_escape_string($connection, $_POST["date_f_f"]);
$refs=0;

$code_s=0;



//$domaine_formation ='idir';
//$specialite = 'jsk';
//$etablissement ='gggnhg'; 
//$date_d_f =       'fff';
//$date_f_f =       'fff';
//$refs=0;



$req_formation ="SELECT ref_formation from formation WHERE nom_formation ='$domaine_formation' ";
$resultF = mysqli_query($connection, $req_formation);

if($rowF = mysqli_fetch_assoc($resultF)) {
$reff =$rowF['ref_formation'];}




$req_specialite ="SELECT code_specialite from specialite WHERE nom_specialite = '$specialite' ";
$resultS = mysqli_query($connection, $req_specialite);

if($rowS = mysqli_fetch_assoc($resultS)) {
$code_s=$rowS['code_specialite'];}


if ($code_s==0) {

  $query_specialite_add= "INSERT INTO specialite (nom_specialite, ref_formation) VALUES('$specialite', '$reff')";
  mysqli_query($connection, $query_specialite_add);



  $re_sp="SELECT code_specialite from specialite WHERE nom_specialite = '$specialite' ";
  $resultS1 = mysqli_query($connection, $re_sp);
  if($rowS1 = mysqli_fetch_assoc($resultS1)) {
    $code_s=$rowS1['code_specialite'];}
}

 $req_add_specialite_aquise= "INSERT INTO specialite_aquise (id_candidat, code_specialite, etablissement, date_debut_formation, date_fin_formation) VALUES('$id_cand', '$code_s', '$etablissement', '$date_d_f', '$date_f_f')";
 mysqli_query($connection, $req_add_specialite_aquise);


  if ($connection) {
  $req = "SELECT * FROM specialite s, specialite_aquise sa WHERE sa.id_candidat='$id_cand' AND s.code_specialite=sa.code_specialite ";
  $rep = mysqli_query($connection, $req);

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

if (mysqli_num_rows($rep) > 0) {

    while ($row = mysqli_fetch_assoc($rep)) {
     
     
    ?>
     <tr id="<?php echo $row["code_specialite"];?>"> 
            <td> <?php echo $row["nom_specialite"];?> </td>
            
           

                
                <td><input type="checkbox" name="id" value="<?php echo $row['code_specialite'];?>"> </td>
                 
            </tr>
            <?php
    }
?>

            
          </tbody>

        </table>

        <?php
}


?>
<button type="button" class="btn btn-danger" name="delete" id="delete">Supprimer</button>

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
            url: "delete_formation.php",
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
 


  


    


