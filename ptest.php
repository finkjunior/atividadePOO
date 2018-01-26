<?php

require_once ('bichos.php');

$maquina = new Elevador(400,22,48,15,4,0,0,0);
$pedro = new Pessoa(400,22,48,15,0,4,0,0);
$bob = new Cachorro(400,22,48,15,0,4,0,0);

$pedro->adicionarPassageiro();
$pedro->adicionarPassageiro();
$pedro->removerPassageiro();
$pedro->escolherAndar(8);
$bob->adicionarPassageiro();
$bob->escolherAndar(5);
$bob->adicionarPassageiro();
$pedro->imprimirAndarAtual();
$bob->imprimirNumeroDePassageiros();
$pedro->imprimirNumeroDePassageiros();

?>
