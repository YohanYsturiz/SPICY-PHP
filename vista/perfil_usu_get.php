<?php
session_start();
$cod_usuario = $_SESSION['cod_usuario'];
?> 

<?php
include_once('../controlador/cont_consult_perfil_usuario.php');
?> 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mi perfil</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/estilos.css" rel="stylesheet">
<link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />


<script src="../js/lumino.glyphs.js"> </script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php 
include("header.html");
?>
	<form action="../controlador/cont_delete_user.php" method="POST">	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<p class="centered"><a href="#"><img src="../images/perfil.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo " ". $_SESSION['usuario'];?></h5>
		<ul class="nav menu">
			<li><a href="#investigaciones"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Mis investigaciones</a></li>
			<li><a href="#eventos"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Mis eventos</a></li>
			<li><a href="#indicadores"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Mis indicadores mensuales</a></li>
			<li><a href="#eventos"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Mis indicadores</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mi perfil</a></li>
			<li><a data-toggle="modal" data-target="#myModal"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Agregar Objetivos</a></li>
		</ul>
		<ul class="nav menu">
		
			</li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Datos Personales</a>
			<?php
			    include_once('../modelo/mode_conection.php');
  				$conexion = new Connex();
  				$pgconn=$conexion->conectar();
		        $query = "select cedula, cargo, correo, linea_investigacion
  				from sig_cuc.usuario where cod_usuario='$cod_usuario'";
		        $resuldatos = pg_query($pgconn,$query);
		        while($totaldatos = pg_fetch_array($resuldatos))
		        {
		            echo "<b><p> Cedula: </b>" . $totaldatos["cedula"] . "</p>";      
		   			echo "<b><p> Correo: </b>" . $totaldatos["correo"] . "</p>";	
                	echo "<b><p>Cargo: </b>" .$totaldatos["cargo"] ."</p>";
 					echo "<b><p>Linea Investigacion: </b>" . $totaldatos["linea_investigacion"] . "</p>";
 			   }
 			?>

			</li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mi perfil</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">     
							<?php
                     include_once('../modelo/mode_conection.php');
  					$conexion = new Connex();
  					$pgconn=$conexion->conectar();
                    $query = "select count(*) AS numero_investigaciones
							  from sig_cuc.investigaciones
							   where fk_cod_usuario='$cod_usuario'";
                    $resulinvestigaciones = pg_query($pgconn,$query);
                     while($totalinvestigaciones = pg_fetch_array($resulinvestigaciones))
                        {
                        echo "" . $totalinvestigaciones["numero_investigaciones"] . "";      
                        }
              			?> 
              			</div>
							<div class="text-muted">Investigaciones</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">
							<?php	
					$query = "select count(*) AS numero_eventos
					from sig_cuc.evento
					where fk_cod_usuario='$cod_usuario'";
					$resulevento = pg_query($pgconn,$query);
                     while($totalevento = pg_fetch_array($resulevento))
                        {
                        echo "" . $totalevento["numero_eventos"] . "";      
                        }
              			?> 
							</div>
							<div class="text-muted">Eventos</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">Tareas Asignadas</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="row mt">
    <div class="col-md-10" align="center">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i><a name="investigaciones" > Mis Objetivos</a></h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Cantidad</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Producto</th>
                                  <th><i class=" fa fa-edit"></i> Fecha culminación</th>
                                  <th><i class="fa fa-bookmark"></i>Ponderacion</th>
                                  
                                    
                              </tr>
                              </thead>
                              <tbody>       
                                     <?php
                        $query = "select * from sig_cuc.objetivo where fk_cod_usuario_objetivo='$cod_usuario'";
                        $objetivos = pg_query($pgconn,$query);
                      while($rowobjetivos = pg_fetch_array($objetivos))
                      {
                        echo "<tr>";
                        echo "<td> " . 
                        $rowobjetivos["cantidad"] . "</td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowobjetivos["tipo_obj"] . "</a></td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowobjetivos["fecha_culminacion"] . "</a></td>"; 
                        echo "<td class='hidden-phone'>" .
                        $rowobjetivos["ponderacion_obj"] . "</a></td>"; 
                        echo "</tr>"; 
                      }
                        ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  
                  </div>
