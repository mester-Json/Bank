<?php

require_once("connect.bdd.php");



try {
    if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        $requete = $db->prepare("SELECT * FROM user WHERE name = ? AND firstname = ? AND mail = ?");
        $requete->bindParam(1, $name);
        $requete->bindParam(2, $firstname);
        $requete->bindParam(3, $mail);
        $requete->execute();

        if ($user = $requete->fetch()) {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                echo "Connexion réussie";
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Utilisateur non trouvé";
        }
    }
} catch (PDOException $e) {
    echo $e;
}