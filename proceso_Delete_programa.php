<?php

	require_once("programa.php");
	require_once("programaCollector.php");

	//Inicializacion

	$alm  = new programa();
	$model = new programaCollector();
	
	$id = $_GET['id'];

	//Process
	echo $id;
	$result= $model->DeletePrograma($id);

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
	<a href="Listar_programa.php">Volver</a>


</body>
</html>