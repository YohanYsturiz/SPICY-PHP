<?php

 $cod_inv = $_GET['cod_inv']; 

include_once('../modelo/mod_conexion.php');
$conexionPGSQL = new conexionPGSQL();
$conectar = $conexionPGSQL->conectar();
  
  include_once('../modelo/mod_inv.php');
  $ins_investigaciones = new investigaciones();
  $columna = $ins_investigaciones->consultarUNAinvestigacionesget($cod_inv);
        
  if($columna)
    {
      ?>
     <script>
            alert('Datos de la investigacion');
        </script>  
   <?php 
    }
  else
    {
      ?>
        <script>
            alert('Investigacion no existe');
            parent.location="../vista/vis_consult_all_inv.php";
        </script>   
      <?php 
    }
?>
