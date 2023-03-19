<?php

require  "bd.php";

// pour inscription

if(isset($_POST["inscrire"])){
    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $prenom = mysqli_real_escape_string($connection, $_POST["prenom"]);
    $email = mysqli_real_escape_string($connection,$_POST["email"]) ;
    $password = mysqli_real_escape_string($connection,$_POST["password"]) ;
    $password1 = mysqli_real_escape_string($connection, $_POST["password1"]) ;
    $nom_entreprise= mysqli_real_escape_string($connection, $_POST["nom_entreprise"]) ;
    $role= $_POST["role"];
    
    //vérification des champs
    
        $errors = [];


        if(empty($_POST["name"])){
            $errors['name'] = "Le nom doit contenir au moins 3 lettres" ; 
        }  
        if (!preg_match("#^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$#",$name)) {
          
            $errors['name'] = "Le nom doit contenir au moins 3 lettres" ; 
        }

        if(empty($_POST["prenom"])){
            $errors['prenom'] = "Le Prenom doit contenir au moins 3 lettres" ; 
        }

        if (!preg_match("#^[a-zA-Zéçàè]+[ \-']?[[a-zA-Zéçàè]+[ \-']?]*[a-zA-Zéçàè]+[ ]?$#",$prenom)) {
          
            $errors['prenom'] = "Le prenom doit contenir au moins 3 lettres" ; 
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           
                      $errors['email'] =  "Adresse mail invalide "; 
        }

        if (mb_strlen($password) < 6) {
            
                      $errors['password'] = "le mot de passe doit faire au moins 6 caractères"; 
        }
        //$query1 = "SELECT c.email, r.email FROM candidat c, recruteur r  WHERE c.email = '$email' AND r.email = '$email'";
        $query = "SELECT email FROM candidat  WHERE email = '$email' ";
        $result = mysqli_query($connection, $query);

        $queryr = "SELECT email FROM recruteur WHERE email = '$email' ";
        $resultr = mysqli_query($connection, $queryr);

        if(!$result){
             die("QUERY FAILED".mysqli_error($connection));
        }
      
        if(mysqli_num_rows($result) > 0){
          
            $errors['email'] = "Cette adresse mail existe déjà"; 
        }
        if(!$resultr){
            die("QUERY FAILED".mysqli_error($connection));
       }
     
       if(mysqli_num_rows($resultr) > 0){
         
           $errors['email'] = "Cette adresse mail existe déjà"; 
       }

        if ($password1 != $password) { 
            $errors['password'] = "Le mot de passe de confirmation doit être identique à celui d'origine" ; 
        }

        if(mysqli_num_rows($result) > 0){
          
            $errors['email'] = "Cette adresse mail existe déjà"; 
        }

        //coder le mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT,array('cost' => 12));

    if($role=='candidat')
    {
        if (empty($errors)) 
        {
            $query_inscription ="INSERT INTO candidat (nom, prenom, email, mdp) ";
            $query_inscription .= "VALUES('$name', '$prenom', '$email','$password') ";
            $register = mysqli_query($connection, $query_inscription);
            
           
         
            if(!$register){
            die("QUERY FAILED". mysqli_error($connection) . ' '.mysqli_errno($connection));
            }else
            {
               $query_id ="SELECT id_candidat FROM candidat where email='$email' ";
               $ide = mysqli_query($connection, $query_id);
               while($row = mysqli_fetch_array($ide)){
                 $_SESSION['id_candidat']=$row['id_candidat'];
               }   
               
               $user_ident=$_SESSION['id_candidat'];
        
               
                session_start();
                    $_SESSION['id_candidat']=$user_ident;
                   $_SESSION['email'] = $email;
                   $_SESSION['nom']=$name;
                   $_SESSION['prenom']=$prenom;
               header("location:information_candidat.php?user=$user_ident");
            
         
            }

        }
    }

    else
    {
        if (empty($errors)) 
        {
            $query_inscription ="INSERT INTO recruteur (nom, prenom, email, mdp, nom_entreprise) ";
            $query_inscription .= "VALUES('$name', '$prenom', '$email','$password','$nom_entreprise') ";
            $register = mysqli_query($connection, $query_inscription);
           
         
            if(!$register){
            die("QUERY FAILED". mysqli_error($connection) . ' '.mysqli_errno($connection));
            }else
            {
               $query_id ="SELECT id_recruteur FROM recruteur where email='$email' ";
               $idr = mysqli_query($connection, $query_id);
               while($row = mysqli_fetch_array($idr)){
                 $_SESSION['id_recruteur']=$row['id_recruteur'];
               }   
               
               $user_identr=$_SESSION['id_recruteur'];
               
               
              
         
       
                   session_start();
                   $_SESSION['email'] = $email;
                   $_SESSION['nom']=$nom;
                   $_SESSION['prenom']=$prenom;
               header("location:espace_recruteur.php?user=$user_identr");
            
         
            }

        }
    }
}



