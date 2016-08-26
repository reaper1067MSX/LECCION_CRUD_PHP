<?php

	require_once("becario.php");
	require_once("becarioCollector.php");

	//Inicializacion

	$alm = new becario();
	$model = new becarioCollector();

	//CATCH POST FOrMULARIO

	$nombre = $_POST['nombre'];
	$id_programa = $_POST['id_programa'];


	$model->InsertBecario($nombre, $id_programa);



?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - BECARIO</title>
</head>
<body>
	<a href="Listar_becario.php">Volver</a>

</body>
</html>