<?php


require_once './interface/class/Compte.php';
require_once './interface/class/Bank.php';
require_once './interface/class/LivretA.php';
require_once './interface/class/Pel.php';



$user1 = new User(78545365, "Jean", "Dupont", " 01/01/1990", "Jeandupont@gmail.com");
$comptes = new Compte('01345267891', 1500, true);
$comptes2 = new LivretA('23445566778', 6733, false);
$comptes3 = new Pel('23445966211', -45, true);



echo $user1->__toString();
echo "<br>";

$bank = new Bank();

$bank->ajouterClient($user1);

$bank->ajouterCompte($comptes);

$bank->ajouterCompte($comptes2);

$bank->ajouterCompte($comptes3);


echo "Liste de compte : <br>";
echo "<br>";
echo "Numero de compte || Solde <br>";
echo "-----------------------------<br>";

foreach ($bank->getComptes() as $comptes) {
    echo $comptes->__toString();
}