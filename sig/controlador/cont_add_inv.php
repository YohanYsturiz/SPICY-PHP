<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];

  $nombre_inv = trim($_POST["nombre_inv"]);
  $autor = trim($_POST["autor"]);
  $tutor = trim($_POST["tutor"]);
  $tipo_inv = trim($_POST["tipo_inv"]);
  $otro_autor = trim($_POST["otro_autor"]); 
  $fecha_c = trim($_POST["fecha_c"]); 
  $lugar_inv = trim($_POST["lugar_inv"]); 
  $status = trim($_POST["status"]); 
  //$file_inv = trim($_POST["file_inv"]);
  // $trayecto = trim($_POST["trayecto"]);
  // $trimestre = trim($_POST["trimestre"]);
  // $turno = trim($_POST["turno"]);
  // $seccion = trim($_POST["seccion"]);
  // $actividad_option = trim($_POST["actividad_option"]); 

  include('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();



		include('../modelo/mod_inv.php');
		$ins_investigaciones = new investigaciones();
		$columna = $ins_investigaciones->consultarUNAinvestigaciones($nombre_inv);	
		if($columna)
	
			{
?>
				<script>
						alert('Investigacion ya existe');
    					window.location="../vista/vis_add_inv.php";
				</script>		
<?php 
			}
		else 
			{
				
				$instanciar = new investigaciones();
				$columna = $instanciar->agregar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_c,$lugar_inv,$status,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
							alert("Investigacion registrada");
    						window.location="../index.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('Registro de Investigacion fallida')
    							window.location="../vista/vis_add_inv.php";
						</script>		
<?php
					}
			}

?>
		
