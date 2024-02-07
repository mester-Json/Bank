<?php

require_once("./asset/bdd/connexion.php");


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>

    <form action="chose.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname">
        <label for="mail">Mail:</label>
        <input type="email" id="mail" name="mail">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Se connecter">
    </form>

</body>

</html>