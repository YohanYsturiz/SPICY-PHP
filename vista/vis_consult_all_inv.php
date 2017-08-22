
<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
$cod_usuario = $_SESSION['cod_usuario'];
  
include_once('../controlador/cont_table_all_inv.php');
?> 
<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" href="../css/dataTables.bootstrap.css">
<link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>
<script type='text/javascript'>
        function regresar()
          {
            window.location="../index.php";
          }
</script>
<title>Registro Completo</title>
 </head>
  <body>
<?php 
include("../vista/header.html");
?>
                    
      </header>

    <header>
      <h1 align="center">Registro total de Investigaciones.</h1>
    </header>
    <div class="panel-body">  
<!--     <form class="form-horizontal" action="../controlador/cont_delete_inv.php" method="post">
    <div class="tusers">
    <section id="main-content">
    <div class="table-responsive">
    <table class="table table-striped table-advance table-hover" id="table-style" data-toggle="table"> -->
    <div class="table-responsive">
    <div class="tab-pane" id="tab_3">
                                   
                                    <hr>
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
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Fecha de inicio</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Fecha de culminacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Lugar</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Estatus</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Linea Investigacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Archivo</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Descripción</th>
                                  <th class="hidden-phone"><i class="fa fa-bookmark"></i>Ponderacion</th>
                                  <th class="hidden-phone"><i class=" fa fa-edit"></i>Operacion</th>
                                    
                              </tr>
                              </thead>
                    
<?php  

  while($row = pg_fetch_array($result))
  {
  echo "<tr>";
  echo "<td class='hidden-phone' width=\"40%\">" . 
      $row["usuario"] . "</td>";
  echo "<td><a href='../vista/vis_muestra_inv.php?cod_inv=".$row['cod_inv'] ."'>
        ". $row['nombre_inv'] ."</td>";
  echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["autor"] . "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["tutor"] . "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["tipo_inv"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["otro_autor"]. "</font></td>";
      echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["fecha_ini"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["fecha_c"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["lugar_inv"]. "</font></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["status"]. "</font></td>"; 
  echo "<td class='hidden-phone' width=\"25%\">" . 
      $row["linea_investigacion"]. "</td>";    
  echo "<td width=\"25%\"><a href='../imagenes/$row[archivo]'><font face=\"verdana\">". 
      $row["archivo"] . "</font></a></td>";
  echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["precio"] . "</font></td>";    
  echo "<td class='hidden-phone'> 
   <label for='defaul' class='badge'>". 
      $row["status"]."<input type='checkbox' id='default' class='badgebox'></label></td>";      
  echo "<td class='hidden-phone'>
<button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
<button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
<button type='submit' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>
</td>";   
  }
$numero++;
?>
                </table>
    </div> 
    </div>    
        <input type="hidden" name="cedula" value="<?php echo $columna['cedula'] ?>">
        <input type="hidden" name="apellidos" value="<?php echo $columna['apellidos'] ?>">
        <input type="hidden" name="nombres" value="<?php echo $columna['nombres'] ?>">

</form>
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
</body>
</html>   
 