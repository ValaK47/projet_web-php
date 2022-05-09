<?php
    require_once("./fonction.php");
    check_session();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection/Inscription</title>
    <link rel="stylesheet" href="./css/body.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/connection_inscription.css">
</head>

<body>
    <nav>
        <label class="label-burger" for="active-burger">☰</label>
        <input type="checkbox" id="active-burger">
        <div class="navbar">
            <div class="logo">
                <img class="logo-navbar" src="images/navbar/logo-navbar.png" alt="logo-navbar">
            </div>
            
            <div class="lien">
                <a href="./index.php">Accueil</a>
                <a href="./mes_appareils.php">Appareils</a>
                <a class="active-navbar" href="./connection_inscription.php">Login</a>
                <a href="./mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <div class="block_full">
        <div class="block_login">
            <p class="title_login">Login</p>

            <form class="formlogin" action="./connexion.php" method="post">
                <input type="email" placeholder="JonattanDubois@hotmail.fr" class="email_login" name="mail">
    
                <input type="password" placeholder="***********" class="pswd_login" name="password">
    
                <!--<a class="pswd_rst_login" href="">mot de passe oublié ?</a>-->
    
                <input class="btn_login" name="formlogin" type="submit" value="Se connecter">
            </form>

        </div>

        <div class="block_register">
            <p class="title_register">Inscription</p>
            <form action="./adduser.php" method="post">
                <div class="input_register">
                    <input type="text" placeholder="Nom" class="name_register" name="nom">
                    <input type="text" placeholder="Prénom" class="first_name_register" name="prenom">
                </div>
                <div>
                    <input type="email" placeholder="JonattanDubois@hotmail.fr" class="email_register" name="mail">
                    <input type="password" placeholder="***********" class="pswd_register" name="password">
                </div>
                <div class="input_register">
                    <input type="text" placeholder="Adresse" class="adress_register" name="adresse">
                    <input type="text" placeholder="Numéro de téléphone" class="phone_number_register" name="telephone">
                </div>
                <input class="btn_register" name="formsend" type="submit" value="Inscription">
            </form>

        </div>
    </div>
    <div class="footer">
        <div>
            <a href="./index.php">Accueil</a>
            <a href="./mes_appareils.php">Appareils</a>
        </div>

        <div>
            <a href="./connection_inscription.php">Login</a>
            <a href="./mon_compte.php">Compte</a>
        </div>
    </div>
</body>



