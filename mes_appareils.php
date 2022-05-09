<?php
    require_once("./fonction.php");
    check_session();
    require("./database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Appareils</title>
    <link rel="stylesheet" href="./css/body.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/mes_appareils.css">
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
                <a class="active-navbar" href="mes_appareils.php">Appareils</a>
                <a href="connection_inscription.php">Login</a>
                <a href="mon_compte.php">Compte</a>
            </div>
        </div>
    </nav>

    <div class="devices-container">
        <div class="devices">
            <a href="appareil1.html">Appareil 1</a>
            <a href="appareil2.html">Appareil 2</a>
            <a href="appareil3.html">Appareil 3</a>
            <a href="appareil4.html">Appareil 4</a>
            <a href="appareil5.html">Appareil 5</a>
        </div>

        <div class="devices-inputs">
            <button class="devices-inputs-add">+</button>

            <button class="devices-inputs-delete">Supprimer</button>
        </div>
    </div>

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