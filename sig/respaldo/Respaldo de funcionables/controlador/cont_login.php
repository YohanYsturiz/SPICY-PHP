<?php
session_start();
$usuario= $_POST['usuario'];
$clave  = $_POST['clave'];
$_SESSION['usuario'] = $usuario; 
$_SESSION['clave'] = $clave; 

include('../modelo/mode_conection.php');
$conexion = new Connex(); 
$pgconn=$conexion->conectar();

include('../modelo/mode_user.php');
$instanciar = new usuario();
$columna = $instanciar->autenticar($clave,$usuario,$pgconn);
if($columna<>0)
{
	$_SESSION['cedula'] = $columna['cedula'];

?>

			<script type="text/javascript" >
				alert("Has sido logueado correctamente");
				parent.location = "../index.php"
			</script>

			<?php
}

	else {

		?>

			<script type="text/javascript" >
				alert("Usuario no existe");
				parent.location = "../vista/vis_login.php"
			</script>

			<?php
		}
?>