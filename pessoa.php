<?php

require_once ('passageiro.php');

class pessoa extends passageiro{
		public function __construct($pernas, $peso, $nome){
		$this->pernas = $pernas;
		$this->peso = $peso;
		$this->nome = $nome;
	}
}

?>
