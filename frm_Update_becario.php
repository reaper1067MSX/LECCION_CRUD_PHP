<?php

	require_once("becarioCollector.php");
	require_once("becario.php");

	$alm= new becario();
	$model = new becarioCollector();

	$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE - BECARIO</title>
</head>
<body style="padding:15px;">

	<form action="procesoUpdate_becario.php" method="POST">
		<div>
			<br>
			<label>ID:</label>
			<input type="text" name="id" value="<?php echo $id ?>">
		</div>

		<div>
			<br>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			
		</div>

		<div>
			<br>
			<label>id_programa:</label>
			<input type="text" name="id_programa">
		</div>

		

		<div>
			<br>
			<input type="submit" name="enviar" valor="enviar">
			<br>
			<br>
			<a href="Listar_becario.php">Volver</a>
		</div>
		

	</form>

	






</body>
</html>