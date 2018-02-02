<?php
  require_once('Vivo.php');

  class Pessoa extends Vivo{
      public function __construct($peso,$nome,$perna = 2){
        $this->perna = $perna;
        parent::__construct($peso,$nome);
      }
    }
  

 ?>
