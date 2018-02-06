<?php 

require_once('second.php')

?>

<form action="resultado.php" method="_GET">
	<?php input($_GET['pass']);
	input($_GET['legs']); 
	input($_GET['weidht']);
	input($_GET['gender']);
	input($_GET['floor']);?>  
	<button type="submit">Enviar</button>
</form>

