<?php
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];
 
  $title = trim($_POST["title"]);
  $star = trim($_POST["star"]);
  $end = trim($_POST["end"]);

    include('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();

// connexion à la base de données
include('../modelo/mode_events.php');

		$ins_events = new events();
		$columna = $ins_events->fullcalendaruna($title);	
		if($columna)
	
			{
?>
				<script>
						alert('evento ya existe');
    					window.location="../vista/vis_add_even.php";
				</script>		
<?php 
			}
		else 
			{
				
				$instanciar = new events();
				$columna = $instanciar->agregar($title,$star,$end,$pgconn);	
				if($columna)
					{
?>
						<script type='text/javascript'>
							{
							alert("evento registrado");
    						window.location="../index.php";
							}
						</script>
<?php 	
					}
					else 
					{
?>
						<script>
								alert('Registro de Evento fallido')
    							window.location="../vista/vis_add_even.php";
						</script>		
<?php
					}
			}

?>