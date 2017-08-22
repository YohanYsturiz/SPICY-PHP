<html>
<head>
<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">

<script type='text/javascript'>
	function regresar()
	{
   	 	window.location="vis_login.php";
	}
</script>
<title>Agregar Investigador</title>
</head>
<body>
<div id="wrapper">

	<div id="header">

		<div id="logo">

			<h1><a href="#">cuc</a></h1>			

		</div>

</div>

	<!-- end #header -->

	<div id="menu">


	</div>

	<!-- end #menu -->


			<div class="post">

				<h2 class="title"><a href="#">Agregar Investigador</a></h2>

<!-- 				<p class="meta"><span class="posted"> 
<?php
// session_start();
// $usuario	= $_SESSION['usuario'];
// $clave 	= $_SESSION['clave'];
// if($usuario <> ' ') 
// 	{
// 	echo "Sesión iniciada como: ".$_SESSION['usuario']."<br>";
?>
 </span> 
</p>-->
</div>
</div>
					   </div>
					   </div>
					   </div>
					   </div>
					   
			
				  
</p>
					</p>
<form action="../controlador/cont_add_user.php" method="POST">
<table align="center" class="contacto">
		<tr align="middle">
			<th colspan="2" align="center">Agregar Investigador</th>
		</tr>
		<tr>
			<th >Cédula</th>
			<td><input type="text" name = "cedulaN" size="8" maxlength="8" required ></td>
		</tr>
		<tr>
			<th>Usuario</th>
			<td><input type="text" name = "usuarioN" size="12" maxlength="12" required ></td>
		</tr>
		<tr>
			<th>Clave</th>
			<td><input type="password" name = "claveN" value="" size="15" maxlength="15" required ></td>
		</tr>
		<tr>
			<th >Apellido</th>
			<td><input type="text" name = "apellidos" size="50" maxlength="50" required ></td>
		</tr>
		<tr>
			<th>Nombre</th>
			<td><input type="text" name = "nombres" size="50" maxlength="50" required></td>
		</tr>
</table>
<br>
<table align="center">
  <tr>
  		<td>
  				<input type="submit" value="Guardar" id="submit">
  				<input type="button" name="accion" value="Regresar" type="button" onclick="regresar()" id="submit">
  		</td>
  </tr>
</table>
</form>
</body>
</html>	
	
// <?php 	

// 	}
// else 
// 	{
// ?>
// <script>
// 		alert('Usuario no Autenticado');
// </script>		
// <?php 		
// 	}
// ?>