  <?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
$cod_usuario = $_SESSION['cod_usuario'];
  ?> 
<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio</title>
<meta charset="UTF-8">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/sidebarindex.css" rel="stylesheet"><!--sidebar azul-->
<link href='css/fullcalendar.css' rel='stylesheet' /><!--script calendario-->
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' /><!--script calendario-->
<script src='lib/moment.min.js'></script><!--script calendario-->
<script src="js/jquery-1.11.1.min.js"></script><!--script calendario y tabla de procesos-->
<script src="js/bootstrap.min.js"></script><!--script calendario y tabla de procesos-->
<script src="js/bootstrap-datepicker.js"></script><!--script calendario y tabla de procesos-->
<script src="js/bootstrap-table.js"></script><!--tabla de procesos-->
<script src='css/fullcalendar.min.js'> </script><!--script calendario-->
<script src='js/bootstrap-modal.js'></script><!--script para ventana modal-->
<script src='js/lumino.glyphs.js'></script><!--iconos-->
<!--funcion para enviar a end_session-->
<script type='text/javascript'>
	    function regresar()
      {
        alert("Sesion Finalizada")
        window.location="vista/end_session.php";
      } 
     
      $(document).ready(function() 
      {

        $('#calendar').fullCalendar(
          {
          header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
                  },
          defaultDate: '2016-01-12',
          selectable: true,
          selectHelper: true,
          select: function(start, end) 
            {
              var title = prompt('Nombre del evento:');
              var eventData;
          if (title) 
          {
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
<script>
function preview(int){
        document.getElementById('btn_enviar').value = int;
        var conexion;
        if (window.XMLHttpRequest)        {
          conexion=new XMLHttpRequest();
        }else
          {
          conexion=new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
          if(conexion.readyState==4 && conexion.status==200){
            document.getElementById("midiv").innerHTML=conexion.responseText;
          }
        }
        conexion.open("GET","contenido.php?id="+int,true);
        conexion.send();
      }
      function enviarmail(int){
        var conexion;
        if (window.XMLHttpRequest)        {
          conexion=new XMLHttpRequest();
        }else
          {
          conexion=new ActiveXObject("Microsoft.XMLHTTP");
        }
        conexion.onreadystatechange=function(){
          if(conexion.readyState==4 && conexion.status==200){
            document.getElementById("midiv").innerHTML=conexion.responseText;
          }
        }
        conexion.open("GET","enviar-mail.php?id="+int,true);
        conexion.send();
      }
</script> 
  <style>
  body 
  {
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }
  </style>
	</head>
	<body>
<?php 
include("vista/headerindex.html");
?>
<aside>
<div id="sidebar"  class="nav-collapse">
  <!-- sidebar menu start-->
<ul class="sidebar-menu" id="nav-accordion">  
    <li class="mt">
      <a href="index.html">
       <i class="fa fa-dashboard"></i>
       <span>Procesos</span>
      </a>
    </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class="fa fa-desktop"></i>
      <span>Biblioteca</span>
    </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class="fa fa-cogs"></i>
      <span>Lider de una investigacion</span>
    </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class="fa fa-book"></i>
      <span>Ayuda</span></a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class="fa fa-tasks"></i>
      <span>Forms</span>
    </a>
  <ul class="sub">
    <li><a  href="form_component.html">Form Components</a></li>
  </ul>
  </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class="fa fa-th"></i>
      <span>Data Tables</span>
    </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;" >
      <i class=" fa fa-bar-chart-o"></i>
      <span>Charts</span>
    </a>
  </li>
</ul>
    <!-- sidebar menu end-->
</div>
</aside>
    <section id="main-content">
      <div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Unidad de Investigación y Postgrado</h1>
			</div>
		</div><!--/.row-->
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-6 col-lg-5 widget-right">
							<div class="large">
                <?php
               include_once('controlador/cont_numero_inv.php');         
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
                $resulevent = pg_query($pgconn,$query);
                  while($totalevent = pg_fetch_array($resulevent))
                    {

                      echo "" . $totalevent["numero_event"] . "";      
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
							<div class="large">
                <?php
                    $query = " select count(*) AS numero_usu from sig_cuc.usuario";
                    $resulusu = pg_query($pgconn,$query);
                     while($totalusu = pg_fetch_array($resulusu))
                        {
                        echo "" . $totalusu["numero_usu"] . "";      
                        }
              ?>       
              </div>
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
							<div class="large">
             <?php
                $totalevent=12;
                $total=7;
                $totalarchivo= $total+$totalevent;
                  echo $totalevent+$total; 
             ?>       
              </div>
							<div class="text-muted">Archivos</div>
						</div>
					</div>
				</div>
			</div>
      
					<div class="panel-body">
						<table class="table table-striped table-advance table-hover">
                            <h4 align="center"><i class="fa fa-angle-right"></i><a name="investigaciones" > Objetivos 2016</a></h4>
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
                        $query = "select * from sig_cuc.objetivo where fk_cod_usuario_objetivo='1'";
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
		 <section id="main-content">
     <form class="form-horizontal" action="controlador/cont_modify_user.php" method="POST">    
          <?php
        $query = "select usuario, clave, nombres, apellidos, cargo, correo, nivel_academico from sig_cuc.usuario where cod_usuario= '$cod_usuario';";
        $usuario_datos = pg_query($pgconn,$query);
 
  while($row_usuario = pg_fetch_array($usuario_datos))
  {     
        
       ?>
     <div class="modal fade" id="myModalusuario" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <?php echo $_SESSION['usuario'];?> 
        </h4>
        </div>      
        <div class="modal-body">
          <p>Actualizar mis Datos</p>
          <div class="form-group">  
            <label class="control-label col-xs-2">Usuario</label>  
            <div class="col-xs-5">  
            <input type="text" class="form-control" name ="usuarioN" id="text" value="<?php echo $row_usuario['usuario']; ?>">
            </div>
          </div>
          <div class="form-group">  
            <label class="control-label col-xs-2">Clave</label>  
            <div class="col-xs-5">  
            <input type="text" class="form-control" name ="clave" id="text" value="<?php echo $row_usuario['clave']; ?>">
            </div>
          </div>
          <div class="form-group">  
            <label class="control-label col-xs-2">Nombre:</label>  
            <div class="col-xs-5">  
            <input type="text" class="form-control" name ="nombres" id="text" value="<?php echo $row_usuario['nombres']; ?>">
            </div>
          </div>
           <div class="form-group">
                    <label class="control-label col-xs-2">Apellido:</label>
                    <div class="col-xs-5">    
                    <input type="text" class="form-control" name="apellidos" id="text" value="<?php echo $row_usuario['apellidos']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-2">Cargo:</label>
                    <div class="col-xs-5">    
                    <input type="text" class="form-control" name="cargo" id="text" value="<?php echo $row_usuario['cargo']; ?>">
                    </div>
                </div>     
                   <div class="form-group">
                 <label class="control-label col-xs-2">Correo:</label>
                    <div class="col-xs-5"> 
                    <input type="text" class="form-control" name= "correo" id="text" value="<?php echo $row_usuario['correo']; ?>">
                    </div>
                 </div>    
                  <div class="form-group">
                    <label class="control-label col-xs-2">Nivel Academico:</label> 
                    <div class="col-xs-5">
                    <input type="text" class="form-control" name = "nivel_academico" id="text" value="<?php echo $row_usuario['nivel_academico']; ?>">
                    </div>
                  </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-danger" type="submit" id="submit">Actualizar</button>
        </div>
      </div>  
    </div>
  </div>
  </form>
<?php
  } 
?>
  <div class="col-md-4">
      <div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendario</div>
          <div class="panel-body">
            <div id="calendar"></div>
          </div>
        </div>
        </div>
        <?php  
        if ($cod_usuario == 1){
       ?>
		<div class="col-md-4"> 
		<div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Entregados</div>
                <form class="form-horizontal" action="controlador/cont_ponderacion.php" method="POST">
              <div class="tabladias">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th data-field="Dias" > </th>
                    <th data-field="Documento" >Desde</th>
                    <th data-field="Documento" >Nombre</th>
                </tr>
                </thead>
<!--
SQL PARA TRAER INVESTIGACIONES EN APROBADAS!!!
select nombre_inv, nombres, status, ponderacion, linea_investigacion from sig_cuc.investigaciones
inner join  sig_cuc.usuario
on fk_cod_usuario=usuario.cod_usuario
inner join sig_cuc.ponderacion
on fk_cod_inv_ponderacion=investigaciones.cod_inv
where status='finalizado' and ponderacion='aprobado' -->

                <?php
                include_once('controlador/cont_row_solicitudes.php');

                 
                    while($rowsolicitud = pg_fetch_array($resultsolicitud))
                    {

                          $i++;
                          ${"cod_inv" . $i} = $rowsolicitud['cod_inv'];
                          ${"nombre_inv" . $i} = $rowsolicitud['nombre_inv'];
                          $_SESSION['cod_inv' . $i] = ${"cod_inv" . $i};
                          $_SESSION['nombre_inv' . $i] = ${"nombre_inv" . $i};
                          echo "<tr>";
                          ?> 
                          <td><input type='checkbox' name='aprobado' value='<?php echo $_SESSION['cod_inv' . $i]; ?>'/>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <?php echo ${"nombre_inv" . $i}; ?>  
          <div class="btn-group btn-group-xs">
          <button style="left:350px " type="button" class="btn btn-primary">Aprobar</button>
          </div></h4>
        </div>
        <div class="modal-body">
          <p>Datos de la investigacion</p>
          <div class="form-group">  
            <label class="control-label col-xs-2">Autor:</label>  
            <div class="col-xs-5">  
            <input type="text" class="form-control" name ="autor" id="text" value="<?php  echo $rowsolicitud['autor'];?>" disabled="true">
            </div>
          </div>
          <div class="form-group">  
            <label class="control-label col-xs-2">Tutor:</label>  
            <div class="col-xs-5">  
            <input type="text" class="form-control" name ="autor" id="text" value="<?php  echo $rowsolicitud['tutor'];?>" disabled="true">
            </div>
          </div>
           <div class="form-group">
                    <label class="control-label col-xs-2">Tipo:</label>
                    <div class="col-xs-5">    
                    <input type="text" class="form-control" name="tipo_inv" id="text" value="<?php  echo $rowsolicitud['tipo_inv'];?>" disabled="true">
                    </div>
                </div>    
                   <div class="form-group">
                 <label class="control-label col-xs-2">Linea Investigación:</label>
                    <div class="col-xs-5"> 
                    <input type="text" class="form-control" name= "otro_autor" id="text" value="<?php  echo $rowsolicitud['linea_investigacion'];?>" disabled="true">
                    </div>
                 </div>    
                  <div class="form-group">
                    <label class="control-label col-xs-2">Fecha de Inicio:</label> 
                    <div class="col-xs-5">
                    <input type="text" class="form-control" name = "fecha_ini" id="text" value="<?php  echo $rowsolicitud['fecha_ini'];?>" disabled="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-2">Fecha de Culminación:</label> 
                    <div class="col-xs-5">
                    <input type="text" class="form-control" name = "fecha_ini" id="text" value="<?php  echo $rowsolicitud['fecha_c'];?>" disabled="true">
                    </div>
                  </div> 
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
                          <?php 
                          echo "<td> " . 
                          $rowsolicitud["fecha_ini"] . "</td>";  
                          ?>
                          <td>
                            <a data-toggle="modal" data-target="#myModal">
                         <?php
                          echo "" . 
                          $rowsolicitud["nombre_inv"] . "</a></td>";    
                          ?>

  
                        <td>
                        <input type='hidden' name='cod_inv' value='<?php echo $_SESSION['cod_inv' . $i]; ?>'></input></td>
                        <input type='hidden' name='fk_cod_usuario' value='<?php echo $rowsolicitud['fk_cod_usuario']; ?>'></input></td>
                        <?php  
                    }  
                    ?>
                      </table>
                      <br>
                      <div class="btn-group btn-group-xs">
                         <button class="btn btn-primary" type="submit" id="submit">Aprobar</button>
                     </div>     
                     </div>
    
            </div>
          </div>
         
        </div>
  </div>
  </form>
    <?php
        }
        else {
      ?>
      <div class="col-md-4"> 
    <div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Fechas de Revisión</div>
          <div class="tabladias">
         <!-- <img src="imagenes/planificacion.jpg" class="img-rounded"></img> -->
          <table class="table table-striped">
           <thead>
                <tr>
                    <th data-field="Semestre">Semestre</th>
                    <th data-field="Fecha">Fecha</th>
                </tr>
                </thead>
   <tr>
   <td>1</td>  
   <td>2016-01-15 al 2016-06-27</td>
   </tr>
   <tr>
   <td>2</td>  
   <td>2016-06-03 al 2016-12-20</td>
   </tr>
         </table>
        </div>
        </div>
  </div>
      


      <?php
        }
      ?>
  		<div class="col-md-4"> 
		<div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Documentos pendientes</div>
          <div class="tabladias">
         <!-- <img src="imagenes/planificacion.jpg" class="img-rounded"></img> -->
          <table class="table table-striped">
           <thead>
                <tr>
                    <th data-field="Dias">Dias</th>
                    <th data-field="Documento" >Documento</th>
                </tr>
                </thead>

         <?php  
  include_once('modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();

  
    $query = "select nombre_inv, extract(day from age(date (fecha_c), 'now()' )) as dif_dias
FROM sig_cuc.investigaciones";
  $result = pg_query($pgconn,$query);
 
  while($row = pg_fetch_array($result))
  {

    echo "<tr><td>faltan " . 
      $row["dif_dias"] . " dias</td>";  

        echo "<td>" . 
      $row["nombre_inv"] . "</td>";      
       
  } 
         ?>
         </table>
        </div>
        </div>
  </div>
  </section>      
      </div>    
        <div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Unidad de Investigación y Postgrado</h1>
			</div>  
<div class="row">
  <div class="col-xs-6">  

          <div class="panel-body tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Mision</a></li>
              <li><a href="#tab2" data-toggle="tab">Vision</a></li>
              <li><a href="#tab3" data-toggle="tab">Objetivos</a></li>
            </ul>
    
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                <h4>Mision</h4>
                <p>La Unidad de Investigación y Postgrado (UDIP) es una Unidad Académica del Colegio Universitario de Caracas, encargada de promover la investigación como eje destinado al fortalecimiento, divulgación y transferencia del conocimiento, por parte del cuerpo de docentes y de estudiantes cucistas a las comunidades universitarias y colectivo vinculante. Asimismo, se encarga de participar en el diseño y coordinación de los Programas Nacionales de Formación de Estudios Avanzados y Postgrados (PNFAP- actualmente en diseño para su aprobación), Convenios y otros; debidamente autorizados por el Ministerio del Poder Popular para la Educación Universitaria.. </p>
              </div>
              <div class="tab-pane fade" id="tab2">
                <h4>Vision</h4>
                <p>Constituirse en una Unidad promotora de innovación en la Formación Académica Avanzada Socialista Bolivariana, contemplada en el tercer motor constituyente en el marco del plan nacional Simón Bolívar, que estimule la participación del cuerpo docente y comunidad estudiantil, en pro de la generación, profundización, revisión y transferencia de conocimientos pertinentes al desarrollo local y territorial del país. </p>
              </div>
              <div class="tab-pane fade" id="tab3">
                <h4>Objetivos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
              </div>
            </div>
          </div>
        
        </div> 
 <div class="col-xs-6 ">
    
          <div class="panel-body tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
              <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
            </ul>
    
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                <h4>Tab 1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
              </div>
              <div class="tab-pane fade" id="tab2">
                <h4>Tab 2</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
              </div>
              <div class="tab-pane fade" id="tab3">
                <h4>Tab 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
              </div>
            </div>
          </div>
      
        </div>
  </div>
			
		</article> <!-- /article -->
	</section> <!-- / #main-content -->

<footer id="main-footer">
		<p align="center">&copy; 2016 <a href="http://www.cuc.edu.ve/">Colegio Universitario de Caracas, Altamira, Av. La Floresta, sede sucre</a></p>
	</footer> 
	</body>
</html>
