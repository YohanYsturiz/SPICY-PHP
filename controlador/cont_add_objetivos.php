<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];

  $cantidad = trim($_POST["cantidad"]);
  $tipo_obj = trim($_POST["tipo_obj"]);
  $cod_usuario = $_SESSION['cod_usuario'];
  $fecha_culminacion = trim($_POST["fecha_culminacion"]);
  $ponderacion_obj = trim($_POST["ponderacion_obj"]);
  $conex = "";


  include('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();

		include('../modelo/mode_objetivos.php');
		$ins_objetivos = new objetivos();			
				$instanciar = new objetivos();
				$columna = $instanciar->agregar($cantidad,$tipo_obj,$cod_usuario,$fecha_culminacion,$ponderacion_obj,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
								alert("Objetivo agregado");
    							window.location="../vista/perfil_usu.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('Objetivo no agregado ERROR')
    							window.location="../vista/vis_add_inv.php";
						</script>		
<?php
					}
			

?>
		
