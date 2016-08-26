<?php

	require_once("programa.php");
	require_once("programaCollector.php");

	//Inicializacion

	$alm = new programa();
	$model = new programaCollector();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Programa</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="procesoCreate_programa.php" method="POST">
		<div>
			<br>
			<label>Nombre: </label>
			<input type="text" name="nombre">
		</div>

		<div>
			<label>Pais: </label>
			<input type="text" name="pais">
		</div>
		

		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
		


	</form>





</body>
</html>