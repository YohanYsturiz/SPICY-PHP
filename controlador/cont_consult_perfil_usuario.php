<?php

 $cod_usuario = $_GET['cod_usuario']; 

include_once('../modelo/mod_conexion.php');
$conexionPGSQL = new conexionPGSQL();
$conectar = $conexionPGSQL->conectar();
  
  include_once('../modelo/mode_user.php');
  $ins_usuario = new usuario();
  $columna = $ins_usuario->consultarUNusuarioget($cod_usuario);
        
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
