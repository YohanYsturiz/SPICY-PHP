<?php
session_start();
$cedula= $_POST['cedula'];
$clave  = $_POST['clave'];
$_SESSION['cedula'] = $cedula; 
$_SESSION['clave'] = $clave; 

include('../modelo/mode_conection.php');
$conexion = new Connex(); 
$pgconn=$conexion->conectar();

include('../modelo/mode_user.php');
$instanciar = new usuario();
$columna = $instanciar->autenticar_pre_login($cedula,$clave,$pgconn);
if($columna<>0)
{
	$_SESSION['cedula'] = $columna['cedula'];
	$_SESSION['cod_usuario'] = $columna['cod_usuario'];

?>

			<script type="text/javascript" >
				alert("Has sido logueado correctamente");
				parent.location = "../vista/vis_add_inv.php"
			</script>

			<?php
}

	else {

		?>

			<script type="text/javascript" >
				alert("Usuario no existe");
				parent.location = "../vista/vis_pre_agregar_user.php"
			</script>

			<?php
		}
?>