<?php
class Elevador {
    public $pesoMax, $passMax, $pernMax, $qtdAndar;
    public $andarAtual, $pesoAtual=0, $pernAtual=0, $qtdPassag=0;

    public function __construct($pesoMax, $passMax, $pernMax, $qtdPassag, $qtdAndar, $andarAtual) {
        $this->pesoMax = $pesoMax;
        $this->passMax = $passMax;
        $this->pernMax = $pernMax;
        $this->qtdPassag = $qtdPassag;
        $this->qtdAndar = $qtdAndar;
        $this->andarAtual = $andarAtual;
    }

    public function addPassageiro($pass) {
        if ($this->passMax > $this->qtdPassag) {
            if ($this->pernAtual+$pass->pernas <= $this->pernMax) {
                if ($this->pesoAtual+$pass->peso <= $this->pesoMax) {
                    $this->qtdPassag += 1;
                    $this->pernAtual += $pass->pernas;
                    $this->pesoAtual += $pass->peso;
                } else {
                    echo "<h2>*** Limite de peso excedido! ***</h2>";
                }
            } else {
                echo "<h2>*** Limite de pernas excedido! ***</h2>";
            }
        } else {
            echo "<h2>*** Capacidade máxima de passageiros alcançada! ***</h2";
        }
    }

    public function delPassageiro($pass) {
        $this->qtdPassag -= 1;
        $this->pernAtual -= $pass->pernas;
        $this->pesoAtual -= $pass->peso;
    }

    public function escolherAndar($andar) {
        if ($andar <= $this->qtdAndar) {
            $this->andarAtual = $andar;
        } else {
            echo "<h2>*** ERRO: '" . $andar . "' não é um andar válido! ***</h2>";
        }
    }

    public function imprimirAndar() {
        echo "<h2>Andar atual: " . $this->andarAtual . "</h2>";
    }

    public function imprimirPeso() {
        echo "<h2>Peso atual: " . $this->pesoAtual . "</h2>";
    }

    public function imprimirPassageiros() {
        echo "<h2>Quantidade de passageiros: " . $this->qtdPassag . "</h2>";
    }
}
