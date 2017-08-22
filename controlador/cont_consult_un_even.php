<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
      $("document").ready(function(){
        $("#tipoactividad").load("../vista/con_act_options.php");

        $("#tipoactividad").change(function(){
          
          var id_tipo_actividad = $("#tipoactividad").val();
          $.get("../vista/con_act_options_2.php",{enviar:id_tipo_actividad})
          .done(function(data){
            $("#actividad").html(data);
          })
        })
      })
    </script>
<?php

  $evento = $_POST['evento'];

  include('../modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();
  
  include('../modelo/mode_even.php');
  $ins_eventos = new eventos();
  $columna = $ins_eventos->consultarUNeventos($evento);
        
  if($columna)
    {
      include('../vista/vis_muestra_even.php');
    }
  else
    {
?>
<script>
    alert('evento no existe');
    parent.location="../vista/vis_consult_un_even.php";
</script>   
<?php 
    }
?>
