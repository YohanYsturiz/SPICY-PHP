<!DOCTYPE html>
<html>
<head>
	<title>Eventos</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
						<h1>Eventos</h1>
					</header>
	  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <!--<img src="..." alt="...">-->
      <div class="caption">
        <h3>Gestionar:</h3>
        <p><a class="btn btn-primary" role="button" href="vis_add_even.php">agregar Evento</a></p>
        <p><a class="btn btn-primary" role="button" href="add_even.php">modificar Evento</a></p>
        <p><a class="btn btn-primary" role="button" href="add_event.php">eliminar Evento</a></p>
        <p><a class="btn btn-primary" role="button" href="vis_consult_all_even.php">Consultar todos los Eventos.</a></p>
        <p><a class="btn btn-primary" role="button" href="vis_consult_un_even.php">Consultar un evento</a></p>
      </div>
    </div>
  </div>
</div>					

				</article> <!-- /article -->
	
			</section> <!-- / #main-content -->
</body>
</html>