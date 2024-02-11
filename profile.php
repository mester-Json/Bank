<?php
session_start();
require_once("./asset/bdd/connexion.php");

if (!isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $email = $_SESSION['email'];
    $birthday = $_SESSION['birthday'];

    exit();
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./asset/css/profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profile</title>
</head>

<body>
    <header>
        <nav>
            <a href="aceuille.php"><img class="logo" src="./asset/img/default_transparent_blanc.png"
                    alt="Logo de The Bank"></a>
        </nav>
    </header>

    <div class="profile">
        <h2>Mon Profile</h2>
        <div class="profile-info">
            <div class="profile-info-left">
                <p>Nom : </p>
                <p>Prenom : </p>
                <p>Email : </p>
                <p>Birthday : </p>
            </div>
            <div class="profile-info-right">
                <p>
                    <?php echo $_SESSION['nom']; ?>
                </p>
                <p>
                    <?php echo $_SESSION['prenom']; ?>
                </p>
                <p>
                    <?php echo $_SESSION['email']; ?>
                </p>
                <p>
                    <?php echo $_SESSION['birthday']; ?>
                </p>
            </div>
        </div>
    </div>

    <footer>
        <p> © 2021 The Bank </p>
    </footer>

</body>

</html>