 <?php  
 include_once('modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();
  
  $query = " select count(*) AS numero_inv
  from sig_cuc.investigaciones";

  $resulinv = pg_query($pgconn,$query);
  while($total = pg_fetch_array($resulinv))
  {

    echo "" . 
      $total["numero_inv"] . "";      
 }

  $query = " select count(*) AS numero_event
  from sig_cuc.evento";


?>          