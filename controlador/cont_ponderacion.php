<?php
session_start();
$usuario	= $_SESSION['usuario'];
$clave 	= $_SESSION['clave'];  


		$aprobado = trim($_POST["aprobado"]);
        $cod_inv = trim($_POST['cod_inv']);
        $fk_cod_usuario = trim($_POST['fk_cod_usuario']);


		// $contadormuy_buena = $muy_buena;
		// echo "" . $contadormuy_buena++ . "<br />\n";
		// echo "debe ser 2:" . $contadormuy_buena . "<br />\n";

		include('../modelo/mode_conection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

		include('../modelo/mode_ponderacion.php');
		$ins_ponderacion = new ponderacion();
		$columna = $ins_ponderacion->consultaroldponderacion($cod_inv);	
		if($columna)
			{
?>
				<script>
						alert('esta investigacion ya fue aprobada')
    					window.location="../vista/vis_consult_all_inv.php";
				</script>		
<?php 
			}
		else 
			{
				
				$instanciar = new ponderacion();
				$columna = $instanciar->agregar($aprobado,$cod_inv,$fk_cod_usuario,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
							alert("investigacion aprobada");
    						window.location="../index.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('error al aprobar la investigacion ')
    							window.location="../vista/vis_add_user.php";
						</script>		
<?php
					}
			}

?>
