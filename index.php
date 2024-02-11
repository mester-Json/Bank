<?php

require_once("./asset/bdd/connexion.php");


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/connexion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>
    <header>
        <nav>
            <h1> The Bank </h1>
            <img class="logo" src="./asset/img/default_transparent_blanc.png" alt="Logo de The Bank">
        </nav>
    </header>

    <form action="aceuille.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="La-salle">
        <!-- <label for="" id="errorName">Entrer un Nom Valide </label> -->
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Jean">
        <!-- <label id="errorFirstname"> Entrer un Prénom Valide</label> -->
        <label for="mail">Mail:</label>
        <input type="email" id="mail" name="mail" placeholder="Jeanlasalle@gmail.com">
        <!-- <label for="" id="errorMail">Entrer un Mail Valide / ce Mail n'existe pas </label> -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="mon mots de passe">
        <!-- <label id="errorPsw">Entrer un mot de passe / Mot de Pass Incorect</label> -->
        <input type="submit" value="Se connecter">
        <a href="./inscription.php" class="notAccount"> Pas encore de compte </a>
    </form>
    <footer>
        <p> © 2021 The Bank </p>
    </footer>

</body>

</html>