<?php

require_once './interface/class/Compte.php';

interface IBank
{
    public function retirer($montant);
    public function deposer($montant);
    public function virement($montant, $compteDestinataire);
}