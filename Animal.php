<?php

	require_once('Ser.php');

	class Animal extends Ser {

		function __construct($nome, $peso = 30, $pernas = 4){
			parent::__construct($nome, $peso, $pernas);
		}

	}
