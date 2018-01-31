<?php

class elevador{
	public $pesoMax;
	public $numMaxPas;
	public $numMaxPern;
	public $qtAnd;
	public $qtPes;
	public $qtPern;
	public $andar;
	public $pesoTotal;

	public function __construct($pesoMax, $numMaxPas, $numMaxPern, $qtAndar, $andar){
		$this->pesoMax = $pesoMax;
		$this->numMaxPas = $numMaxPas;
		$this->numMaxPern = $numMaxPern;
		$this->qtAnd = $qtAndar;
		$this->andar = $andar;
	}
	
	public function addPas(Pessoa $passag){
		if ($this->qtPes + 1 <= $this->numMaxPas){ 
			if ($this->pesoTotal + $passag->peso <= $this->pesoMax){ 
				if ($this->qtPern + $passag->pernas <= $this->numMaxPern){
					$this->qtPern += $passag->pernas;
					$this->pesoTotal += $passag->peso;
					$this->qtPes += 1;
				}
				else{
					echo "Maximo Numero de Pernas" ;				
				}
			}
			else{
				echo "Peso ja no limite" ;
			}
		}
		else{
			echo "Elevador cheio" ;
		}
	}

	public function remPas($pernas, $peso){
		$this->qtPern -= $pernas;
		$this->pesoTotal -= $peso;
		$this->qtPes -= 1;
	}

	public function escAndar($num){
		if ($num < $this->qtAnd){
			if ($num != $this->andar){
				$this->andar = $num;
			}
			else{
				echo 'Mesmo Andar';
			}
		}
		else{
			echo 'Andar invalido';
		}
	}

	public function impAnd(){
		echo "Andar atual: " . $this->andar;
	}

	public function impPeso(){
		echo "Peso atual: " . $this->pesoTotal;
	}

	public function impNumPas(){
		echo "Qt Pessoas: " . $this->qtPes;
	}

}

?>
