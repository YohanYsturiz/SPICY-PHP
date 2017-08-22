<OPTION selected>Seleccione
<?php

 $id_linea_investigacion = $_GET['enviar'];

include('../modelo/mode_conection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

$query = "select * from sig_cuc.lider where id_linea_investigacion = $id_linea_investigacion";
$result =pg_query($pgconn,$query);

while ($row = pg_fetch_array($result))
	{
		echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
	}

?>

