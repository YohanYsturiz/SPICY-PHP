<?php
	session_start();
	$cod_usuario = $_SESSION['cod_usuario'];
	
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Estadisticas</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">

<!--Iconos-->
<script src="../js/lumino.glyphs.js"></script>

</head>

<body>
<?php 
include("header.html");
?>
	<section id="main-content">			
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Estadisticas</h1>	
			</div>
		</div><!--/.row-->
		    <div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading"><a name="indicadores">Indicador de cumplimiento</a></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar-chart-indicador" height="200" width="800"></canvas>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading"><a name="indicadores">Indicador de eficacia</a></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar_chart_indicador_eficacia" height="200" width="800"></canvas>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Estadisticas por PNF</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar-chart-indicador-pnf" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Calidad en procesos de Gestion</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Indicadores mensuales</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Estadisticas de Eventos</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart-evento" ></canvas>
							<div>	
			<?php
			include('../controlador/cont_estadisticas_generales.php');
			?>				
							<?php

                        echo "<img src='../images/azul.jpg' class='img-circle' width='20'> Eventos Iniciados: </img>"; echo $row['numero_eventoiniciado'];

                        echo "<br><img src='../images/rojo.jpg' class='img-circle' width='20'> Eventos en Solicitud: </img>"; echo $eventos_solicitud['numero_eventosolicitud'];
             
             			echo "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Eventos en Desarrollo: </img>"; echo $eventos_desarrollo['numero_eventodesarrollo'];
                      	
                      	echo "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Eventos Finalizado: </img>"; echo $eventos_finalizado['numero_eventofinalizado'];

                      	echo "<br><img src='../images/verdeclaro.jpg' class='img-circle' width='20'> Eventos Aprobados: </img>"; echo $eventos_aprobado['numero_eventostatusaprobado'];
              

             ?>
             </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Estadisticas de investigaciones</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="doughnut-chart-estadistica" ></canvas>
										<div>	
							<?php

			     	

		include_once('../modelo/mode_conection.php');
  		$conexion = new Connex();
  		$pgconn=$conexion->conectar();

                       
        echo "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Investigaciones en Desarrollo: </img> " ; echo $investigaciones_desarrollo['numero_investigacionesstatusde'];

        echo "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Investigaciones Finalizadas: </img> " ; echo $investigaciones_finalizado['numero_investigacionesstatusfi'];

        echo "<br><img src='../images/verdeclaro.jpg' class='img-circle' width='20'> Investigaciones Aprobadas: </img> " ; echo $investigaciones_aprobado['numero_investigaciones_aprobadas'];
           
             ?>
             </div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
				<div class="panel panel-default">
					<div class="panel-heading">Metas de Investigaciones por Trimestre</div>
					</div>
		<div class="row" >
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel" >
						<h4>1er Semestre:</h4>
						<div  class="easypiechart" id="easypiechart-blue" data-percent= '<?php echo $mtotal_porcentaje; ?>'><span class="percent">
                    <?php 
                    echo number_format(($mtotal),1,".",",");
              		?> 
						</span>
						</div>
				    <h5> Meta > 1 <br> 
				   <?php 
				    if ($mtotal >= 1) {

						echo "1er semestre exitoso";

					}
			 	     
			 	    else {

			 	    	echo "1er semestre por debajo del indice";
			 	    	 }
              		?> </h5>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>2do Semestre:</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent='<? echo $mtotal_porcentaje_dos; ?>'><span class="percent">
						<?php 
						echo number_format(($mtotal_2do_semestre),1,".",",");
						 ?>
						</span>
						</div>
					   <h5> Meta > 1 <br>
					   <?php 
				    if ($mtotal_2do_semestre >= 1) {

						echo "2 semestre exitoso";

					}
			 	     
			 	    else {

			 	    	echo "2do semestre por debajo del indice";
			 	    	 }
              		?> 
              		</h5>
					</div>
				</div>
			</div>
		</div><!--/.row-->									
	</div>	<!--/.main-->
	  </section>

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/estadisticas-generales.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/Chartestadistica.js">/*Permite mostrar las graficas de torta */</script> 

	
	<script>
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
