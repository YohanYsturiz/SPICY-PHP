<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];

$status = 'Aprobado';
$cod_inv = trim($_POST["status"]);

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mod_inv.php');
	$ins_investigaciones = new investigaciones();
	$columna = $ins_investigaciones->aprobarinvestigaciones($cod_inv);
			
	if($columna)
		{

			$modif = new investigaciones();
			$columna = $modif->modificarstatus($status,$cod_inv,$pgconn);
		
		?>	
			<script>
				alert('Documentos aprobados')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
		?>
		<script>	
			alert('Error al aprobar estatus')
			window.location="../index.php";
		</script>
		<?php
		}
 ?>