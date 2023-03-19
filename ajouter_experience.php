<?php
if(!isset($_SESSION)){
  session_start();
}

$id_cand=$_SESSION['id_candidat'];

require "bd.php";
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php include("headerC.php")?>
<style>

 .btn-light { background-color: white }
  .btn-light:hover{
    background-color: white
  }
    .btn-light:focus{
    background-color: white
  }
  
</style>

<br>

<br>
	 <div class="row col-12" id="Form3">

      <div class="col-12 col-md-9">
      
        <div class="tab-pane">

          <br>
          <form class="form" action="##" method="post" id="experience_form">
            <div class="form-group row col-12">

              <div class="col-12 col-md-6">
                <label for="poste_de_travail" style="margin-bottom:0.0rem">Poste</label>
                <input type="text" class="form-control" name="poste_de_travail" id="poste_de_travail"
                  placeholder="Poste" title="poste de travail">
              </div>

              <div class="col-12 col-md-6">
                <label for="entreprise" style="margin-bottom:0.0rem">Entreprise</label>
                <input type="text" class="form-control" name="entreprise" id="entreprise" placeholder="Entreprise"
                  title="Entreprise">
              </div>


            </div>


            <div class="form-group row col-12">

              <div class="col-12 col-md-6">
                <label for="date_d_t" style="margin-bottom:0.0rem">Date de début</label>
                <input type="date" class="form-control" id="date_d_e" name="date_d_e" value="2005-01-01">
              </div>

              <div class="col-12 col-md-6">
                <label for="date_f_t" style="margin-bottom:0.0rem">Date de fin</label>
                <input type="date" class="form-control" name="date_f_e" id="date_f_e" value="2010-01-01">
              </div>
            </div>

            <button class="btn btn-primary btn-sm px-4 py-2 ml-4 mr-3 ajouter_experience" id="ajouter_experience"
              type="submit" name="ajouter_experience">Ajouter experience</button>
           

          </form>


         
          <div class="resEXP"> </div>
          <hr>
        </div>
      </div>
      <div class="col-12 col-md-3 px-0 mx-0">
        <br>
       
<?php
if(isset($_POST["ajouter_experience"])){

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
     
        

  
    }
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


<button type="button" class="btn btn-danger" name="deleteE" id="deleteE">Supprimer</button>
<?php
}


?>
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


      </div>
    </div>


          
          

    <?php include('footers.php')?>

	
</body>
</html>