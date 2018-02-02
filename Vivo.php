<?php

	class Vivo{
		protected $perna;
		protected  $peso;
  		protected  $nome;

  		function __construct($peso, $nome){
    		$this->setPeso($peso);
    		$this->nome = $nome;
    	}

    	public function getPerna(){
    		return $this->perna;
    	}

    	public function getPeso(){
    		return $this->peso;
    	}

    	public function getNome(){
    		return $this->nome;
    	}

    	public function setPeso(int $peso)
    	{
    		if($peso < 200 && $peso >0){
    			$this->peso = $peso;
    		}
    		else {
    			$peso = 80;
    		}
    	}

	}

?>
