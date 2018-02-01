<?php

	class Ser {

		public $nome;
		public $peso;
		public $pernas;

		function __construct($nome,$peso,$pernas){
			$this->setNome($nome);
			$this->setPeso($peso);
			$this->setPernas($pernas);
		}

		public function setNome($nome)
		{
			if ( is_string($nome) )
				$this->nome = $nome;
			else
				$this->nome = null;
		}

		public function setPeso($peso)
		{
			$this->peso = $peso;
		}

		public function setPernas($pernas)
		{
			$this->pernas = $pernas;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function getPeso()
		{
			return $this->peso;
		}

		public function getPernas()
		{
			return $this->pernas;
		}
	}
