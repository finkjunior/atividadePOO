<?php

require_once ('Elevador.php');

$maquina = new Elevador(600,20,48,15,0,2,0,0);
$jujuba = new Pessoa("Ana", 50);
$pato = new Animal("Gervásio", 6, 2);
var_dump($jujuba);
echo "<br>";
var_dump($pato);

$maquina->imprimirNumeroDePassageiros();
$maquina->adicionarPassageiro($jujuba);
$maquina->adicionarPassageiro($pato);
$maquina->imprimirNumeroDePassageiros();
$maquina->imprimirAndarAtual();
$maquina->escolherAndar(7);

echo $maquina->imprimirNumeroDePassageiros() . "<br>";
echo $maquina->imprimirNumeroDePassageiros() . "<br>";
var_dump($maquina);

?>
