<?php 
	require_once('Pessoa.php');

	Class Elevador {
		public $maxPeso;
		public $maxNumPassageiros;
		public $maxNumPernas;
		public $maxAndar;

		public $andarAtual;
		public $qtdePassageirosDentro;
		public $qtdePernasDentro;
		public $pesoAtual;
		

		function __construct(){
			$this->pesoAtual = 0;
			$this->qtdePassageirosDentro = 0;
			$this->qtdePernasDentro = 0;
			$this->andarAtual = 0;
		}

		public function adicionarPassageiro(Animal $passageiro){
			$this->pesoAtual += $passageiro->peso;
			$this->qtdePassageirosDentro++;
			$this->qtdePernasDentro += $passageiro->pernas;
			$this->getValidacoes();
		}
		public function removerPassageiro(Animal $passageiro){
			$this->pesoAtual -= $passageiro->peso;
			$this->qtdePassageirosDentro--;
			$this->qtdePernasDentro -= $passageiro->pernas;
			$this->getValidacoes();
		}
		public function escolherAndar($andar){
			if ($andar > $this->maxAndar){
				echo "Andar escolhido nao existe. Ultimo andar: ". $this->maxAndar . "; Escolhido: " . $andar . ". <br />";
			} else if ($andar == $this->andarAtual) {
				echo "Voce escolheu o andar no qual o elevador ja esta. Andar ". $andar . ". Por favor, escolha outro. <br />";
			} else {
				$this->andarAtual = $andar;
			}
		}
		public function getAndarAtual(){
			echo $this->andarAtual . '<br />';
		}
		public function getPesoAtual(){
			echo $this->pesoAtual . '<br />';	
		}
		public function getQtdePassageirosAtual(){
			echo $this->qtdePassageirosDentro . '<br />';
		}
		public function getQtdePernasDentro(){
			echo $this->qtdePernasDentro . '<br />';
		}
		public function getValidacoes(){
			if($this->pesoAtual > $this->maxPeso){
				echo "Peso Maximo Excedido em " . ($this->pesoAtual - $this->maxPeso) . ". <br />";
			}
			if($this->qtdePernasDentro > $this->maxNumPernas){
				echo "Pernas Maximo Excedida em " . ($this->qtdePernasDentro - $this->maxNumPernas) . ". <br />";
			}
			if($this->qtdePassageirosDentro > $this->maxNumPassageiros){
				echo "Passageiros Maximo Excedido em " . ($this->qtdePassageirosDentro - $this->maxNumPassageiros) . ". <br />";
			}
			echo '<br /><br />';
		}

	}
	

 ?>