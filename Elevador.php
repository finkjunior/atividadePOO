<?php
require_once('Passageiro.php');
//Criando a classe Elevador
  class Elevador{
    //Definindo as Propriedades da classe
    public $pesoMax;
    public $numMax;
    public $numMaxLegs;
    public $quantAndar;
    public $quantDePassageiros;
    public $peso;
    public $legs;
    public $andar;

    //Definindo os métodos
    public function adicionarPassageiro(Passageiro $passageiro){
      //Para adicionar o passageiro
      $this->quantDePassageiros++;
      $this->peso += $passageiro->peso;
      $this->legs += $passageiro->legs;
      if($this->quantDePassageiros > $this->numMax){
        echo "Você ESTÁ ULTRAPASSANDO O LIMITE DE PASSAGEIROS CARALHO!"
      }
      if($this->legs > $this->$numMaxLegs){
        echo "Tem pernas de mais no elevador!"
      }
      if($this->peso > $this->pesoMax){
        echo "O elevador não carrega elefantes!"
      }
    }
    public function removerPassageiro(Passageiro $passageiro){
     //Remover passageiro
     $this->quantDePassageiros--;
     $this->peso -= $passageiro->peso;
     $this->legs -= $passageiro->legs;
    }

    public function escolherAndar($andar){
      if($andar == $this->andar){
        echo "Você já estar nesse andar!";
      }
      else if($andar > $this->quantAndar){
        echo "Este andar ainda não foi construído!";
      }
      else {
        $this->andar = $andar;
      }
    }
    public function imprimirAndarAtual(){
      echo $this->andar;
    }
    public function imprimirPesoAtual(){
      echo $this->peso;
    }
    public function imprimirNumerodePassageirosAtual(){
      echo $this->quantDePassageiros;
    }

  }
