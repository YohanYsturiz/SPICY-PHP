<!DOCTYPE html>
<html>
<head>
	<title>Investigaciones</title>
	<link rel="stylesheet" type="text/css" href="../css/styleindex.css">
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
	</header>
			<section id="main-content">
				<article>
					<header>
						<h1>Esta es una página con cabecera fija</h1>
					</header>

	<div class="content">
		<a href="add_inv.php">agregar investigacion</a>
		<a href="add_inv.php">modificar investigacion</a>
		<a href="add_inv.php">eliminar investigacion</a>
		<br><a href="vis_consult_all_inv.php">Consultar todas las Investigaciones.</a>
		<a href="vis_consult_una_inv.php">Consultar una investigacion</a>
	</div>
				</article> <!-- /article -->
	
			</section> <!-- / #main-content -->
</body>
</html>