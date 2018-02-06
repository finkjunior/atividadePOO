<!DOCTYPE html>
<html>
<head>
	<html lang="pt-br">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="Third.php" method="_GET">
		<label for="pass"><h2>Quantos passageiros?</h2><h4><hr>**Capacidade máxima**:</h4>
			<ul><h5>
				<li>8 Passageiros</li>
				<li>32 Pernas</li>
				<li>400 Kg</li>
			</h5>
		</ul><hr></label>
		<input type="text" name="pass" id="pass" value="<?php echo $_GET['pass']; ?>">
		<button type="submit">Enviar</button>
	</form>

</body>
</html>