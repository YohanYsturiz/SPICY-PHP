<!DOCTYPE>
<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
$cod_usuario = $_SESSION['cod_usuario'];
include_once('../controlador/cont_table_all_even.php');
?> 
  <html>
    <head>
        <meta charset="UTF-8">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>
        
        <!-- <link rel="stylesheet" type="text/css" href="../css/form_comp.css"> -->
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
      <section id="main-content">
  
    <article>
      <header>
        <h1 align="center">Registro total de eventos.</h1>
      </header>
        <div class="panel-body">  
      <form action="../controlador/cont_consult_all_even.php" method="post">
   <div class="tusers">
    <section id="main-content">
    <div class="table-responsive">
    <table class="table table-striped table-advance table-hover">
                    <tr>
                        <td>
                            Evento
                        </td>
                        <td >
                            Tipo de Evento
                        </td>
                        <td>
                            linea Investigacion
                        </td>
                        <td>
                            lider
                        </td>
                        <td>
                            Invitados 
                        </td>
                        <td>
                            Fecha para iniciar 
                        </td>
                        <td>
                            Fecha de culminacion
                        </td>
                        <td>
                            Lugar del Evento
                        </td>
                        <td >
                            Tema 
                        </td>
                        <td>
                            Facilitador 
                        </td>
                        <td>
                            Asistencia
                        </td>
                        <td>
                            Archivo
                        </td>
                        <td>
                            Descripcion
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
  

  while($row = pg_fetch_array($result))
  {
  echo "<tr>";
  echo "<td class='hidden-phone' width=\"40%\">" . 
      $row["usuario"] . "</td>";
        echo "<td><a href='../vista/vis_muestra_even.php?cod_even=".$row['cod_even'] ."'>
        ". $row['evento'] ."</td>";
    echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["tipo_ev"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["linea_investigacion"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["lider"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["invitados"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["fecha_ini_e"]. "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["fecha_cu_eve"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["lugar_e"]. "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["tema"]. "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["facilitador"]. "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $row["asistencia"]. "</font></td>";
    echo "<td width=\"25%\"><a href='../imagenes/$row[archivo_e]'><font face=\"verdana\">". 
      $row["archivo_e"] . "</font></a></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">". 
      $row["descripcion"] . "</font></td>";

    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Eventos inscritos: " . $numero . 
      "</b></font></td></tr>";
  
  pg_free_result($result);
?>
                </table>

    </div>

<table>
  <tr>
      <td>
          <input type="button" value="Regresar" onclick="regresar()" id="submit">
      </td>
  </tr>
</table>
</section>
      </div>
      
    </article> <!-- /article -->
  
  </section> <!-- / #main-content -->
 

      
        <input type="hidden" name="evento" value="<?php echo $columna['evento'] ?>">
        <input type="hidden" name="facilitador" value="<?php echo $columna['facilitador'] ?>">
        <input type="hidden" name="fecha_e" value="<?php echo $columna['fecha_e'] ?>">

</form>
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