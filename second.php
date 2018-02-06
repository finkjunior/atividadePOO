
<?php
function input($pass){
	for ($i=1; $i <=$pass; $i++) { 

		echo "<hr/><input type=\"radio\" name=\"$i\" id=\"gender$i\" checked>Pessoa<br/>";
		echo "<input type=\"radio\" name=\"$i\" id=\"gender$i\">Animal<br/>";
		echo "<input type=\"text\" name=\"name$i\" id=\"pass$i\">Nome passageiro $i<br>";
		echo "<input type=\"text\" name=\"legs$i\" id=\"legs$i\">Número de pernas passageiro $i<br>";
		echo "<input type=\"text\" name=\"weight$i\" id=\"weidht$i\">Peso passageiro $i<br/>";
		echo "<input type=\"text\" name=\"floor\" id=\"floor\">Qual o andar?<br/><br/><br/>";

	}
}

echo "<h4>Capacidade máxima:</h4>
<ul>
<h5>
	<li>8 Passageiros</li>
	<li>32 Pernas</li>
	<li>400 Kg</li>
</h5>
</ul>";

?>

