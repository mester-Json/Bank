<?php


require_once 'Compte.php';
require_once 'Bank.php';


class User
{
    private $id;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $email;
    private $comptes = [];

    public function __construct($id, $nom, $prenom, $dateNaissance, $email)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getEmail()
    {
        return $this->email;
    }



    public function __toString()
    {
        return "Fiche client<br>"
            . "Numéro client : " . $this->id . "<br>"
            . "Nom : " . $this->nom . "<br>"
            . "Prénom : " . $this->prenom . "<br>"
            . "Date de naissance : " . $this->dateNaissance . "<br>"
            . "Email : " . $this->email . "<br>";
    }

}