<?php
session_start();
$cedula = $_SESSION['cedula']; 
$clave = $_SESSION['clave']; 
 
		
		$usuarioN = $_POST['usuarioN'];
		$clave = $_POST['clave'];
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
		$columna = $ins_usuario->consultarUNusuario($cedula);	
		if($columna)
        $conex = "";
      
			
	if($columna)
		{

			$modif = new usuario();
			$columna = $modif->completar_formulario($usuarioN,$clave,$apellidos,$nombres,$correo,$cargo,$nivel_academico,$cedula,$pgconn);
		
		?>	
			<script>
				alert('Datos Cargados')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
 ?>
<script>
  alert('Registo no completado')
	window.location="../vista/vis_pre_agregar_user.php";
 </script>		
 <?php 
		}
?>
