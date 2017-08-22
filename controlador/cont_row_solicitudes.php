<?php                
$query = "select * from sig_cuc.investigaciones
          inner join  sig_cuc.usuario
          on fk_cod_usuario=usuario.cod_usuario where status='finalizado'";
$resultsolicitud = pg_query($pgconn,$query);
$i=0;

$query = "select semestre_uno_ini, semestre_uno_c, semestre_dos_ini, semestre_dos_c from sig_cuc.calendario";
$fechas_semestre = pg_query($pgconn,$query);
$i=0;
?>
