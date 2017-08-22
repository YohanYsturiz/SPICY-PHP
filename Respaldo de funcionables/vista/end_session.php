<?php

session_start();
$_SESSION = array();

session_destroy();
?>

<script type='text/javascript'>
      function regresar()
      {
          window.location="vis_login.php";
      }
</script>

<!DOCTYPE html>
<head>
	  <meta charset="UTF-8">
      <meta name="description" content="Sistema de Registro de Actividades Extra-Curriculares">
      <meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
	  <link rel="stylesheet" type="text/css" href="../css/out.css">
	  <title>Sesión finalizada</title>
</head>
<body>
	<section id="wrap">
	 <header>
			<div id="subheader"> 
				<div id="logotipo"> <p> <a href="">Sesión Finalizada Correctamente</a></p></div>
				<nav>
					
				</nav>
			</div>
		</header>
	<input type="button" value="Ir a Página Inicio de Sesión" onclick="regresar()" id="submit">
	</section>
</body>
</html>