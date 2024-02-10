<?php

require_once("./asset/bdd/connexion.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/acceuille.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte </title>
</head>

<body>
    <header>
        <nav>
            <h1> Mon Compte </h1>
            <img class="logo" src="./asset/img/default_transparent_blanc.png" alt="Logo de The Bank">
        </nav>
    </header>
    <div>
        <div class="containerSolde">
            <h2> Solde : </h2>
            <p>
                <?php echo "" ?>
            </p>
        </div>
        <div class="containerCompte">
            <a href="compte">
                <h2> Mais Compte: </h2>
            </a>
            <p>
                <?php echo "" ?>
            </p>
        </div>
        <div class="containerDepense">
            <h2> Mais Dépense</h2>

            <p>
                <?php echo "" ?>
            </p>
        </div>
    </div>
    <footer>
        <p> © 2021 The Bank </p>
    </footer>
</body>

</html>