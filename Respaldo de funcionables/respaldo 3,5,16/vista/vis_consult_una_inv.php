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
     <link rel="stylesheet" type="text/css" href="../css/estilos.css">
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
            <section id="main-content">
            <article> 
              <header>
                    <h1 align="center">Buscar Investigaciones.</h1>
              </header>
            </article>

			<form method="post" action="../controlador/cont_consult_una_inv.php">
      <div class="form-group">
			    <table align="center">
      <tr>    
          <td><label class="control-label col-xs-10">Nombre de la Investigacion:</label></td>
          <td><input type="text" class="form-control" name="nombre_inv" placeholder="Nombre de la Investigacion"/></td>
			</tr>
			</table>
      </div>
		  <div class="form-group">
    	<table id="table3" align="center">
  				<tr>
      				<td>  <input class="btn btn-primary" role="button" type="submit" value="Buscar" id="submit" required></td>
          		<td>  <input class="btn btn-primary" role="button" type="button" value="Regresar" onclick="regresar()" id="submit"></td>
          </tr>
			</table>
      </div>
			</form>

			</section>

	</body>
</html>
