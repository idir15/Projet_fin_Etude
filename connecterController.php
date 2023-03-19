<?php

require "bd.php";

// pour inscription
if (isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM candidat WHERE email = '{$email}' ";
    $select_connexion = mysqli_query($connection, $query);

    $queryr = "SELECT * FROM recruteur WHERE email = '{$email}' ";
    $select_connexionr = mysqli_query($connection, $queryr);

    if (!$select_connexion) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    if (!$select_connexionr) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    if ($row = mysqli_fetch_array($select_connexion)) {
        $db_password = $row['mdp'];
    }

    if ($rowr = mysqli_fetch_array($select_connexionr)) {
        $db_passwordr = $rowr['mdp'];
    }

    if (mysqli_num_rows($select_connexion) > 0) {

        if (password_verify($password, $db_password)) {

            $user_ident = $row['id_candidat'];
            $user_email = $row['email'];
            $user_nom = $row['nom'];
            $user_prenom = $row['prenom'];

            $_SESSION['id_candidat'] = $user_ident;

            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['nom'] = $user_nom;
            $_SESSION['prenom'] = $user_prenom;
            $_SESSION['id_candidat'] = $user_ident;

            header("location:espace_cand.php?user=$user_ident");

        } else { $erreur1 = "Mot de passe incorrecte";}
    } else {
        $erreur1 = "E-mail ou mot de passe invalide";
    }

    if (mysqli_num_rows($select_connexionr) > 0) {

        if (password_verify($password, $db_passwordr)) {

            $user_identr = $rowr['id_recruteur'];
            $user_emailr = $rowr['email'];
            $user_nomr = $rowr['nom'];
            $user_prenomr = $rowr['prenom'];
            $user_nom_entreprise= $rowr['nom_entreprise'];
            $user_adresse= $rowr['adresse'];

            $_SESSION['id_recruteur'] = $user_identr;
            $_SESSION['nom'] = $user_nomr;
            $_SESSION['prenom'] = $user_prenomr;

            session_start();
            $_SESSION['email'] = $emailr;
            $_SESSION['nom'] = $user_nomr;
            $_SESSION['prenom'] = $user_prenomr;
            $_SESSION['id_recruteur'] = $user_identr;
            $_SESSION['nom_entreprise'] = $user_nom_entreprise;
            $_SESSION['adresse'] = $user_adresse;


            header("location:esp_rec.php?user=$user_identr");

        } else { $erreur1 = "Mot de passe incorrecte";}
    } else {
        $erreur1 = "E-mail ou mot de passe invalide";
    }

} else { $erreur1 = "";}
