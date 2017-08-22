<?php
session_start();

	$nombre_inv = $_POST['nombreN'];

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mod_inv.php');
	$ins_investigaciones = new investigaciones();
	$columna = $ins_investigaciones->consultarUNAinvestigaciones($nombre_inv);
			
	if($columna)
		{
			$elim = new investigaciones();
			$columnaE = $elim->eliminar($nombre_inv,$pgconn);
			
		
?>	
		<script>
		alert('Estudiante Eliminado')
		window.location="../index.php";
		</script>		
<?php

		}
	else
		{
?>
<script>
		alert('Estudiante no existe')
</script>		
<?php 
		}
?>
