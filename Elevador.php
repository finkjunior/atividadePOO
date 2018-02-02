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

    function __construct($maxPeso, $maxPassageiros,$maxPernas,$maxAndares,$andarAtual = 0,$numeroDePassageiros = 0,$andarEscolhido = -1){
      $this->maxPeso = $maxPeso;
      $this->maxPassageiros = $maxPassageiros;
      $this->maxPernas = $maxPernas;
      $this->maxAndares = $maxAndares;
      $this->andarAtual = $andarAtual;
      $this->numeroDePassageiros = $numeroDePassageiros;
      $this->andarEscolhido = $andarEscolhido;
    }

  public  function addPassageiro ($Vivo){
      if ($this->numeroDePassageiros < $this->maxPassageiros && $this->numeroPernas + $Vivo->getPerna() < $this->maxPernas && $this->pesoAtual + $Vivo->getPeso() <= $this->maxPeso)  {
         $this->pesoAtual += $Vivo->getPeso();
         $this->numeroDePassageiros++;
         $this->numeroPernas += $Vivo->getPerna();
      }
      else {
        echo "Capacidade máxima atingida!";
      }
    }

  public function removePassageiro ($Vivo){
    if($this->numeroDePassageiros > 0){
        $this->pesoAtual -= $Vivo->getPeso();
        $this->numeroDePassageiros--;
        $this->numeroPernas -= $Vivo->getPerna();
      }
      else echo "Não há mais ninguem no elevador!!";
  }

  public  function numeroPassageiros(){
      echo $this->numeroDePassageiros . "   ";
    }

  public  function escolherAndar($andarEscolhido){
      $this->andarEscolhido = $andarEscolhido;
      if($this->andarEscolhido == $this->andarAtual){
        echo "Você já está nesse andar!! ";
      }
      else if($this->andarEscolhido <= $this->maxAndares && $andarEscolhido >= 0){
        $this->andarAtual = $andarEscolhido;
        echo $andarAtual . "  ";
    }
    else {
      echo "Esse andar não existe! ";
    }
  }

}

 ?>
