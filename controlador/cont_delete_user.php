<?php
session_start();

	$cod_usuario = $_POST['cod_usuario'];

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mode_user.php');
	$ins_usuario = new usuario();
	$columna = $ins_usuario->consultarUNusuario($cod_usuario);
			
	if($columna)
		{
			$elim = new usuario();
			$columnaE = $elim->eliminar($cod_usuario,$pgconn);
			
		
?>	
		<script>
		alert('Usuario Eliminado')
		window.location="../index.php";
		</script>		
<?php

		}
	else
		{
?>
<script>
		alert('Usuario no existe')
</script>		
<?php 
		}
?>
