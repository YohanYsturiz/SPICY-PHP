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
session_start();
	$nombre_inv = $_POST['nombre_inv'];

	include('../modelo/mode_conection.php');
	$conexion = new Connex();
	$pgconn=$conexion->conectar();
	
	include('../modelo/mod_inv.php');
	$ins_investigaciones = new investigaciones();
	$columna = $ins_investigaciones->consultarUNAinvestigaciones($nombre_inv);
				
	if($columna)
		{
			include('../vista/vis_muestra_inv.php');
		}
	else
		{
?>
<script>
		alert('Estudiante no existe');
		parent.location="../vista/vis_consult_una_inv.php";
</script>		
<?php 
		}
?>
