<OPTION selected>Seleccione
<?php
include('../modelo/mod_connection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

$query = "select * from bienestar_estudiantil.tipo_actividad";
$result =pg_query($pgconn,$query);

while ($row = pg_fetch_array($result))
	{
		echo '<option value="'.$row['id_tipo_actividad'].'">'.$row['nombre'].'</option>';
	}


?>