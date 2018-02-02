<?php
  require_once('Vivo.php');

  class Animal extends Vivo {  
    public function __construct($peso,$nome,$perna = 4){
      $this->perna = $perna;
      parent::__construct($peso,$nome);
    }
  }

 ?>
