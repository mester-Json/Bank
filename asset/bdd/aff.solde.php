<?php



// Dans votre fichier connexion.php
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Dans votre fichier aff.solde.php
require_once("./connexion.php");

// Maintenant, vous pouvez utiliser $conn
$stmt = $conn->prepare("SELECT solde FROM comptes WHERE id = :id");