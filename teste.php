<?php

require_once ('elevador.php');
require_once ('pessoa.php');
require_once ('animal.php');

$elevador = new elevador(300, 4, 10, 8, 0);
$pessoa1 = new pessoa(2, 80, 'tiago');
$pessoa2 = new pessoa(2, 70, 'tiago');
$pessoa3 = new pessoa(2, 50, 'tiago');
$dog = new pessoa(4, 10, 'tiago');

$elevador->addPas($pessoa1);
$elevador->escAndar(5);
$elevador->addPas($pessoa2);
//$elevador->escAndar(5);
$elevador->addPas($pessoa3);
//$elevador->escAndar(10);
$elevador->addPas($dog);

echo $elevador->impAnd();


?>
