<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	$clave = $_SESSION['clave'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../css/stylelogin.css" rel="stylesheet" type="text/css" />
	<title>Inicio de Sesión</title>

	<!-- Scripts-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<!--slider icons-->

	<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});

</script>

	<script language="JavaScript" type="text/javascript">

		/*Script del Reloj */
	function actualizaReloj() {
		/* Capturamos la Hora, los minutos y los segundos */
		marcacion = new Date()
		/* Capturamos la Hora */
		Hora = marcacion.getHours()
		/* Capturamos los Minutos */
		Minutos = marcacion.getMinutes()
		/* Capturamos los Segundos */
		Segundos = marcacion.getSeconds()
		/*variable para el apóstrofe de am o pm*/
		dn = "a.m"
		if (Hora > 12) {
		dn = "p.m"
		Hora = Hora - 12
	}
		if (Hora == 0)
		Hora = 12
		/* Si la Hora, los Minutos o los Segundos son Menores o igual a 9, le añadimos un 0 */
		if (Hora <= 9) Hora = "0" + Hora
		if (Minutos <= 9) Minutos = "0" + Minutos
		if (Segundos <= 9) Segundos = "0" + Segundos
		/* Termina el Script del Reloj */

		/*Script de la Fecha */

	var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
	var Mes = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", 
	"Octubre", "Noviembre", "Diciembre");
	var Hoy = new Date();
	var Anio = Hoy.getFullYear();
	var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio + ". ";

	/* Termina el script de la Fecha */

	/* Creamos 2 variables para darle formato a nuestro Script */
	var Script, Total

	/* En Reloj le indicamos la Hora, los Minutos y los Segundos */
	Script = Fecha + Hora + ":" + Minutos + ":" + Segundos + " " + dn

	/* En total Finalizamos el Reloj uniendo las variables */
	Total = Script

	/* Capturamos una celda para mostrar el Reloj */	
	document.getElementById('Fecha_Reloj').innerHTML = Total

	/* Indicamos que nos refresque el Reloj cada 1 segundo */
	setTimeout("actualizaReloj()", 1000)
	}
</script>
</head>
<div>Feliz dia! <body onload="actualizaReloj()"><table><tr><td id="Fecha_Reloj"></td></tr></table></body> </div>
<body>

<div id="wrapper"> 

<!--SLIDER-EN ICONOS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--Login "Form envio de formulario"-- >
<form name="login-form" class="login-form" action="../controlador/cont_login.php" method="post">
		
		<!--header-->
		<div class="header">
			<h1>Iniciar Sesion</h1>
			<!--descripcion-->
			<span>Bienvenido a Sicsup debes iniciar sesion para entrar al sistema.</span>
		</div>

		<!--Contenido-->
		<div class="content">
		<input name="usuario" maxlength="30" type="text" class="input-username" required/>
		<input name="clave" type="password" maxlength="30" class="input-password" onfocus="this.value=''" required/>	
		</div>
		<!--fin de contenido-->
		<!--Footer "pie de pagina"-->
		<div class="footer">
			<!--boton de login-->
			<input type="submit" name="submit" value="login" class="button" />
			<input type="submit" name="submit" value="registarse" class="register" />
		</div> <!--fin de footer-->
		<!--<h1>Inicio de Sesión</h1>
		<input type="text" name="usuario" max-length="30" placeholder="Ingrese usuario" required/>
		<input type="password" name="clave" max-length="30" placeholder="Ingrese contraseña" required/>
		<button type="submit"> Iniciar Sesion </button>-->

		<!--fin de form--> </form>
	</div> <!-- fin de div Wrapper-->
	<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->


</body>

</html>