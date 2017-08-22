<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];

  $evento = trim($_POST["evento"]);
  $tipo_ev = trim($_POST["tipo_ev"]);
  $linea_investigacion = trim($_POST["linea_investigacion"]);
  $lider = trim($_POST["lider"]);
  $invitados = trim($_POST["invitados"]); 
  $fecha_ini_e = trim($_POST["fecha_ini_e"]);
  $fecha_cu_eve = trim($_POST["fecha_cu_eve"]); 
  $lugar_e = trim($_POST["lugar_e"]); 
  $tema = trim($_POST["tema"]); 
  $facilitador = trim($_POST["facilitador"]);
  $asistencia = trim($_POST["asistencia"]);
  $estatus_e = trim($_POST["estatus_e"]);
  $ruta = "../Imagenes/";
  $conex = "";
  opendir($ruta);
  $destino = $ruta.$_FILES['foto']['name'];
  copy($_FILES['foto']['tmp_name'],$destino);
  $archivo_e=($_FILES['foto']['name']);
  $descripcion = trim($_POST["descripcion"]);
  $cod_usuario = $_SESSION['cod_usuario'];
  //$file_inv = trim($_POST["file_inv"]);
  // $trayecto = trim($_POST["trayecto"]);
  // $trimestre = trim($_POST["trimestre"]);
  // $turno = trim($_POST["turno"]);
  // $seccion = trim($_POST["seccion"]);
  // $actividad_option = trim($_POST["actividad_option"]); 

  include('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();



		include('../modelo/mode_even.php');
		$ins_eventos = new eventos();
		$columna = $ins_eventos->consultarUNeventos($evento);	
		if($columna)
	
			{
?>
				<script>
						alert('evento ya existe');
    					window.location="../vista/vis_add_even.php";
				</script>		
<?php 
			}
		else 
			{
				
				$instanciar = new eventos();
				$columna = $instanciar->agregar($evento,$tipo_ev,$linea_investigacion,$lider,$invitados,$fecha_ini_e,$fecha_cu_eve,$lugar_e,$tema,$facilitador,$asistencia,$estatus_e,$archivo_e,$descripcion,$cod_usuario,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
							alert("evento registrado");
    						window.location="../index.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('Registro de Evento fallido')
    							window.location="../vista/vis_add_even.php";
						</script>		
<?php
					}
			}

?>
