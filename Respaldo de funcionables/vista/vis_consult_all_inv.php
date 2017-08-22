<!DOCTYPE>
<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
?> 
  <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/styleindex.css">
        <link href="../css/tablesforall2.css" rel="stylesheet" type="text/css" />
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
              <body>
          <header id="main-header">
      <a id="logo-header" href="#">
      <span class="site-name">Unidad de Investigacion</span>
      <span class="site-desc">Colegio Universitario de Caracas</span>
      </a> <!-- / #logo-header --> 
        <!--<div id="logotipo"> <p> <a href="">SIG</a></p></div>-->
        <nav>
          <ul>
            <li><a href="#">Inicio</a></li>
        <li><a href="#">Investigaciones</a></li>
        <li><a href="#"><?php echo "Bienvenido <b>" . $_SESSION['usuario'] . "</b>";?></a></li>
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
          <input type="button" class="BTN_TRANS" value="Cerrar Sesion" onclick="regresar()" id="submit" />
        </nav><!-- / nav -->
          </div>          
      </header>
      <section id="main-content">
  
    <article>
      <header>
        <h1>Registro total de Investigaciones.</h1>
      </header>
      <div class="content">
      <section id="wrap">

      <form action="../controlador/cont_consult_all_students.php" method="post">

      <div class="tusers">
      <table>
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
  
  include('../modelo/mode_conection.php');
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
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Estudiantes Inscritos: " . $numero . 
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
 

      
        <input type="hidden" name="cedula" value="<?php echo $columna['cedula'] ?>">
        <input type="hidden" name="apellidos" value="<?php echo $columna['apellidos'] ?>">
        <input type="hidden" name="nombres" value="<?php echo $columna['nombres'] ?>">

</form>
</body>
</html>   
 