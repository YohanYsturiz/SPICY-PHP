<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];
 
 $nombre_inv = trim($_POST["nombre_inv"]);
  $autor = trim($_POST["autor"]);
  $tutor = trim($_POST["tutor"]);
  $tipo_inv = trim($_POST["tipo_inv"]);
  $otro_autor = trim($_POST["otro_autor"]); 
  $fecha_ini = trim($_POST["fecha_ini"]); 
  $fecha_c = trim($_POST["fecha_c"]); 
  $lugar_inv = trim($_POST["lugar_inv"]); 
  $status = trim($_POST["status"]); 
  $linea_investigacion = trim($_POST["linea_investigacion"]);
  $ruta = "../Imagenes/";
  $conex = "";
  opendir($ruta);
  $destino = $ruta.$_FILES['foto']['name'];
  copy($_FILES['foto']['tmp_name'],$destino);
  $archivo=($_FILES['foto']['name']);
  $precio = trim($_POST["precio"]);
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
			$columna = $modif->modificar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_ini,$fecha_c,$lugar_inv,$status,$linea_investigacion,$archivo,$precio,$pgconn);
		
		?>	
			<script>
				alert('Registro Modificado')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
 ?>
 <!-- <script>
// 		alert('Estudiante no existe')
// 		window.location="../.php";
// </script>		
// <?php 
		}
?>-->
