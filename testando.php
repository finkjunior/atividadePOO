<?php
require_once('Elevador.php');
require_once('Animal.php');
require_once('Pessoa.php');

$objElevador = new Elevador();
$objPessoas = new Pessoa();
$objAnimal = new Animal();
$objPessoas1caralho = new Pessoa();
$objAnimal1caralho = new Animal();

$objElevador->pesoMax = 500;
$objElevador->numMax = 10;
$objElevador->numMaxLegs = 30;
$objElevador->quantAndar = 6;


$objPessoas->legs = 2;
$objPessoas->peso = 50;
$objPessoas->nome = 'Enzo';
$objPessoas1caralho->legs = 2;
$objPessoas1caralho->peso = 50;
$objPessoas1caralho->nome = 'Valentina';
$objAnimal->legs = 4;
$objAnimal->peso = 50;
$objAnimal->nome = 'Anastácio';
$objAnimal1caralho->legs = 4;
$objAnimal1caralho->peso = 50;
$objAnimal1caralho->nome = 'Romero Brito';

$objElevador->adicionarPassageiro($objAnimal);
$objElevador->imprimirPesoAtual();
$objElevador->imprimirAndarAtual();
$objElevador->imprimirNumerodePassageirosAtual();
$objElevador->adicionarPassageiro($objPessoas);
$objElevador->imprimirPesoAtual();
$objElevador->imprimirAndarAtual();
$objElevador->imprimirNumerodePassageirosAtual();
$objElevador->adicionarPassageiro($objPessoas1caralho);
$objElevador->imprimirPesoAtual();
$objElevador->imprimirAndarAtual();
$objElevador->imprimirNumerodePassageirosAtual();
$objElevador->adicionarPassageiro($objAnimal1caralho);
$objElevador->imprimirPesoAtual();
$objElevador->imprimirAndarAtual();
$objElevador->imprimirNumerodePassageirosAtual();
}
