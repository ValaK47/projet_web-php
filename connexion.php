<?php
    if((isset($_POST["mail"]) && !empty($_POST["mail"])) && (isset($_POST["password"]) && !empty($_POST["password"]))){
        $login = $_POST["mail"];
        $password = $_POST["password"];
        require_once("./database.php");
        $sql = "SELECT * FROM users WHERE Mail='".$login."'";
        $result = mysqli_query($link,$sql);
        if(mysqli_num_rows($result) == 1){
            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row['mdp'])){
                    session_start();
                    $_SESSION["username"] = $login;
                    $_SESSION["logged"] = true;
                    header("location: ./mes_appareils.php?text=vous êtes connecté !");
                    exit();
                }
                else{
                    session_destroy();
                    header("location: ./connection_inscription.php?text=mot de passe incorrect");
                    exit();
                }
            }
        }
        else{
            session_destroy();
            header("location: ./connection_inscription.php?text=pas d'utilisateur trouvé !");
            exit();
        }
        mysqli_free_result($result);
        mysqli_close($link);
        header("location: ./index.php");
        exit();
    }
    else{
        session_destroy();
        header("location: ./connection_inscription.php?text=login ou mot de passe incorrect");
        exit();
    }
?>