  <?php
    session_start();
  ?> 

<!DOCTYPE>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Sistema de Registro de Actividades Extra-Curriculares">
		<meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/botones.css">


	<script type='text/javascript'>
      function regresar()
      {
          alert("Sesion Finalizada")
          window.location="vista/end_session.php";
      }
      </script>

		<title>Registro de Actividades</title>
	</head>


	<body>
        <header>
			<div id="subheader"> 
				<div id="logotipo"> <p> <a href="">SIG</a></p></div>
				<nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="#">Indicadores</a>
							<ul style="margin-left: 100px">
								<li><a href="vista/vis_add_student.php">Historial</a></li>
				 				<li><a href="vista/vis_consult_2.php">Estadisticas de indicadores</a> </li>
				 				<li><a href="vista/vis_consult_all_students.php">Ultimos resultados</a></li>
				 				<li><a href="vista/vis_consult_all_students.php">Usuarios</a></li>  
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
							<input type="button" class="BTN_TRANS" value="Cerrar Sesion" onclick="regresar()" id="submit"></li>
					</ul>
				</nav>
			</div>
		</header>
				<!--<section id="bienvenidos">
						<article>
							<hgroup style="text-align: center"><h3>Sistema de Registro de Actividades Extra-Curriculares</h3> </hgroup>
								<p>
									<ul style="text-align: justify">
										La ejecución de este proyecto tiene como principal objetivo beneficiar a la comunidad del Colegio Universitario de Caracas, y se basa en generar la mayor satisfacción y comodidad de cada uno de los estudiantes aportándoles información que podrán utilizar en el momento que les sea necesario, además podrán dar sus opiniones, ya que esta división está construida para ellos. 
Se plantea recabar información necesaria en cuanto a intereses y actividades que les gustaría realizar a los estudiantes y a su vez tendrán mayor potestad en la toma de decisiones del Departamento de Bienestar Estudiantil.
Además se propone informar e incentivar a la comunidad a que participen y colaboren con el crecimiento del departamento, ya que esta creado por y para ellos.

									</ul>
								</p>
						</article>
					</section>		
			</section>-->
			</style>
			</li>
			</ul>
			</li>
			</ul>
			</nav>
			</div>
			</header>
			</section>


<div>		
				<section id="Boton1">

	    					<button>Indicador de gestion</button>
			
				</section>
				<section id="boton2">

							<button>Indicador de Calidad</button>	
				</section>
</div>

<div>
	<section id="Boton1">

	    					<button>Indicador de gestion</button>
			
				</section>
				<section id="boton2">

							<button>Indicador de Calidad</button>	
				</section>
</div>

	</body>
</html>