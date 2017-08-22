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

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Estadisticas Trimestrales</div>
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
					<div class="panel-heading">Indicadores de Calidad</div>
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
							<canvas class="chart" id="pie-chart" ></canvas>
							<div>	
							<?php
			include_once('../modelo/mode_conection.php');
			$conexion = new Connex();
  		$pgconn=$conexion->conectar();
           $query = "select count(*) AS numero_eventoiniciado
					 from sig_cuc.evento
					 where estatus_e='iniciado'";
		 $resulevestatusi = pg_query($pgconn,$query);
                     while($totalevestatusi = pg_fetch_array($resulevestatusi))
                        {
                        echo "<img src='../images/azul.jpg' class='img-circle' width='20'> Eventos iniciados:" . $totalevestatusi["numero_eventoiniciado"] . "";      
                   }
             
                    $query = "select count(*) AS numero_eventosolicitud
					from sig_cuc.evento
					where estatus_e='solicitud'";
		 $resulevestatusso = pg_query($pgconn,$query);
                     while($totalevestatusso = pg_fetch_array($resulevestatusso))
                        {
                        echo  "<br><img src='../images/rojo.jpg' class='img-circle' width='20'> Eventos en solicitud:" . $totalevestatusso["numero_eventosolicitud"] . "";      
                   }
               
                      $query = "select count(*) AS numero_eventodesarrollo
					from sig_cuc.evento
					where estatus_e='desarrollo'";
		 $resulevestatusde = pg_query($pgconn,$query);
                     while($totalevestatusde = pg_fetch_array($resulevestatusde))
                        {
                        echo  "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Eventos en Desarrollo:" . $totalevestatusde["numero_eventodesarrollo"] . "";      
                   }

                     $query = "select count(*) AS numero_eventofinalizado
					from sig_cuc.evento
					where estatus_e='finalizado'";
		 $resulevestatusfi = pg_query($pgconn,$query);
                     while($totalevestatusfi = pg_fetch_array($resulevestatusfi))
                        {
                        echo  "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Investigaciones en estado finalizado:" . $totalevestatusfi["numero_eventofinalizado"] . "";      
                   }
            $query = "select count(*) AS numero_eventostatusaprobado
					from sig_cuc.evento
					where estatus_e='aprobado'";
		 $resulstatusaprobado = pg_query($pgconn,$query);
                     while($totalstatusaprobado = pg_fetch_array($resulstatusaprobado))
                        {
                        echo  "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Investigaciones en estado Aprobado:" . $totalstatusaprobado["numero_eventostatusaprobado"] . "";      
                   }

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
							<canvas class="chart" id="doughnut-chart" ></canvas>
										<div>	
							<?php
		include_once('../modelo/mode_conection.php');
  		$conexion = new Connex();
  		$pgconn=$conexion->conectar();
           $query = "select count(*) AS numero_investigacionesstatusi
					from sig_cuc.investigaciones
					where status='iniciado'";
		 $resulstatusi = pg_query($pgconn,$query);
                     while($totalstatusi = pg_fetch_array($resulstatusi))
                        {
                        echo "<img src='../images/azul.jpg' class='img-circle' width='20'> Investigaciones en estatus iniciado:" . $totalstatusi["numero_investigacionesstatusi"] . "";      
                   }
             
                    $query = "select count(*) AS numero_investigacionesstatusso
					from sig_cuc.investigaciones
					where status='solicitud'";
		 $resulstatusso = pg_query($pgconn,$query);
                     while($totalstatusso = pg_fetch_array($resulstatusso))
                        {
                        echo  "<br><img src='../images/rojo.jpg' class='img-circle' width='20'> Investigaciones en estatus solicitud:" . $totalstatusso["numero_investigacionesstatusso"] . "";      
                   }

                      $query = "select count(*) AS numero_investigacionesstatusde
					from sig_cuc.investigaciones
					where status='desarrollo'";
		 $resulstatusde = pg_query($pgconn,$query);
                     while($totalstatusde = pg_fetch_array($resulstatusde))
                        {
                        echo  "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Investigaciones en Desarrollo:" . $totalstatusde["numero_investigacionesstatusde"] . "";      
                   }

                     $query = "select count(*) AS numero_investigacionesstatusfi
					from sig_cuc.investigaciones
					where status='finalizado'";
		 $resulstatusfi = pg_query($pgconn,$query);
                     while($totalstatusfi = pg_fetch_array($resulstatusfi))
                        {
                        echo  "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Investigaciones en estado finalizado:" . $totalstatusfi["numero_investigacionesstatusfi"] . "";      
                   }
        $query = "select count(*) AS numero_investigacionesstatusaprobado
					from sig_cuc.investigaciones
					where status='aprobado'";
		 $resulstatusaprobado = pg_query($pgconn,$query);
                     while($totalstatusaprobado = pg_fetch_array($resulstatusaprobado))
                        {
                        echo  "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Investigaciones en estado Aprobado:" . $totalstatusaprobado["numero_investigacionesstatusaprobado"] . "";      
                   }
             ?>
             </div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Iniciado:</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">
                    <?php
                     include_once('../modelo/mode_conection.php');
  					$conexion = new Connex();
  					$pgconn=$conexion->conectar();
                    $query = "select count(*) AS numero_iniciado
  					from sig_cuc.investigaciones
  					where status='iniciado'";
                    $resuliniciado = pg_query($pgconn,$query);
                     while($totaliniciado = pg_fetch_array($resuliniciado))
                        {
                        echo "" . $totaliniciado["numero_iniciado"] . "";      
                        }
              ?> 
						</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>En Desarrollo:</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">
						<?php
						       $query = "select count(*) AS numero_desarrollo
  					from sig_cuc.investigaciones
  					where status='desarrollo'";
                    $resuldesarrollo = pg_query($pgconn,$query);
                     while($totaldesarrollo = pg_fetch_array($resuldesarrollo))
                        {
                        echo "" . $totaldesarrollo["numero_desarrollo"] . "";      
                        }
              ?> 	

						</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Finalizado:</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">
								<?php
						       $query = "select count(*) AS numero_finalizado
  					from sig_cuc.investigaciones
  					where status='finalizado'";
                    $resulfinalizado = pg_query($pgconn,$query);
                     while($totalfinalizado = pg_fetch_array($resulfinalizado))
                        {
                        echo "" . $totalfinalizado["numero_finalizado"] . "";      
                        }
              ?> 				
						</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>En Solicitud:</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">
										<?php
						       $query = "select count(*) AS numero_solicitud
  					from sig_cuc.investigaciones
  					where status='solicitud'";
                    $resulsolicitud = pg_query($pgconn,$query);
                     while($totalsolicitud = pg_fetch_array($resulsolicitud))
                        {
                        echo "" . $totalsolicitud["numero_solicitud"] . "";      
                        }
              ?>
						</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
											
	</div>	<!--/.main-->
	  </section>

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
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
