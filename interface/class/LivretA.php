<?php

require_once 'Compte.php';

class LivretA extends Compte
{
    private $frais;

    public function __construct($numero, $solde, $decouvertAutorise)
    {
        parent::__construct($numero, $solde, $decouvertAutorise);
        $this->frais = $this->solde * 0.1;
    }
    public function getfrais()
    {
        return $this->frais;
    }


    public function __toString()
    {
        $emoji = $this->solde >= 0 ? ":-)" : ":-(";
        return $this->numero . " " . $this->solde . " euros " . $emoji . "<br>" . "-----------------------------<br>";
    }
}
