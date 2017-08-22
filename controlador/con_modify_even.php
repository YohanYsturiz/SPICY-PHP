<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];
 
		$evento= $_POST["evento"];
		$invitados = $_POST['invitados'];
		$linea_investigacion = trim($_POST["linea_investigacion"]);
		$lider = trim($_POST["lider"]);
		$tipo_ev= $_POST['tipo_ev'];
		$facilitador = $_POST['facilitador'];
		$asistencia = $_POST['asistencia'];
		$fecha_ini_e= $_POST['fecha_ini_e'];
		$fecha_cu_eve= $_POST['fecha_cu_eve'];
		$lugar_e = $_POST['lugar_e'];
		$tema = $_POST['tema'];
		$estatus_e = $_POST['estatus_e'];
		$ruta = "../Imagenes/";
        $conex = "";
        opendir($ruta);
        $destino = $ruta.$_FILES['foto']['name'];
        copy($_FILES['foto']['tmp_name'],$destino);
        $archivo_e=($_FILES['foto']['name']);
        $descripcion = trim($_POST["descripcion"]);
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
			$columna = $modif->modificar($evento,$invitados,$linea_investigacion,$lider,$tipo_ev,$facilitador,$asistencia,$fecha_ini_e,$fecha_cu_eve,$lugar_e,$tema,$estatus_e,$archivo_e,$descripcion,$pgconn);
		
		?>	
			<script>
				alert('Evento Modificado')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
 ?>
<script>
  alert('Estudiante no existe')
	window.location="../index.php";
 </script>		
 <?php 
		}
?>
