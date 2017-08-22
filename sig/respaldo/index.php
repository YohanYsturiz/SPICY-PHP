  <?php
    session_start();
  ?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
		<meta charset="UTF-8">
		<!--<link rel="stylesheet" type="text/css" href="css/styleindex.css">-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href='css/fullcalendar.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='lib/moment.min.js'></script>
    <script src='lib/jquery.min.js'></script>
    <script src="js/jquery.js"></script>
    <script src='css/fullcalendar.min.js'></script>
		<!--funcion para enviar a end_session-->
		<script type='text/javascript'>
     		 function regresar()
      	{
          alert("Sesion Finalizada")
          window.location="vista/end_session.php";
      	} 
             
  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2016-01-12',
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        var title = prompt('Nombre del evento:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2016-01-01'
        },
        {
          title: 'Long Event',
          start: '2016-01-07',
          end: '2016-01-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-01-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-01-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2016-01-11',
          end: '2016-01-13'
        },
        {
          title: 'Meeting',
          start: '2016-01-12T10:30:00',
          end: '2016-01-12T12:30:00'
        },
        {
          title: 'comer',
          start: '2016-01-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-01-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-01-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-01-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-01-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2016-01-28'
        }
      ]
    });
    
  });

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
	</head>
	<body>
<?php 
include("vista/headerindex.html");
?>
			<!-- <header id="main-header">
			<a id="logo-header" href="#">
			<span class="site-name">Unidad de Investigacion</span>
			<span class="site-desc">Colegio Universitario de Caracas</span>
			</a> <!-- / #logo-header --> 
				<!--<div id="logotipo"> <p> <a href="">SIG</a></p></div>-->
				<!-- <nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
				<li><a href="vista/investigaciones.php">Investigaciones</a></li>
				<li><a href="vista/eventos.php">eventos</a></li>
				<li><a href="#"><?php //echo "Bienvenido <b>" . $_SESSION['usuario'] . "</b>";?></a></li> -->
                      <!-- <ul style="margin: -10px 360px">
                         <li><style type="text/css"> 
							.BTN_TRANS 
							{ 
							background:transparent;
							border: transparent;
							} 
							</style> 
							<input type="button" class="BTN_TRANS" value="Cerrar Sesion" onclick="regresar()" id="submit"></li>
						</ul>
					</ul> -->
					<!--<input type="button" class="BTN_TRANS" value="Cerrar Sesion" onclick="regresar()" id="submit" />
				</nav>
					</div>					
			</header>-->
      <section id="main-content">
      <div class="caption">
    <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <!--<img src="..." alt="...">-->
      <div class="caption">
        <h3>Calendario</h3>
        <p><div id='calendar'></div></p>
        <p></p>
      </div>
    </div>
  </div>
</div>
   
    <div class="row">
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
                        </td> -->
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
</div>
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