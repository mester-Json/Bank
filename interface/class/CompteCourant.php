<?php

require_once 'Compte.php';

class CompteCourant extends Compte
{
    private $frais;

    public function __construct($numero, $solde, $decouvertAutorise)
    {
        parent::__construct($numero, $solde, $decouvertAutorise);
        $this->frais = 25;
    }
    public function getFrais()
    {
        return $this->frais;
    }

    public function __toString()
    {
        return "Compte Courant : " . $this->numero . " " . $this->solde . " " . $this->decouvertAutorise;
    }
}
