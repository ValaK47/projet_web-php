<?php
    require_once("./fonction.php");
    check_session();
    require_once("./database.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="./css/body.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/mon_compte.css">
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
                <a href="index.php">Accueil</a>
                <a href="mes_appareils.php">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a class="active-navbar" href="mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <!-- mise en place container -->
        <div class="container">
            <div  class="formulaire">
                <p>Email: 123@gmail.com</p>
                <p>Mot de passe : ******</p>
                <p>Numéro de téléphone : 0677784652</p>
                <p>Nom : leclerc</p>
                <p>Prénom : Patrick</p>
                <p>Adresse : 51 rue nationale</p>
                <p>Langue : Français</p>
                <p>Mode de paiement : Paypal</p>
            </div>
            <div class="modifier">
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
                <a href="#">modifier</a>
            </div>
            <form action="./index.php">
                <input class="btn_deconnexion" name="btn_deconnexion" type="submit" value="Log out">
            </form>
        </div>

    <!-- bar inférieur -->
    <div class="footer">
        <div>
            <a href="index.php">Accueil</a>
            <a href="mes_appareils.php">Appareils</a>
        </div>

        <div>
            <a href="connection_inscription.php">Login</a>
            <a href="mon_compte.php">Compte</a>
        </div>
    </div>
</body>

</html>