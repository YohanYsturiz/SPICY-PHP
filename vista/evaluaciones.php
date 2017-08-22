<?php
session_start();
$cod_usuario = $_SESSION['cod_usuario'];
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Evaluaciones</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<!--<link href="../css/bootstrap-table.css" rel="stylesheet">-->
<link rel="stylesheet" href="../css/dataTables.bootstrap.css">
<link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />

<!--<script src="../js/bootstrap-table.js"> </script>-->
</head>
<body>
<?php 
include("header.html");
?>		
		</div><!--/.row-->
	<div class="panel-body">	
   <section id="main-content-tablet">
<!--     <form class="form-horizontal" action="../controlador/cont_delete_inv.php" method="post">
    <div class="tusers">
    <section id="main-content">
    <div class="table-responsive">
    <table class="table table-striped table-advance table-hover" id="table-style" data-toggle="table"> -->
  <div class="table-responsive">
    <div class="tab-pane" id="tab_3">
                                    <div class="box-header">
                                        <h3 class="box-title"> Mis Investigaciones</h3>
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
        
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Usuario</th>
                                  <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Autor</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Tutor</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Tipo</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Otros autores</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Fecha</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>lugar</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Estatus</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Linea Investigacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Archivo</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Descripción</th>
                                  <th class="hidden-phone"><i class="fa fa-bookmark"></i>Ponderacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Operacion</th>
                                    
                              </tr>
                              </thead>
                              
                        <!--<td >
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
                   
                    <tbody>
                     </tr>
<?php  
  
  include('../modelo/mode_conection.php');
  $conexion = new Connex();
  $pgconn=$conexion->conectar();

  $query = "select * from sig_cuc.investigaciones
inner join  sig_cuc.usuario
on fk_cod_usuario=usuario.cod_usuario";
  $result = pg_query($pgconn,$query);
  $numero = 0;
  while($row = pg_fetch_array($result))
  {
    echo "<tr><td class='hidden-phone' width=\"40%\">" . 
      $row["usuario"] . "</td>";
    echo "<td class='hidden-phone' width=\"40%\">" . 
      $row["nombre_inv"] . "</td>";
    echo "<td class='hidden-phone' width=\"25%\">". 
      $row["autor"] . "</td>";
    echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["tutor"] . "</td>";
    echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["tipo_inv"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["otro_autor"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["fecha_c"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["lugar_inv"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\"><span class='label label-info label-mini'>" . 
      $row["status"]. "</span></td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["linea_investigacion"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\"><a href='../imagenes/$row[archivo]'><font face=\"verdana\">". 
      $row["archivo"] . "</font></a></td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["precio"] . "</font></td>"; 
   echo "<td class='hidden-phone'> 
   <label for='defaul' class='badge'>". 
      $row["status"]."<input type='checkbox' id='default' class='badgebox'></label></td>";      
   echo "<td class='hidden-phone'>
<button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
<button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
<button type='submit' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>
</td>";   
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
?>

                </tbody>
</div>                
                </table>
  </div>             

                  </div>
                  </div>
    </section>
      
                <input type="hidden" name ="nombreN" value="<?php echo $columna['nombre_inv'] ?>">
                <input type="hidden" name ="tutor" value="<?php echo $columna['tutor'] ?>">
                <input type="hidden" name ="autor" value="<?php echo $columna['autor'] ?>">
      </form>
      
  <div class="panel-body">  
   <section id="main-content-tablet">
<!--     <form class="form-horizontal" action="../controlador/cont_delete_inv.php" method="post">
    <div class="tusers">
    <section id="main-content">
    <div class="table-responsive">
    <table class="table table-striped table-advance table-hover" id="table-style" data-toggle="table"> -->
  <div class="table-responsive">
    <div class="tab-pane" id="tab_3">
                                    <div class="box-header">
                                        <h3 class="box-title"> Mis Eventos</h3>
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
        
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Usuario</th>
                                  <th><i class="fa fa-bullhorn"></i> Evento</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Tipo</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Facilitador</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Tema</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Fecha inicio</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Fecha culminacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>linea investigacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>lider</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Invitados</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Archivo</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Descripcion</th>
                                  <th class="hidden-phone"><i class="fa fa-bookmark"></i>Asistencia</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Lugar</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Operacion</th>

                                    
                              </tr>
                              </thead>                
                    <tbody>
                     </tr>
<?php  
  


  $query = "select * from sig_cuc.evento
            inner join  sig_cuc.usuario
            on fk_cod_usuario=usuario.cod_usuario";
  $result = pg_query($pgconn,$query);
  $numero = 0;
  while($row = pg_fetch_array($result))
  {
  echo "<tr><td class='hidden-phone' width=\"40%\">" . 
      $row["usuario"] . "</td>";
  echo "<td class='hidden-phone' width=\"40%\">" . 
      $row["evento"] . "</td>";  
  echo "<td class='hidden-phone' width=\"40%\">" . 
      $row["tipo_ev"] . "</td>";
  echo "<td class='hidden-phone' width=\"25%\">". 
      $row["facilitador"] . "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["tema"] . "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["fecha_ini_e"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["fecha_cu_eve"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["linea_investigacion"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["lider"]. "</td>";
  echo "<td class='hidden-phone' width=\"25%\"><span class='label label-info label-mini'>" . 
      $row["invitados"]. "</span></td>";
  echo "<td class='hidden-phone' width=\"25%\"><a href='../imagenes/$row[archivo_e]'>" . 
      $row["archivo_e"]. "</a></td>";
  echo "<td class='hidden-phone' width=\"25%\"><font face=\"verdana\">". 
      $row["descripcion"] . "</font></td>";
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["asistencia"] . "</font></td>"; 
  echo "<td class='hidden-phone'> 
        <label for='defaul' class='badge'>". 
      $row["lugar_e"]."<input type='checkbox' id='default' class='badgebox'></label></td>";      
  echo "<td class='hidden-phone'>
<button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
<button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
<button type='submit' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>
</td>";   

    $numero++;
  }
?>

                </tbody>
</div>                
                </table>
  </div>             

                  </div>
                  </div>
    </section>
      
                <input type="hidden" name ="nombreN" value="<?php echo $columna['nombre_inv'] ?>">
                <input type="hidden" name ="tutor" value="<?php echo $columna['tutor'] ?>">
                <input type="hidden" name ="autor" value="<?php echo $columna['autor'] ?>">
      </form>

   </div>
      

  <script src="../js/jQuery-2.2.0.min.js"></script>
  <script src="../js/jquery.dataTables.js"></script>
  <script src="../js/dataTables.bootstrap.js"></script>
  <script src="../js/load_datetable.js"></script>   
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
   <footer class="site-footer" >
          <div class="text-center">
              2016 Colegio Universitario de Caracas
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
</body>
</html>