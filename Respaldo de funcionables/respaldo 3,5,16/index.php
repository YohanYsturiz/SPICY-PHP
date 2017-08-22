  <?php
    session_start();
  ?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
		<meta charset="UTF-8">
		<!--<link rel="stylesheet" type="text/css" href="css/styleindex.css">-->
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href='css/fullcalendar.css' rel='stylesheet' />
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='lib/moment.min.js'></script>
    <script src='lib/jquery.min.js'></script>
    <script src="js/jquery.js"></script>
    <script src='css/fullcalendar.min.js'></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>

	<script>
		<!--funcion para enviar a end_session-->
		<script type='text/javascript'>
     		 function regresar()
      	{
          alert("Sesion Finalizada")
          window.location="vista/end_session.php";
      	} 
             
  // $(document).ready(function() {
    
  //   $('#calendar').fullCalendar({
  //     header: {
  //       left: 'prev,next today',
  //       center: 'title',
  //       right: 'month,agendaWeek,agendaDay'
  //     },
  //     defaultDate: '2016-01-12',
  //     selectable: true,
  //     selectHelper: true,
  //     select: function(start, end) {
  //       var title = prompt('Nombre del evento:');
  //       var eventData;
  //       if (title) {
  //         eventData = {
  //           title: title,
  //           start: start,
  //           end: end
  //         };
  //         $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
  //       }
  //       $('#calendar').fullCalendar('unselect');
  //     },
  //     editable: true,
  //     eventLimit: true, // allow "more" link when too many events
  //     events: [
  //       {
  //         title: 'All Day Event',
  //         start: '2016-01-01'
  //       },
  //       {
  //         title: 'Long Event',
  //         start: '2016-01-07',
  //         end: '2016-01-10'
  //       },
  //       {
  //         id: 999,
  //         title: 'Repeating Event',
  //         start: '2016-01-09T16:00:00'
  //       },
  //       {
  //         id: 999,
  //         title: 'Repeating Event',
  //         start: '2016-01-16T16:00:00'
  //       },
  //       {
  //         title: 'Conference',
  //         start: '2016-01-11',
  //         end: '2016-01-13'
  //       },
  //       {
  //         title: 'Meeting',
  //         start: '2016-01-12T10:30:00',
  //         end: '2016-01-12T12:30:00'
  //       },
  //       {
  //         title: 'comer',
  //         start: '2016-01-12T12:00:00'
  //       },
  //       {
  //         title: 'Meeting',
  //         start: '2016-01-12T14:30:00'
  //       },
  //       {
  //         title: 'Happy Hour',
  //         start: '2016-01-12T17:30:00'
  //       },
  //       {
  //         title: 'Dinner',
  //         start: '2016-01-12T20:00:00'
  //       },
  //       {
  //         title: 'Birthday Party',
  //         start: '2016-01-13T07:00:00'
  //       },
  //       {
  //         title: 'Click for Google',
  //         url: 'http://google.com/',
  //         start: '2016-01-28'
  //       }
  //     ]
  //   });
    
  // });

</script>
<script>
		$('#calendar').datepicker({
		});

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
<style>
  body {
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 300px;
    margin: 0 auto;
  }
</style>
<script src="js/lumino.glyphs.js"></script>
	</head>
	<body>
<?php 
include("vista/headerindex.html");
?>
<section id="main-content">
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Unidad de Investigación</h1>
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
							<div class="large">120</div>
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
							<div class="large">52</div>
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
							<div class="text-muted">Usuarios</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">70</div>
							<div class="text-muted">Archivos</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="col-md-15">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">Objetivos 2016</div>
					<div class="panel-body">
						<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right" >Procesos</th>
						        <th data-field="name" >Investigaciones</th>
						        <th data-field="price" >Indicadores</th>
						    </tr>
						    </thead>
						</table>
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

      <div class="panel panel-red">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
<!--  CALENDARIO ANTERIOR      <div class="caption">
    <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <!--<img src="..." alt="...">
      <div class="caption">
        <h3>Calendario</h3>
        <p><div id='calendar'></div></p>
        <p></p>
      </div>
    </div>
  </div>
</div> -->
<!--     <div class="row">
		  <article>
			 <form class="form-horizontal" action="controlador/cont_consult_all_students.php" method="post">
        <section id="main-content">
        <div class="panel panel-primary">
         <div class="panel-heading"><h3 align="center">OBJETIVOS 2016</h3></div>
          <div class="panel-body">
               <table class="table table-striped">
                    <tr>
                        <td>
                            Nombre Investigacion
                        </td>
                        <td >
                            Autor
                        </td>
                        <td>
                            Tutor 
                        </td>
                        <td>
                            Tipo de Investigacion.
                        </td>
                        <td>
                            Otro autor
                        </td>
                        <td >
                            Fecha de culminacion
                        </td>
                        <td>
                            Lugar 
                        </td>
                        <td>
                            Status
                        </td>
                        <!-- <td>
                            Sede
                        </td>
                        <td >
                            Trayecto
                        </td>
                        <td>
                            Trimestre
                        </td>
                        <td>
                            Turno
                        </td>
                        <td>
                            Sección
                        </td>
                        <td >
                            Actividad Inscrita
                        </td> 
                    </tr>
                    
<?php  
  
  include('modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();

  $query = "select * from sig_cuc.investigaciones";
  $result = pg_query($pgconn,$query);
  $numero = 0;
  while($row = pg_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
      $row["nombre_inv"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["autor"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["tutor"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["tipo_inv"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["otro_autor"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["fecha_c"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["lugar_inv"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["status"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
      //$row["sede"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
      //$row["trayecto"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
     // $row["trimestre"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
     // $row["turno"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
      //$row["seccion"]. "</font></td>";
  //echo "<td width=\"25%\"><font face=\"verdana\">" . 
     // $row["actividad_option"]. "</font></td></tr>";

    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Investigaciones Inscritas: " . $numero . 
      "</b></font></td></tr>";
  
  pg_free_result($result);
?>
                </table>
          </div>
</div> -->
          <div class="tusers">
          

      </div>          
			<div class="content">

				<p align="justify">La Unidad de Investigación (UDI) es una Unidad Académica del Colegio
Universitario de Caracas, encargada de promover la investigación como eje
destinado al fortalecimiento, divulgación y transferencia del conocimiento, por
parte del cuerpo de docentes y de estudiantes cucistas a las comunidades
universitarias y colectivo vinculante. Asimismo, se encarga de participar en el
diseño y coordinación de los Programas Nacionales de Formación de Estudios
Avanzados y Postgrados (PNFAP- actualmente en diseño para su aprobación),
Convenios y otros; debidamente autorizados por el Ministerio del Poder Popular
para la Educación Universitaria</p>
				
				<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->
 
	
	
	<footer id="main-footer">
		<p>&copy; 2016 <a href="http://www.cuc.edu.ve/">Colegio Universitario de Caracas, Altamira, Av. La Floresta, sede sucre</a></p>
	</footer>
	</body>
</html>