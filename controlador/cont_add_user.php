<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];
$cedulau  = $_SESSION['cedulau'];
 
if($_SESSION['usuario'] != "")
	{
		$cedulaN = $_POST['cedulaN'];
		$claveN = $_POST['claveN'];
		$usuarioN = $_POST['usuarioN'];
		$apellidos = trim($_POST['apellidos']);
		$nombres = trim($_POST['nombres']);
		$correo = trim($_POST['correo']);
		$cargo = trim($_POST['cargo']);
		$nivel_academico = trim($_POST['nivel_academico']);

		include('../modelo/mode_conection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

		include('../modelo/mode_user.php');
		$ins_usuario = new usuario();
		$columna = $ins_usuario->consultarUNusuario($cedulaN);	
		if($columna)
			{
?>
				<script>
						alert('Usuario ya existe')
    					window.location="../vista/vis_add_user.php";
				</script>		
<?php 
			}
		else 
			{
				
				$instanciar = new usuario();
				$columna = $instanciar->agregar($usuarioN,$claveN,$nombres,$apellidos,$cedulaN,$correo,$cargo,$nivel_academico,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
							alert("Usuario registrado");
    						window.location="../index.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('Registro de usuario fallido')
    							window.location="../vista/vis_add_user.php";
						</script>		
<?php
					}
			}
	}
	else
 	{
 ?>
 		<script>
 		 				alert('Usuario no autenticado');
		window.location="vis_login.php"; 		
		</script>		
 <?php 
	}
?>
