<?php 
	header("Content-type: text/html; charset=utf-8");
	$id = $_GET["id"];
	$link= mysql_connect("localhost","jorgew7_modal","prueba123") or die("Datos de conexion incorrectos");
	mysql_set_charset('utf8',$link);
	$con = mysql_select_db("jorgew7_modal",$link);
	$query = mysql_query("SELECT * FROM contenidos WHERE id=".$id);
	$resultado = mysql_fetch_array($query);
	echo $resultado["contenido"];
	
?>