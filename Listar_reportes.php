<?php

	require_once("conexion.php");

      require_once("reporte.php");

	require_once("reporteCollector.php");

	//Inicializacion

	$alm = new reporte();
	$model = new reporteCollector();

	$id= 0;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - REPORTE - Consulta</title>
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
            			<th style="text-align:left;">ID_BECARIO</th>
            			<th style="text-align:left;">Nombre_Becario</th>
                              <th style="text-align:left;">ID_Programa_Asociado</th>
                              <th style="text-align:left;">ID_PROGRAMA</th>
                              <th style="text-align:left;">Nombre_Programa</th>
            			<th style="text-align:left;">Pais</th>
            			
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarReporte() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_id();  ?></td>
            				<td><?php echo $r-> get_nombre_becario(); ?></td>
            				<td><?php echo $r-> get_idPrograma(); ?></td>
                                    <td><?php echo $r-> get_nombre_programa(); ?></td>
                                    <td><?php echo $r-> get_pais(); ?></td>

            				

            				
            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>