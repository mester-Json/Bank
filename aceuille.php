<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/acceuille.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte </title>
</head>

<body>
    <header>
        <nav>
            <a href="profile.php"><i class="fa-solid fa-user-large"></i></a>
            <img class="logo" src="./asset/img/default_transparent_blanc.png" alt="Logo de The Bank">
        </nav>
    </header>
    <div class="container">
        <div class="containerSolde">
            <h2> Solde : </h2>
            <p id="solde">
                <?php echo $solde; ?>
            </p>
        </div>
        <hr>
    </div>
    <footer>
        <p> © 2021 The Bank </p>
    </footer>

</body>

</html>