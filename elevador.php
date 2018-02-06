
<?php 

require_once ('Pessoas.php');
require_once ('Animal.php');

class Elevador {
	public $pesoMaximo;
	public $maxPassageiros;
	public $quantAndares;
	public $quantPassageiros;
	public $maxPernas;
	public $andar;
	public $pesoAtual;
	public $pernasAtuais;
	

}

	public function __construct($pesoMaximo,$maxPassageiros,$quantAndares,$maxPernas){
		$this->pesoMaximo= $pesoMaximo;
		$this->maxPassageiros=$maxPassageiros;
		$this->quantAndares=$quantAndares;
		$this->maxPernas=$maxPernas;

		$this->pesoAtual=0;
		$this->pernasAtuais=0;
		$this->andar=0;
		$this->quantPassageiros=0;
	

	}


	public function adicionarPassageiro ($passageiros) {
		$this->quantPassageiros++;
		$this->pesoAtual+=$passageiros->peso;
		$this->pernasAtuais+=$passageiros->pernas;
		$this->validacao();
		


	}
	public function removerPassageiro ($passageiros) {
		$this->quantPassageiros--;
		$this->pernasAtuais-=$passageiros->pernas;
		$this->pesoAtual-=$passageiros->peso;

		$this->validacao();


	}


	public function escolherAndar ($andar){
		
		if($this->andar==$andar){
			echo " andar escolhido igual ao atual";

		}

		else if($andar>$this->quantAndares){
			echo " Andar não existente";
		}

		else {
			$this->andar->$andar;
		}
	}


	public function validacao () {
		if($this->quantPassageiros > $this->maxPassageiros){
			echo " Número de passageiros excedido <br />";
		}

		if($this->pernasAtuais > $this->maxPernas){
			echo " Número de pernas excedido <br />";
		}
		if($this->pesoAtual > $this->pesoMaximo){
			echo " Peso excedido <br />";
		}


	}



/*Desenvolva as classes Elevador, Pessoa e Animal. com no mínimo os seguintes atributos e métodos:

Um elevador tem: peso máximo, número máximo de passageiros, número máximo de pernas, quantidade de andares, quantidade de pessoas dentro; Suponha que todo elevador está num prédio com andares que vão de 0 (térreo) até o último andar;

Um elevador faz: adicionarPassageiro, removerPassageiro, escolher andar, imprimir andar atual, imprimir peso atual, imprimir numero de passageiros atual;

Pessoa e Animal são passageiros em elevadores. Eles têm pernas, peso e nome.

Desenvolva as classes e métodos de modo que um elevador avise se estiver com mais do que sua capacidade de algo. Outro aviso deve ser gerado se um andar maior que o ultimo andar for escolhido, ou se o andar atual for escolhido.


		echo " Andar: ($this->andar) Pessoas:($this->quant_pessoas)"; 
	

 */





	 	
?>



