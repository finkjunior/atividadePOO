<?php
require_once('Elevador.php');
require_once('Pessoa.php');
require_once('Animal.php');

// TESTE 01
$elev1 = new Elevador(420, 6, 12, 0, 11, 1);
$pass1 = new Pessoa("Elias Anderson", 20, 50);
$cao1 = new Animal("Bidu", 4, 20);

$elev1->addPassageiro($pass1);
$elev1->imprimirAndar();
$elev1->imprimirPeso();
$elev1->imprimirPassageiros();

$elev1->escolherAndar(12);

$elev1->addPassageiro($cao1);
$elev1->imprimirAndar();
$elev1->imprimirPeso();
$elev1->imprimirPassageiros();

$elev1->delPassageiro($cao1);
$elev1->imprimirAndar();
$elev1->imprimirPeso();
$elev1->imprimirPassageiros();
// FIM DO TESTE 1

echo "<br>";
var_dump($elev1);
echo "<br>";
var_dump($pass1);
