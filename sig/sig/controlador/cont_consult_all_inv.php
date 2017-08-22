<?php
session_start();

	$cedula = $_POST['cedula'];

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mode_user.php');
	$ins_estudiante = new usuario();
	$columna = $ins_estudiante->consultarinvestigaciones($pgconn);
	
	if ($columna)
		{

			return $columna;
		}
	else
		{
?>
<script>
		alert('Usuario no existe');
		window.location="../vista/vis_consult_menu_stu.php";
</script>		
<?php 
		}
?>
