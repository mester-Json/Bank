<?php

require_once("connect.bdd.php");

try {
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
    $mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
    $birthday = isset($_POST["birthday"]) ? $_POST["birthday"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $repassword = isset($_POST["repassword"]) ? $_POST["repassword"] : null;
    $numClient = rand(1000, 9999);

    if (empty($name) || empty($mail) || empty($birthday) || empty($password) || empty($repassword)) {
        echo "Tous les champs doivent être remplis.";
    } else if ($password != $repassword) {
        echo "Les mots de passe ne correspondent pas.";
    } else {
        $emailQuery = $db->prepare("SELECT id FROM user WHERE mail = ?");
        $emailQuery->bindParam(1, $mail);

        $emailQuery->execute();

        if ($emailQuery->rowCount() > 0) {
            echo "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $requete = $db->prepare("INSERT INTO user (name , firstname, birthday , mail , password, numClient) VALUES (?,?, ?, ?, ?, ?)");
            $requete->bindParam(1, $name);
            $requete->bindParam(2, $firstname);
            $requete->bindParam(3, $birthday);
            $requete->bindParam(4, $mail);
            $requete->bindParam(5, $hashed_password);
            $requete->bindParam(6, $numClient);

            if ($requete->execute()) {
                $userId = $db->lastInsertId();

                $numCompte = rand(100000, 999999);

                $solde = 0;

                $type = "courant";
                $compteRequete = $db->prepare("INSERT INTO compte (solde, type, numCompte, user_id) VALUES (?, ?, ?, ?)");
                $compteRequete->bindParam(1, $solde);
                $compteRequete->bindParam(2, $type);
                $compteRequete->bindParam(3, $numCompte);
                $compteRequete->bindParam(4, $userId);
                $compteRequete->execute();

                echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
                echo "Votre numéro de compte est : " . $numCompte;
                echo "Votre solde est : " . $solde;
            } else {
                echo "Une erreur est survenue lors de l'inscription.";
            }
        }
    }
} catch (PDOException $e) {
    echo $e;
}