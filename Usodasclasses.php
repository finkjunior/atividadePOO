<?php

	require('Animal.php');
	require('Elevador.php');
	require('Pessoa.php');

	$p1 =  new Pessoa(90,'Mauro');
	$e1 = new Elevador(540,8,16,20);
	$a1 = new Animal(20,'Mel');

	// $e1->addPassageiro($a1);
	// $e1->escolherAndar(9);
	// $e1->numeroPassageiros($a1);
	// $e1->addPassageiro($a1);
	// $e1->removePassageiro($p1);

	?>
