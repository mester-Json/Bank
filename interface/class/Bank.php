<?php

require_once 'Compte.php';
require_once 'User.php';
require_once './interface/IBank.php';

class Bank implements IBank
{
    private $user = [];
    private $comptes = [];


    public function getUser()
    {
        return $this->user;
    }

    public function getComptes()
    {
        return $this->comptes;
    }
    public function ajouterClient($user)
    {
        $this->user[] = $user;
    }

    public function retirer($montant)
    {
        foreach ($this->comptes as $compte) {
            $compte->retirer($montant);
        }
    }

    public function deposer($montant)
    {
        $this->comptes[] = $montant;
    }

    public function virement($montant, $compteDestinataire)
    {
        $this->comptes[] = $compteDestinataire;
    }

    public function ajouterCompte($compte)
    {
        if (count($this->comptes) < 3) {
            array_push($this->comptes, $compte);
        } else {
            echo "Un utilisateur ne peut pas avoir plus de trois comptes.";
        }
    }

    public function __toString()
    {
        $users = array_map(function ($user) {
            return $user->__toString();
        }, $this->user);

        $comptes = array_map(function ($compte) {
            return $compte->__toString();
        }, $this->comptes);

        return "Banque : " . implode(", ", $users) . " " . implode(", ", $comptes);
    }
}