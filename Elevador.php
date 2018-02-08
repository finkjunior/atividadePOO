<?php

	require_once('Pessoa.php');
	require_once('Animal.php');

	class Elevador {
		public $pesomax;
		public $passageirosmax;
		public $pernasmax;
		public $andares;
		public $andarAtual;
		public $totalpassageiros;
		public $totalpernas;
		public $totalpeso;


		public function __construct($pesomax,$passageirosmax,$pernasmax,$andares,$totalpassageiros,$andarAtual,$totalpernas,$totalpeso){
			$this->pesomax=$pesomax;
			$this->passageirosmax=$passageirosmax;
			$this->pernasmax=$pernasmax;
			$this->andares=$andares;
			$this->totalpassageiros=$totalpassageiros;
			$this->andarAtual=$andarAtual;
			$this->totalpernas=$totalpernas;
			$this->totalpeso=$totalpeso;
		}

		public function verificarCapacidade($obj)
		{
			if ( ($this->totalpassageiros < $this->passageirosmax) && ( ($this->totalpernas + $obj->getPernas() ) < $this->pernasmax ) && ( ($this->totalpeso + $obj->getPeso() ) < $this->pesomax) ){
				return true;
			}else{
				return false;
			}
		}

		public function adicionarPassageiro($obj){
			//pensar no limite de pernas e em como separar as pernas dos cachorros das das pessoas como if
			//if($totalpassageiros <= passageirosmax){}else{print("Não é possível adicionar mais passageiros");}
			if( $this->verificarCapacidade($obj) ){
				$this->totalpassageiros += 1;
				$this->totalpernas += $obj->getPernas();
				$this->totalpeso += $obj->getPeso();
			}else{
				print("Não é possível adicionar nenhum passageiro");
			}
		}

		public function verificarPossibilidade($obj)
		{
			if ( ($this->totalpassageiros > 0 ) && ( $this->totalpernas >= $obj->getPernas() ) && ( $this->totalpeso >= $obj->getPeso() ) ){
				return true;
			}else{
				return false;
			}
		}

		public function removerPassageiro($obj){
			if( $this->verificarPossibilidade($obj) ){
				$this->totalpassageiros -= 1;
				$this->totalpernas -= $obj->getPernas();
				$this->totalpeso -= $obj->getPeso();
			}else{
				print("Não é possível retirar nenhum passageiro");
			}
		}

		public function escolherAndar($andarEscolhido){
			if($andarEscolhido === $this->andares){
				echo "<p>Você já está no andar " . $this->andarAtual . "<p/>";
			}else if($andarEscolhido < $this->andares){
				$this->andarAtual = $andarEscolhido;
				echo "<p>O andar atual é " . $this->andarAtual . "</p>";
			}else{
				print("Este andar não existe");
			}
		}

		public function imprimirAndarAtual(){
			echo "<p>Andar " . $this->andarAtual . "</p>";
		}

		public function imprimirNumeroDePassageiros(){
			echo $this->totalpassageiros . "<br>";
		}

	}
