<?php

	require_once("becarioCollector.php");
	require_once("becario.php");

	$alm= new becario();
	$model = new becarioCollector();

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$id_programa = $_POST['id_programa'];
	

	$model->UpdateBecario($id ,$nombre, $id_programa);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="Listar_becario.php">Volver</a>

</body>
</html>