<?php
session_start();

	$evento = $_POST['evento'];

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mode_even.php');
	$ins_eventos = new eventos();
	$columna = $ins_eventos->consultarUNeventos($evento);
			
	if($columna)
		{
			$elim = new eventos();
			$columnaE = $elim->eliminar($evento,$pgconn);
			
		
?>	
		<script>
		alert('Evento Eliminado')
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
