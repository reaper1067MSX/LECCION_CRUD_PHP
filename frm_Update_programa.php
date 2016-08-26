<?php

	require_once("programaCollector.php");
	require_once("programa.php");

	$alm= new programa();
	$model = new programaCollector();

	$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE - PROGRAMA</title>
</head>
<body style="padding:15px;">

	<form action="procesoUpdate_programa.php" method="POST">
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
			<label>Pais:</label>
			<input type="text" name="pais">
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