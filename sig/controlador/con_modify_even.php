<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];
 
		$evento= $_POST['evento'];
		$tipo_ev= $_POST['tipo_ev'];
		$invitados = $_POST['invitados'];
		$fecha_e= $_POST['fecha_e'];
		$lugar_e = $_POST['lugar_e'];
		$tema = $_POST['tema'];
		$facilitador = $_POST['facilitador'];
		$asistencia = $_POST['asistencia'];
		// $sede = $_POST['sede'];
		// $trayecto = $_POST['trayecto'];
		// $trimestre = $_POST['trimestre'];
		// $turno = $_POST['turno'];
		// $seccion = $_POST['seccion'];
		// $actividad_option = $_POST['actividad_option'];


	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mode_even.php');
	$ins_eventos = new eventos();
	$columna = $ins_eventos->consultarUNeventos($evento);
			
	if($columna)
		{

			$modif = new eventos();
			$columna = $modif->modificar($evento,$tipo_ev,$invitados,$fecha_e,$lugar_e,$tema,$facilitador,$asistencia,$pgconn);
		
		?>	
			<script>
				alert('Evento Modificado')
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
