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
<div class="row col-12 " id="Form4">
            <div class="col-12 col-md-6 mx-auto  ">
              <ul class="nav nav-tabs">
                <li>
                  <p data-toggle="tab" class="text-danger">&emsp;Langues &emsp;</p>
                </li>
              
              </ul>
              <div class="tab-pane">
                <br>
                <form class="form" action="##" method="post" id="langue_Form" >
                  <div class="form-group row col-12">
                    <div class="col-12 col-md-10">
                      <label for="formation" style="margin-bottom:0.0rem">Langue</label>
                      <div class="select-formation">
                        <select id="nom_langue" name="nom_langue" class="form-control">
                          <option value="">All Category</option>
                          <option value="francais">francais</option>
                          <option value="anglais">anglais</option>
                          <option value="arab">arab</option>
                          <option value="russe">russe</option>
                        </select>
                      </div>
                    </div>
                    
                 
                  </div>
                  <div class="form-group row col-12">
                       <div class="col-12 col-md-10">
                      <label for="formation" style="margin-bottom:0.0rem">Niveau</label>
                      <div class="select-formation">
                        <select  id="niveau_langue" name="niveau_langue" class="form-control">
                          <option value="">All Category</option>
                          <option value="A">a</option>
                          <option value="B">b</option>
                          <option value="C">c</option>
                        </select>
                      </div>
                    </div>
                    
                    
                  </div>
                    <div class="form-group row col-12">
                 
                    
                    <div class="col-12 col-md-6">
                      <button type="" class="btn btn-primary">Ajouter</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-md-3">
            <?php
$niveau_langue ='';

if(isset($_POST["nom_langue"])) {

    
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
          <button type="button" class="btn btn-danger"  name="delete_lng" id="delete_lng">Supprimer</button>
  
          <?php
  }
  
  
  ?>

  
          </div>
          <!-- form5-->
          <div class="row col-12" id="Form5">
            <div class="col-12 col-md-6 mx-auto">
              <ul class="nav nav-tabs">
                <li>
                  <p data-toggle="tab" class="text-danger">&emsp;Autre compétences &emsp;</p>
                </li>
              </ul>
              <div class="tab-pane">
                <br>
                <form class="form" action="##" method="post" id="autre_competenceForm" >
                  <div class="form-group row col-12">
                <div class="col-12 col-md-10">
                      <label for="autre_competence" style="margin-bottom:0.0rem">Autre compétence</label>
                      <input type="text" class="form-control" name="nom_competence" id="nom_competence" placeholder="autre competence"
                      title="vos competence">
                    </div>
                  </div>
                  <div class="form-group row col-12">
                    
                    <div class="col-12 col-md-6">
                      <button name="autre_comp" type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                  </div>
                  
          
                </form>
                            <hr>
              </div>
            </div>
            <div class="col-12 col-md-3">
            <?php

if(isset($_POST["autre_comp"])) {

   

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
   


    $query_ins_cmpt= "INSERT INTO competence_aquise (id_candidat, code_competence) VALUES('$id_cand', '$comp')";
    mysqli_query($connection, $query_ins_cmpt);
  }
    if ($connection) {
 
  
      $reqAc = "SELECT ca.code_competence, ac.nom_competence FROM autre_competence ac, competence_aquise ca WHERE ca.id_candidat='$id_cand' AND ca.code_competence = ac.code_competence";
      $repAc = mysqli_query($connection, $reqAc);
      
      
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
<button type="button" class="btn btn-danger" name="delete_comp" id="delete_comp">Supprimer</button>
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




              
            </div>
          </div>

          
          

    <?php include('footers.php')?>

	
</body>
</html>