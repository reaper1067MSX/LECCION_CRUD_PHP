<?php

	require_once("conexion.php");
	require_once("programa.php");
	require_once("programaCollector.php");

	//Inicializacion

	$alm = new programa();
	$model = new programaCollector();

	$id= 0;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - PROGRAMA - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="Administrator.php">Volver</a>
			<br>
			<br>
            <a href="Frm_Create_programa.php">Create</a>
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID</th>
            			<th style="text-align:left;">Nombre</th>
            			<th style="text-align:left;">Pais</th>
            			
            			<!- Opciones para la administracion ->
            			<th style="text-align:left;">Option</th>
            			<th style="text-align:left;">Option</th>
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarPrograma() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_id();  ?></td>
            				<td><?php echo $r-> get_nombre(); ?></td>
            				<td><?php echo $r-> get_pais(); ?></td>
            				

            				<!- OPTIONS ->

            				<td><a href="frm_Update_programa.php?id=<?php echo $r->get_id(); ?>">Update</a></td>
            				<td><a href="proceso_Delete_programa.php?id=<?php echo $r->get_id(); ?>">Delete</a></td>

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>