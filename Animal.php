<?php
require_once('Passageiro.php');

class Animal extends Passageiro {
    public function __construct($nome, $pernas, $peso) {
        $this->nome = $nome;
        $this->pernas = $pernas;
        $this->peso = $peso;
    }
}
