<?php
if(!isset($_SESSION)){
  session_start();
}

$idC=$_SESSION['id_candidat'];



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

<?php if(isset($_POST["modifier_info"])){
$FirstName = mysqli_real_escape_string($connection, $_POST["first_name"]);
$LastName = mysqli_real_escape_string($connection, $_POST["last_name"]);
$sexe = mysqli_real_escape_string($connection, $_POST["sexe"]);
$DateDeNaissance = mysqli_real_escape_string($connection,$_POST["date_naissance"]) ;
$Adresse = mysqli_real_escape_string($connection, $_POST["adresse"]) ;
$wilaya = mysqli_real_escape_string($connection, $_POST["wilaya"]) ;
$daira = mysqli_real_escape_string($connection, $_POST["daira"]) ;
$Phone = mysqli_real_escape_string($connection, $_POST["phone"]) ;

if((!empty($_POST["first_name"])) && (!empty($_POST["last_name"])) &&  (!empty($_POST["sexe"])) && (!empty($_POST["date_naissance"])) && (!empty($_POST["adresse"])) &&  (!empty($_POST["wilaya"])) &&(!empty($_POST["daira"])) && (!empty($_POST["phone"])) )
{

    $req_wilaya ="SELECT w.num_wilaya from wilaya w WHERE w.nom_wilaya = '$wilaya'";
    $resultW = mysqli_query($connection, $req_wilaya);

    if($row = mysqli_fetch_assoc($resultW)) {
        $w=$row['num_wilaya']; } 

    $req_daira ="SELECT d.num_daira from daira d WHERE d.nom_daira = '$daira' ";
    $resultD = mysqli_query($connection, $req_daira);

    if($rowd = mysqli_fetch_assoc($resultD)) {
        $d=$rowd['num_daira']; }
   
        
   
        $query_inscription = "UPDATE candidat SET nom ='$LastName', prenom = '$FirstName', date_naissance= '$DateDeNaissance', sexe='$sexe', adresse = '$Adresse', num_daira ='$d' , num_tel ='$Phone' WHERE id_candidat ='$idC' ";
        mysqli_query($connection, $query_inscription);
      
        


}} ?>
  <div class="row col-12 px-0 mx-0" id="Form1">
            <div class="col-12 text-center">
              <div class="col-12 col-lg-9">
                
              
                <h4 data-toggle="tab" class=" " style=" font-family: 'calibri', 'Times', 'serif'; color: darkblue">Informations personnelles  </h4>
                
              </div>
           <hr>
              
            </div>

            <div class=" col-12 col-sm-3 mb-5">
              
              
              
              <form id="submitForm">
                <div class="form-group mb-5 ">
                  <div class="custom-file text-center">
                    <input type="file" class="custom-file-input d-none" name="image" id="image">
                    <label for="image" id="imageView" class=" text-white ph mt-4"> <img src="images/userprofile.png"
                      class="avatar d-none d-md-inline mt-2" alt="avatar" style=" float: none;
                      
                      width: 190px;
                      height: 190px; ">
                      <img src="https://mongenealogiste.com/images/userprofile.png"
                      class="avatar rounded-circle d-md-none d-inline mb-5 " alt="avatar" style="float: none;
                      
                      width: 60%;
                      height: 60%;">
                    </label>
                  </div>
                </div>
              </div>
              </form>
              </hr><br>
          <div class="col-12 col-sm-9 ">
           
            <div class="tab-pane ">
              <br>
              <form action="" id="contactform" method="post">
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="first_name" style="margin-bottom:0.0rem">Prenom</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="<?=$p?>"
                    title="enter your first name if any.">
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                    <label for="last_name" style="margin-bottom:0.0rem">Nom</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?=$n?>"
                    title="enter your last name if any.">
                  </div>
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="sexe" style="margin-bottom:0.6rem">sexe</label>
                    <div class="form-group label-floating ">
                      <input type="radio" id="sexe" name="sexe" value="male" checked="checked">
                      <label for="male">Male</label>&emsp;
                      <input type="radio" id="sexe" name="sexe" value="female">
                      <label for="female">Female</label>
                    </div>
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                    <label for="date" style="margin-bottom:0.0rem">Date de naissance</label>
                    <input type="date" class="form-control" name="date_naissance" id="date_naissance"  >
                  </div>
                </div>
                <div class="form-group row col-12">
                   <div class="col-12 col-md-5">
                    <label for="phone" style="margin-bottom:0.0rem">N° Téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="N° Téléphone" "
                    title="enter your phone number if any.">
                  </div>
                   &emsp;
                  <div class="col-12 col-md-5  ">
                    <label for="adresse" style="margin-bottom:0.0rem">Adresse</label>
                    <input type="text" class="form-control" st name="adresse" id="adresse" placeholder="adresse" 
                    title="entrer votre adresse.">
                  </div>
                 
                  
                </div>
                <div class="form-group row col-12">
                  <div class="col-12 col-md-5">
                    <label for="ville" style="margin-bottom:0.0rem">Wilaya</label>
                    <?php
                    $reqw="SELECT * FROM wilaya";
                    $repw=mysqli_query($connection,$reqw);?>
                    
                    
                    <select name="select" class="form-control selectpicker border" data-live-search="true"  name="wilaya" id="wilaya" >
                    
                      <?php
                      while($row=mysqli_fetch_assoc($repw)){?>
                      <option   value="<?php echo $row["num_wilaya"];
                        ?>"><?php echo $row["nom_wilaya"];
                      ?></option> <?php  }?>
                      
                    </select>
                  </div>
                  &emsp;
                  <div class="col-12 col-md-5">
                      <?php 
                    $reqwill="SELECT * FROM wilaya";
                    $repwill=mysqli_query($connection,$reqwill);
                    if($rowwill=mysqli_fetch_assoc($repwill)){
                      $will=$rowwill['num_wilaya'];
                      } 

                      $reqdaa="SELECT * FROM daira where num_wilaya='$will'";
                      $repdaa=mysqli_query($connection,$reqdaa);
                      ?>
                    <label for="daira" style="margin-bottom:0.0rem">Daira</label>
                    <select name="select" class="form-control daira "  name="daira" id="daira" >
                      
                      <?php
                    while($rowdaa=mysqli_fetch_assoc($repdaa)){?>
                    <option   value="<?php echo $rowdaa["num_daira"];
                      ?>"><?php echo $rowdaa["nom_daira"];
                    ?></option> <?php  }?>
                      
                    </select>
                  </div>
                </div>
              
                <div class="form-group row col-12 text-center">
                  <button class="btn btn-primary btn-sm ml-3 px-4 py-2 ajouterinf" id="to_form2" type="submit" name="modifier_info">valider</button>
                                  </div>
              </form>
            
              <hr>
              <div class="result">
              </div>
            </div>
            <!--/tab-pane-->
          </div>
        </div>


	

    <?php 
    include('footers.php'); ?>
    <script src="spec_for.js"></script>
	
</body>
</html>