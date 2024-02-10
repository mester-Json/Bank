<?php

require_once("./asset/bdd/inscription.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/.css">
    <title>Inscription</title>
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <form action="inscription.php" method="post">
        <h1> Inscription </h1>
        <label for=""> Name : </label>
        <input type="text" name="name" placeholder="Name">
        <label for=""> Firstname : </label>
        <input type="text" name="firstname" placeholder="Firstname">
        <label for=""> Birthday : </label>
        <input type="date" name="birthday" placeholder="Birthday">
        <label for=""> Mail : </label>
        <input type="mail" name="mail" placeholder="Adressmail">
        <label for="" name="type"> Type de Compte : </label>
        <select name="type">
            <option value="courant">Compte Courant</option>
            <option value="epargne">Compte Epargne</option>
            <option value="LivretA">Livret A</option>
        </select>
        <label for=""> Password : </label>
        <input type="password" name="password" placeholder="Password">
        <label for=""> Re Password : </label>
        <input type="password" name="repassword" placeholder="Re Password">
        <button type="submit"> S'inscription </button>
    </form>
    <footer>
        <p> © 2021 The Bank </p>
    </footer>
</body>

</html>