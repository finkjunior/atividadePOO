<?php 

require_once('elevator.php');
require_once('pets.php');
require_once('people.php');

$elevator1 = new elevator();
$pass1 = new people($_GET['name1'], $_GET['weight1'], $_GET['legs1']);
$dog = new pets($_GET['name2'], $_GET['weight2'], $_GET['legs2']);

$elevator1->addPass($pass1);
$elevator1->addPass($dog);
$elevator1->delPass($dog);
$elevator1->chooseFloor($_GET['floor']);
$elevator1->printFloor();
$elevator1->printWeidht();
$elevator1->printPass();
$elevator1->printlegs();






?>