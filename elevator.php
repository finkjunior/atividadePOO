<?php

class elevator{

	public $maxWeidht=400, $maxPass=8, $maxLegs=32, $maxFloor=15;
	public $floorCurrent=0, $weidhtCurrent=0, $legsCurrent=0, $passCurrent=0;

	public function __construct( $floorCurrent=0, $passCurrent=0, $legsCurrent=0,$maxWeidht=400, $maxPass=8, $maxLegs=16, $maxFloor=15){

		$this->maxWeidht = $maxWeidht;
		$this->maxPass = $maxPass;
		$this->maxLegs = $maxLegs;
		$this->maxFloor = $maxFloor;
		$this->passCurrent = $passCurrent;
		$this->floorCurrent = $floorCurrent;
	}

	public function addPass($pass){
		if ($this->maxPass > $this->passCurrent) {
			if ($this->legsCurrent+$pass->legs <=$this->maxLegs) {
				if ($this->weidhtCurrent+$pass->weidht <=$this->maxWeidht) {
					$this->passCurrent += 1;
					$this->legsCurrent += $pass->legs;
					$this->weidhtCurrent += $pass->weidht;
				} else {
					print("<h1>Elevador lotado por excesso de peso!</h1>");
				}
			} else {
				print("<h1>Elevador lotado por excesso de pernas!</h1>");
			}

		}

		else {
			print("<h1>Elevador lotado por número de pessoas!</h1>");
		}
	}

	public function delPass($pass){

		$this->passCurrent -= 1;
		$this->legsCurrent -= $pass->legs;
		$this->weidhtCurrent -= $pass->weidht;
	}


	public function choosefloor($floor){
		if ($floor <= $this->maxFloor ) {
			$this->floorCurrent = $floor;
		}else {
			print("<h1>Esse andar não existe!</h1>");
		}

	}


	public function printFloor(){
		print("O andar atual é: " . $this->floorCurrent . "<br/>");
	}

	public function printPass(){
		print("A quantidade de passageiros atual é: " . $this->passCurrent . "<br/>");
	}

	public function printWeidht(){
		print("O peso atual é: " . $this->weidhtCurrent . "<br/>");
	}

	public function printLegs(){
		print("A quantidade de pernas atual é: " . $this->legsCurrent . "<br/>");
	}

	
}
?>