<!DOCTYPE>
<html>
	<?php
		session_start();
		$usuario	= $_SESSION['usuario'];
		$clave 	= $_SESSION['clave'];
	?>
	<head>
	  <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/styleindex.css">
    <!--funcion para enviar a end_session-->
    <script type='text/javascript'>
         function regresar()
        {
          alert("Sesion Finalizada")
          window.location="vista/end_session.php";
        }
        </script>

	  <title>Buscar Una Investigacion</title>


<script type='text/javascript'>
function regresar()
{
    window.location="../index.php";
}
function regresar2()
        {
          alert("Sesion Finalizada")
          window.location="../vista/vis_finish.php";
        }
         function justNumbers(e)
      {
          var keynum = window.event ? window.event.keyCode : e.which;
          if ((keynum == 8) || (keynum == 46))
          return true;
           
          return /\d/.test(String.fromCharCode(keynum));
      }
</script>
</head> 

	<body>
		<header id="main-header">
      <a id="logo-header" href="#">
      <span class="site-name">Unidad de Investigacion</span>
      <span class="site-desc">Colegio Universitario de Caracas</span>
      </a> <!-- / #logo-header --> 
        <!--<div id="logotipo"> <p> <a href="">SIG</a></p></div>-->
        <nav>
          <ul>
            <li><a href="../index.php">Inicio</a></li>
        <li><a href="../vista/investigaciones.php">Investigaciones</a></li>
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
          </ul>
        </nav><!-- / nav -->
          </div>          
      </header>
            <section id="main-content">
            <article> 
              <header>
                    <h1 align="center">Buscar Eventos.</h1>
              </header>
            </article>

			<form method="post" action="../controlador/cont_consult_un_even.php">
      <div class="form-group">
			    <table align="center">
      <tr>    
          <td><label class="control-label col-xs-10">Nombre del evento:</label></td>
          <td><input type="text" class="form-control" name="evento" placeholder="Nombre del evento"/></td>
			</tr>
			</table>
      </div>
		  <div class="form-group">
    	<table id="table3" align="center">
  				<tr>
      				<td>  <input type="submit" value="Buscar" id="submit" required></td>
          		<td>  <input type="button" value="Regresar" onclick="regresar()" id="submit"></td>
          </tr>
			</table>
      </div>
			</form>

			</section>

	</body>
</html>
