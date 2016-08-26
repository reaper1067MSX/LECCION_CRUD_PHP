<?php

	require_once("becario.php");
	require_once("becarioCollector.php");

	//Inicializacion

	$alm = new becario();
	$model = new becarioCollector();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Becario</title>
</head>
<body style="padding:15px;">

	<form id="principal" action="procesoCreate_Becario.php" method="POST">
		<div>
			<br>
			<label>Nombre: </label>
			<input type="text" name="nombre">
		</div>

		<div>
			<label>id_programa: </label>
			<input type="text" name="id_programa">
		</div>
		

		<div>
			<input type="submit" name="enviar" value="enviar">
		</div>
		


	</form>





</body>
</html>