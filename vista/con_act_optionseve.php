<OPTION selected>Seleccione

<?php
include('../modelo/mode_conection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

$query = "select * from sig_cuc.linea_investigacion";
$result =pg_query($pgconn,$query);

while ($row = pg_fetch_array($result))
	{
		echo '<option value="'.$row['id_linea_investigacion'].'">'.$row['linea'].'</option>';
	}


?>