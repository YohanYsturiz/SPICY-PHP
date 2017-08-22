<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];
 
		$nombre_inv= $_POST['nombre_inv'];
		$autor= $_POST['autor'];
		$tutor = $_POST['tutor'];
		$tipo_inv= $_POST['tipo_inv'];
		$otro_autor = $_POST['otro_autor'];
		$fecha_c = $_POST['fecha_c'];
		$lugar_inv = $_POST['lugar_inv'];
		$status = $_POST['status'];
		// $sede = $_POST['sede'];
		// $trayecto = $_POST['trayecto'];
		// $trimestre = $_POST['trimestre'];
		// $turno = $_POST['turno'];
		// $seccion = $_POST['seccion'];
		// $actividad_option = $_POST['actividad_option'];


	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mod_inv.php');
	$ins_investigaciones = new investigaciones();
	$columna = $ins_investigaciones->consultarUNAinvestigaciones($nombre_inv);
			
	if($columna)
		{

			$modif = new investigaciones();
			$columna = $modif->modificar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_c,$lugar_inv,$status,$pgconn);
		
		?>	
			<script>
				alert('Estudiante Modificado')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
// ?>
// <script>
// 		alert('Estudiante no existe')
// 		window.location="../.php";
// </script>		
// <?php 
		}
?>
