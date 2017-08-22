<?php

  $semestre_uno_ini = trim($_POST["semestre_uno_ini"]);
  $semestre_uno_c = trim($_POST["semestre_uno_c"]);
  $semestre_dos_ini = trim($_POST["semestre_dos_ini"]);
  $semestre_dos_c = trim($_POST["semestre_dos_c"]);
  $cod_calendario = '1';

  	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();

	include('../modelo/mode_fechas_semestre.php');
	$ins_fechas_semestre = new fechas_semestre();
	$columna = $ins_fechas_semestre->consultarUNAfecha_semestre($cod_calendario);
	
	if($columna)
		{

			$modif = new fechas_semestre();
			$columna = $modif->modificarfechas($semestre_uno_ini,$semestre_uno_c,$semestre_dos_ini,$semestre_dos_c,$cod_calendario,$pgconn);
		
		?>	
			<script>
				alert('Fechas de Evaluacion modificadas')
				window.location="../index.php";
			</script>		
		<?php
		}
	else
		{
 ?>
<?php 
		}
?>
