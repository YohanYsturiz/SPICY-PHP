<?php

 $id_tipo_actividad = $_GET['enviar'];

include('../modelo/mod_connection.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();

$query = "select * from bienestar_estudiantil.actividad where id_tipo_actividad = $id_tipo_actividad";
$result =pg_query($pgconn,$query);

while ($row = pg_fetch_array($result))
	{
		echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
	}

?>

