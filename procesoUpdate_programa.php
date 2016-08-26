<?php

	require_once("programaCollector.php");
	require_once("programa.php");

	$alm= new programa();
	$model = new programaCollector();

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];
	

	$model->UpdatePrograma($id ,$nombre, $pais);

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROCESS - UPDATE</title>
</head>
<body>
	<br>
	<a href="Listar_programa.php">Volver</a>

</body>
</html>