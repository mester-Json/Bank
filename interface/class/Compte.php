<?php

require_once './interface/IBank.php';


class Compte
{
    protected $numero;
    protected $solde;
    protected $decouvertAutorise;

    public function __construct($numero, $solde, $decouvertAutorise)
    {
        $this->numero = $numero;
        $this->solde = $solde;
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function retirer($montant)
    {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            throw new Exception("Solde insuffisant");
        }
    }
    public function ajouter($montant)
    {
        if ($this->solde <= $montant) {
            $this->solde += $montant;
        }
    }

    public function __toString()
    {
        $emoji = $this->solde >= 0 ? ":-)" : ":-(";
        return $this->numero . " " . $this->solde . " euros " . $emoji . "<br>" . "-----------------------------<br>";
    }

}
