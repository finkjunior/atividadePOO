<?php

  class Elevador {
    public $maxPeso;
    public $pesoAtual;
    public $maxPassageiros;
    public $numeroDePassageiros;
    public $maxPernas;
    public $numeroPernas;
    public $maxAndares;
    public $andarAtual;
    public $andarEscolhido;

    function __construct($Peso, $mPassageiros,$Pernas,$Andares,$atual = 0,$Passageiros = 0,$Escolhido = -1){
      $this->maxPeso = $Peso;
      $this->maxPassageiros = $mPassageiros;
      $this->maxPernas = $Pernas;
      $this->maxAndares = $Andares;
      $this->andarAtual = $atual;
      $this->numeroDePassageiros = $Passageiros;
      $this->andarEscolhido = $Escolhido;
    }

  public  function addPassageiro ($Pessoa){
      if ($this->numeroDePassageiros < $this->maxPassageiros && $this->numeroPernas < $this->maxPernas && $this->pesoAtual <= $this->maxPeso)  {
         $this->pesoAtual += $Pessoa->getPeso();
         $this->numeroDePassageiros++;
         $this->numeroPernas += $Pessoa->getPerna();
      }
      else {
        echo "Capacidade máxima atingida!";
      }
    }

  public function removePassageiro ($Pessoa){
        $this->pesoAtual -= $Pessoa->getPeso();
        $this->numeroDePassageiros--;
        $this->numeroPernas -= $Pessoa->getPerna();
    }

  public  function numeroPassageiros(){
      echo $this->numeroDePassageiros . "   ";
    }

  public  function escolherAndar($andarEscolhido){
      if($andarEscolhido == $this->andarAtual){
        echo "Você já está nesse andar!! ";
      }
      else if($andarEscolhido <= $this->maxAndares && $andarEscolhido >= 0){
        $this->andarAtual = $andarEscolhido;
        $this->andarEscolhido = $andarEscolhido;
        echo $andarAtual . "  ";
    }
    else {
      echo "Esse andar não existe! ";
    }
  }

}

 ?>
