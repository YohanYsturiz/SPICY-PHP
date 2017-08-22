<!DOCTYPE>
<html>
	<?php
		session_start();
		$usuario	= $_SESSION['usuario'];
		$clave 	= $_SESSION['clave'];
	?>
	<head>
	  <meta charset="UTF-8">
      <meta name="description" content="Sistema de Registro de Actividades Extra-Curriculares">
      <meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/form_ing.css">
	  <title>Buscar Estudiante</title>


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
		<header>
      <div id="subheader"> 
        <div id="logotipo"> <p> <a href="">Actividades CUC</a></p></div>
        <nav>
          <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="#">Estudiantes</a>
              <ul style="margin-left: 100px">
                <li><a href="vis_add_student.php">Agregar</a></li>
                <li><a href="vis_consult_2.php">Consultar</a> </li>
                <li><a href="vis_consult_all_students.php">Registro Completo</a></li> 
              </ul>
            </li>
            <li> <a href="../index.php"><?php echo "Bienvenido <b>" . $_SESSION['usuario'] . "</b>";?></a>
                      <ul style="margin: -10px 360px">
                         <li><style type="text/css"> 
              .BTN_TRANS 
              { 
              background:transparent;
              border: transparent;
              } 
              </style> 
              <input type="button" class="BTN_TRANS" value="Cerrar Sesion" onclick="regresar2()" id="submit"></li>
          </ul>
        </nav>
      </div>
    </header>
            </header>

            <section id="wrap">

			<form method="post" action="../controlador/cont_consult_una_inv.php">
			<table>
			
				<tr>
					<td>  <h1>Ingrese el nombre de la investigacion</h1></td>
				</tr>
	
				<tr>
					<td>  <input type="text" name="nombre_inv" placeholder="Nombre de la Investigacion"/></td>
          <!-- onkeypress="return justNumbers(event);" -->
				</tr>
			</table>
			
			<table id="table3">
  				<tr>
      				<td>  <input type="submit" value="Buscar" id="submit" required></td>
          			<td>  <input type="button" value="Regresar" onclick="regresar()" id="submit"></td>

          		</tr>

			
			</table>

			</form>

			</section>

	</body>
</html>
