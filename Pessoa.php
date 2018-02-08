<?php

	require_once('Ser.php');
	class Pessoa extends Ser {

		function __construct($nome, $peso = 85, $pernas = 2){
			parent::__construct($nome, $peso, $pernas);
		}

	}
