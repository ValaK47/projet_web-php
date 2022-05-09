<?php
    require_once ("./fonction.php");
    check_session();
    require_once ("./database.php");

    if((!isset($_POST["nom"]) || empty($_POST["nom"])) || (!isset($_POST["prenom"]) || empty($_POST["prenom"])) || (!isset($_POST["mail"]) || empty($_POST["mail"])) || (!isset($_POST["password"]) || empty($_POST["password"])) || (!isset($_POST["adresse"]) || empty($_POST["adresse"])) || (!isset($_POST["telephone"]) || empty($_POST["telephone"])))
    {
        header("location: ./connection_inscription.php?text=un ou plusieurs champs non correct");
        exit();
    }
    else{
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $password = crypt($_POST['password']);
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];

        $sql = "INSERT INTO users (Nom, Prenom, Mail, mdp, Adresse, Telephone) VALUES ('".$nom."','".$prenom."','".$mail."','".$password."','".$adresse."','".$telephone."')";

        if($result=mysqli_query($link,$sql)){
            header("location: ./mon_compte.php?text=vous avez bien été enregistré");
        }
        else{
            header("location: ./connection_inscription.php?text=echec dans l'inscription");
        }
        mysqli_close($link);
    }
?>