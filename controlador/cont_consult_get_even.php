<?php

 $cod_even = $_GET['cod_even']; 

include_once('../modelo/mod_conexion.php');
$conexionPGSQL = new conexionPGSQL();
$conectar = $conexionPGSQL->conectar();
  
  include_once('../modelo/mode_even.php');
  $ins_eventos = new eventos();
  $columna = $ins_eventos->consultarUNeventosget($cod_even);
        
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
            alert('Evento no existe');
            parent.location="../vista/vis_consult_all_inv.php";
        </script>   
      <?php 
    }
?>
