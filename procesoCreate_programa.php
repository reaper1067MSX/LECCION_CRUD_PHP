<?php

	require_once("programa.php");
	require_once("programaCollector.php");

	//Inicializacion

	$alm = new programa();
	$model = new programaCollector();

	//CATCH POST FOrMULARIO

	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];


	$model->InsertPrograma($nombre, $pais);



?>

<!DOCTYPE html>
<html>
<head>
	<title>PROCESO - INSERT - PROGRAMA</title>
</head>
<body>
	<a href="Listar_programa.php">Volver</a>

</body>
</html>