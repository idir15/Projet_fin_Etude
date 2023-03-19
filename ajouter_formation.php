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
	 <div class="row col-12" id="">

      <div class="col-12 col-md-9 ">
        <div class="tab-pane">


          
          <form method="post" id="formation_form">
          <div class="form-group row col-12">
            
              <div class="col-12 col-md-6">
                <label for="formation" style="margin-bottom:0.0rem">Formation</label>
                
                     <?php 
                    $reqw="SELECT * FROM formation";
                    $repw=mysqli_query($connection,$reqw);?>
                     
                   
                  <select class="form-control selectpicker border" data-live-search="true"  name="domaine_formation" id="domaine_formation" >
                    <option selected="true" disabled="true">choisir le domaine</option>
                    <?php
                    while($row=mysqli_fetch_assoc($repw)){?>
                    <option   value="<?php echo $row["ref_formation"];
                      ?>"> <?php echo $row["nom_formation"];
                      ?></option> <?php  }?>
                   
                  </select>
              </div>

              <div class="col-12 col-md-6">
                <label for="specialite" style="margin-bottom:0.0rem">Spécialité</label>
                    <input list="specialitelist" class="form-control" id="specialite" name="specialite">
  <datalist id="specialitelist" >
 
  </datalist>

              </div>
          </div>


          <div class="form-group row col-12">

            <div class="col-12 col-md-6">
              <label for="etablissement" style="margin-bottom:0.0rem">Etablissement formation</label>
              <input type="text" class="form-control" name="etablissement" id="etablissements"
                placeholder="etablissement" title="etablissement">
            </div>
            <div class="col-12 col-md-6">
              <label for="lieu" style="margin-bottom:0.0rem">Lieu formation</label>
              <input type="text" class="form-control" name="lieu_formation" id="lieu_formation"
                placeholder="Lieu formation ( Daira )" title="lieu_formation">
            </div>


          </div>

          <div class="form-group row col-12">
            <div class="col-12 col-md-6">
              <label for="date_d_f" style="margin-bottom:0.0rem">Date de début</label>
              <input type="date" class="form-control" id="date_d_f" name="date_d_f" value="2000-01-01">
            </div>
            <div class="col-12 col-md-6">
              <label for="date_f_f" style="margin-bottom:0.0rem">Date de fin</label>
              <input type="date" class="form-control" id="date_f_f" name="date_f_f" value="2000-01-01">
            </div>



          </div>
          <button class="btn btn-primary btn-sm px-4 py-2 ml-4 mr-3 formation_ajouter" id="formation_ajouter" type="submit" name="formation_ajouter">Ajouter formation</button>
    
          </form>
       


          <hr>
        </div>
        <!--/tab-pane-->
      </div>
      <div class="col-12 col-md-3 px-0 mx-0">
        <br>
        <?php
if(isset($_POST["formation_ajouter"])){
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

}
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
        <button type="button" class="btn btn-danger" name="delete" id="delete">Supprimer</button>
        <?php
}


?>


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

                     
      </div>
    </div>

    <?php include('footers.php')?>
    <script src="spec_for.js"></script>
	
</body>
</html>