<!-- Indicadores -->
        <div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading"><a name="indicadores">Mi indicador de cumplimiento</a></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar-chart-indicador" height="200" width="800"></canvas>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading"><a name="indicadores">Mi indicador de eficacia</a></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="bar_chart_indicador_eficacia" height="200" width="800"></canvas>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Mi Calidad en procesos de Gestion</div>
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
					<div class="panel-heading"><a name="indicadores">Mis Indicadores mensuales</a></div>
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
					<div class="panel-heading">Estadistica Eventos</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart-usuario" ></canvas>
							<div>	
			<?php
			include('../controlador/cont_estadistica.php');
			?>
							
							<?php

       	echo "<img src='../images/azul.jpg' class='img-circle' width='20'> Eventos Iniciados: </img>"; echo $usuario_evento_iniciado['numero_eventoiniciado_usuario'];
             
        echo "<br><img src='../images/rojo.jpg' class='img-circle' width='20'> Eventos en Solicitud: </img>"; echo $usuario_evento_solicitud['numero_eventosolicitud_usuario'];
             
		echo "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Eventos en Desarrollo: </img>"; echo $usuario_evento_desarrollo['numero_eventodesarrollo_usuario'];
  	
  	  	echo "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Eventos Finalizado: </img>"; echo $usuario_evento_finalizado['numero_eventofinalizado_usuario'];

  		echo "<br><img src='../images/verdeclaro.jpg' class='img-circle' width='20'> Eventos Aprobados: </img>"; echo $usuario_evento_aprobado['numero_eventostatusaprobado_usuario'];
               
             ?>
             </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Estadistica Investigaciones</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="doughnut-chart-usuario" ></canvas>
							<div>	
							<?php

        echo "<br><img src='../images/amarillo.jpg' class='img-circle' width='20'> Eventos en Desarrollo: </img>"; echo $usuario_investigacion_desarrollo['numero_investigacion_desarrollo_usuario'];
	
	  	echo "<br><img src='../images/verde.jpg' class='img-circle' width='20'> Eventos Finalizado: </img>"; echo $usuario_investigacion_finalizado['numero_investigacion_finalizado_usuario'];

  		echo "<br><img src='../images/verdeclaro.jpg' class='img-circle' width='20'> Eventos Aprobados: </img>"; echo $usuario_investigacion_aprobado['numero_investigacion_aprobado_usuario'];
           
             ?>
             </div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	<!-- 	<input type="hidden" name='cod_usuario' value='<?php echo $_SESSION['cod_usuario']; ?>' />
		<button type="submit" class="btn btn-primary">delete</button> -->
		</form>

		<form class="form-horizontal" action="../controlador/cont_add_objetivos.php" method="POST">        
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
              <!-- Contenido de la ventana-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Nuevo Objetivo </h4>
              </div>
            <div class="modal-body">
              <p>selecciona</p>
            <div class="form-group">  
              <label class="control-label col-xs-2">Cantidad:</label>  
              <div class="col-xs-5">  
                <SELECT class="form-control" name="cantidad" required>
                      <OPTION selected>seleccione </OPTION>
                      <OPTION value="1">1 </OPTION>
                      <OPTION value="2">2</OPTION>
                      <OPTION value="3">3</OPTION>
                      <OPTION value="4">4</OPTION>
                      <OPTION value="5">5</OPTION>
                      <OPTION value="6">6</OPTION> 
                      </OPTION>
                    </SELECT>
              </div>
          </div>
          <div class="form-group">  
            <label class="control-label col-xs-2">Tipo:</label>  
            <div class="col-xs-5">  
            <SELECT class="form-control" name="tipo_obj" required>
                      <OPTION selected>seleccione </OPTION>
                      <OPTION value="articulo para publicacion">artículo de publicaión</OPTION>
                      <OPTION value="articulo cientifico">artículo cientifico</OPTION>
                      <OPTION value="Ponencia">ponencias</OPTION>
                      <OPTION value="cursos">cursos</OPTION>
                      <OPTION value="talleres">talleres</OPTION>
                      <OPTION value="experimental">investigación experimental</OPTION>
                      <OPTION value="de campo">investigación de campo</OPTION> 
                      </OPTION>
                    </SELECT>
            </div>
          </div>
           <div class="form-group">
                    <label class="control-label col-xs-2">Fecha Culminación:</label>
                    <div class="col-xs-5">    
                    <input type="text" class="form-control" name="fecha_culminacion" id="text">
                    </div>
                </div>    
                   <div class="form-group">
                 <label class="control-label col-xs-2">Ponderacion:</label>
                    <div class="col-xs-5"> 
                    <input type="text" class="form-control" name= "ponderacion_obj" id="text">
                    </div>
                 </div>     
    </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
    
                      </table>   
                     </div>
              
            </div>
          </div>
         
        </div>
  </div>
  </form>
                 
		
		
	</section>
 <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/chart.min.js"></script>
  <script src="../js/chart-data.js"></script>
  <script src="../js/estadisticas_x_usuario.js"></script>
  <script src="../js/easypiechart.js"></script>
  <!--<script src="../js/easypiechart-data.js"></script>-->
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/Chartestadistica.js"></script>
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
