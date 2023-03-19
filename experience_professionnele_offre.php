<?php

session_start();  
$idR=$_SESSION['id_recruteur'];
$codoff=$_SESSION['code_offre'];


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

    $domaine_experience_offre = mysqli_real_escape_string($connection, $_POST["domaine_experience_offre"]);
    $nombre_annee = mysqli_real_escape_string($connection, $_POST["nombre_annee"]);
    
    $ex_off =0;
     $req_exp ="SELECT ref_experience from experience_professionnele WHERE poste = '$domaine_experience_offre' ";
     $resultExp = mysqli_query($connection, $req_exp); 
     if($rowexp = mysqli_fetch_assoc($resultExp)) {
     $ex_off=$rowexp['ref_experience'];}


     if ($ex_off==0) {

        $query_add_expr= "INSERT INTO experience_professionnele (poste) VALUES('$domaine_experience_offre')";
        $e=mysqli_query($connection, $query_add_expr);
     
      
        $req_epr="SELECT ref_experience from experience_professionnele WHERE poste = '$domaine_experience_offre' ";
        $resultExp = mysqli_query($connection,  $req_epr); 
        if($rowexp = mysqli_fetch_assoc($resultExp)) {
        $ex_off=$rowexp['ref_experience'];}
      }
    


     $query_ins_exp= "INSERT INTO experience_requise (code_offre, ref_experience, nombre_annee) VALUES('$codoff', '$ex_off', '$nombre_annee')";
     mysqli_query($connection, $query_ins_exp);
     
        

    }


    if ($connection) {
 
      # code...
    
    $reqf = "SELECT  e.poste, er.ref_experience FROM experience_requise er, experience_professionnele e WHERE er.code_offre='$codoff' AND er.ref_experience =e.ref_experience ";
    $repEXP = mysqli_query($connection, $reqf);
    
    
    }
    ?>
         
         <table class=" table-sm col-12">
              <thead class="bg-dark text-white">
                <tr>
                  <th>Experiences</th>
               
                </tr>
              </thead>
    
    
    
    
    
              
              <tbody>
       
    
               
                <?php
    
    if (mysqli_num_rows($repEXP) > 0) {
    
    while ($rowEXP = mysqli_fetch_assoc($repEXP)) {    ?>
      <tr id="<?php echo $rowEXP["ref_experience"];?>"> 
        <td> <?php echo $rowEXP["poste"];?> </td>
        <td><input type="checkbox" name="id" value="<?php echo $rowEXP['ref_experience'];
        ?>"> </td>
                  
             </tr>
             <?php
    
    }
    ?>
    </tbody></table>
    <button type="button" class="btn btn-danger" name="delete_exp_offre" id="delete_exp_offre">Supprimer</button>
    <?php } ?>
    
    
    <script>
    $(document).ready(function() {
        $('#delete_exp_offre').click(function() {
            if(confirm("sup")){
              var id= [];
              $(':checkbox:checked').each(function(i){
                id[i]= $(this).val();
              });
              if (id.length === 0) {
                alert("selectionne une experience");
              }else{
                $.ajax({
                url: "delete_exp_offre.php",
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
     
    
      
    
    
        
    
    
    
  