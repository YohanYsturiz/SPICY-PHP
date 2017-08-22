<?php
  include('../modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();

  $query = "select * from sig_cuc.evento
inner join  sig_cuc.usuario
on fk_cod_usuario=usuario.cod_usuario";
  $result = pg_query($pgconn,$query);
  $numero = 0;
?>
