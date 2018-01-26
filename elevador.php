<?php

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

	public function adicionarPassageiro(){
		//pensar no limite de pernas e em como separar as pernas dos cachorros das das pessoas como if
		//if($totalpassageiros <= passageirosmax){}else{print("Não é possível adicionar mais passageiros");}
		if( ($this->totalpassageiros < $this->passageirosmax) or ($this->totalpernas < $this->pernasmax) or ($this->totalpeso < $this->pesomax) ){
			$this->totalpassageiros += 1;
		}else{
			print("Não é possível adicionar nenhum passageiro");
		}
	}

	public function removerPassageiro(){
		if($this->totalpassageiros > 0){
			$this->totalpassageiros -= 1;
		}else{
			print("Não é possível retirar nenhum passageiro");
		}
	}

	public function escolherAndar($andarEscolhido){
		if($andarEscolhido < $this->andares){
			$this->andarAtual = $andarEscolhido;
			echo "<p>Andar " . $this->andarAtual . "</p>";
		}else if($andarEscolhido === $this->andares){
			echo "<p>Você já está no andar " . $this->andarAtual . "<p/>";
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

?>
