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
				<h1 align="center" class="page-header">Unidad de Investigación y Postgrado (ADMINISTRADOR)</h1>
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
		 <section id="main-content">
  <div class="col-md-4">
      <div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendario</div>
          <div class="panel-body">
            <div id="calendar"></div>
          </div>
        </div>
        </div>
		<div class="col-md-4"> 
		<div class="panel panel-primary">
          <div class="panel-heading dark-overlay">
          <svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Solicitudes</div>
                <form class="form-horizontal" action="controlador/con_modify_solicitud.php" method="POST">
              <div class="tabladias">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th data-field="Dias" > </th>
                    <th data-field="Documento" >Desde</th>
                    <th data-field="Documento" >Nombre</th>
                </tr>
                </thead>
                <?php
                include_once('controlador/cont_row_solicitudes.php');
                    while($rowsolicitud = pg_fetch_array($resultsolicitud))
                    {
                        $i++;
                        ${"cod_inv" . $i} = $rowsolicitud['cod_inv'];
                        $_SESSION['cod_inv' . $i] = ${"cod_inv" . $i};
                        echo "<tr>";
                        ?> 
                        <td><input type='checkbox' name='status' value='<?php echo $_SESSION['cod_inv' . $i]; ?>'/></td>
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
                        <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <?php echo "" . $rowsolicitud["nombre_inv"] . ""; ?>  
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                        <td>
                        <input type='hidden' name='cod_inv' value='<?php echo $_SESSION['cod_inv' . $i]; ?>'></input></td>
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