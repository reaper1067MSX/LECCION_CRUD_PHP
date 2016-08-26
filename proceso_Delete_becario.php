<?php

	require_once("becario.php");
	require_once("becarioCollector.php");

	//Inicializacion

	$alm  = new becario();
	$model = new becarioCollector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeleteBecario($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE - BECARIO</title>
</head>
<body>

	<?php if($result = true){
		echo "DELETE SUCESSFULL!";

	}else{
		echo "DELETE FAIL";
	}

	?>

	<br>
	<a href="Listar_becario.php">Volver</a>


</body>
</html>