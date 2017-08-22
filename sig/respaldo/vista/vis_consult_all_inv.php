<!DOCTYPE>
<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
?> 
  <html>
    <head>
        <meta charset="UTF-8">
       <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="../css/estilos.css">
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
            <nav role="navigation" class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">CUC, SPYCI</a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php">Inicio</a></li>
            <li><a href="../vista/investigaciones.php">Investigaciones</a></li>
            <li><a href="../vista/eventos.php">Eventos</a></li>
            <li><a href="#">Evaluaciones</a></li>
            <li><a href="#">Estadisticas</a></li>
          <!--   <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider">divide</li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li> -->
        </ul>
        <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo "Bienvenido <br>" . $_SESSION['usuario'];?> </a></li>
        </ul>
    </div>
</nav>
          </div>          
      </header>

    <header>
      <h1 align="center">Registro total de Investigaciones.</h1>
    </header>
    <form class="form-horizontal" action="../controlador/cont_consult_all_students.php" method="post">
    <div class="tusers">
    <section id="main-content">
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
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Investigaciones Inscritas: " . $numero . 
      "</b></font></td></tr>";
  
  pg_free_result($result);
?>
                </table>
               


<table class="table table-striped">
  <tr>
      <td>
          <input class="btn btn-primary" role="button" type="button" value="Regresar" onclick="regresar()" id="submit">
      </td>
  </tr>
</table>
    </div>
    </section>
      
        <input type="hidden" name="cedula" value="<?php echo $columna['cedula'] ?>">
        <input type="hidden" name="apellidos" value="<?php echo $columna['apellidos'] ?>">
        <input type="hidden" name="nombres" value="<?php echo $columna['nombres'] ?>">

</form>
</body>
</html>   
 