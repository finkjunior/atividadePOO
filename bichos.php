<?php

require_once ('elevador.php');

class Pessoa extends Elevador{
	public $pernas = 2;
	public $peso = 85;
	public $nome;

	public function adicionarPassageiro(){
		if( ($this->totalpassageiros < $this->passageirosmax) or ($this->totalpernas < $this->pernasmax) or ($this->totalpeso < $this->pesomax) ){
			$this->totalpassageiros += 1;
			$this->totalpernas += $this->pernas;
			$this->totalpeso += $this->peso;
		}else{
			print("Não é possível adicionar nenhum passageiro");
		}
	}

	public function removerPassageiro(){
		if($this->totalpassageiros > 0){
			$this->totalpassageiros -= 1;
			$this->totalpernas -= $this->pernas;
			$this->totalpeso -= $this->peso;
		}else{
			print("Não é possível retirar nenhum passageiro");
		}
	}
}

class Cachorro extends Elevador{
	public $pernas = 4;
	public $peso = 30;
	public $nome;

	public function adicionarPassageiro(){
		if( ($this->totalpassageiros < $this->passageirosmax) or ($this->totalpernas < $this->pernasmax) or ($this->totalpeso < $this->pesomax) ){
			$this->totalpassageiros += 1;
			$this->totalpernas += $this->pernas;
			$this->totalpeso += $this->peso;
		}else{
			print("Não é possível adicionar nenhum passageiro");
		}
	}

	public function removerPassageiro(){
		if($this->totalpassageiros > 0){
			$this->totalpassageiros -= 1;
			$this->totalpernas -= $this->pernas;
			$this->totalpeso -= $this->peso;
		}else{
			print("Não é possível retirar nenhum passageiro");
		}
	}
}

?>
