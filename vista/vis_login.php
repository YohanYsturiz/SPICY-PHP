<!DOCTYPE html>
<head>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Inicio de Sesión</title>
</head>
<body>
<br>
<div class="wrapper">
	<form class="login-form" action="../controlador/cont_login.php" method="post">
		
		<div class="header">
			<h1>Inicio de Sesión</h1>
			<span>Bienvenido a Sipsuc para ingresar debe iniciar sesion.</span>
		</div>
		<div class="content">
			<input type="text" name="usuario" max-length="30" class="input username" placeholder="Ingrese usuario" required/>
			<input type="password" name="clave" max-length="30" class="input password" placeholder="Ingrese contraseña" required/>
			 
		</div>
		<div class="footer">
			<button class="button" type="submit"> Iniciar Sesion </button>
			<a href="vis_pre_agregar_user.php"><input type="button" name="submit" value="Registrarse" class="register" /></a>	
		</div>
		</div>

		<div class="gradient"></div>
</body>
<footer>
<br>
<p align="center" title="12">Colegio Universitario de caracas, Altamira Av. Sucre, La floresta</p>	
</footer>
</html>