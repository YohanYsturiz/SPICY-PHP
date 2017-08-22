<!DOCTYPE>
<html>
  <?php
    session_start();
    $usuario  = $_SESSION['usuario'];
    $clave  = $_SESSION['clave'];
  ?>
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Sistema de Registro de Actividades Extra-Curriculares">
      <meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/form.css">

      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="../js/selects.js"> </script>
      
      <script type='text/javascript'>
      function regresar()
      {
          window.location="../index.php";
      }
      function justNumbers(e)
      {
          var keynum = window.event ? window.event.keyCode : e.which;
          if (keynum == 8)
          return true;
           
          return /\d/.test(String.fromCharCode(keynum));
      }
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

      </script>


      <title>Agregar Investigador</title>
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
                    <li> <a href="#"><?php echo "Sesion iniciada por $usuario" ?> </a>
                      <ul style="margin-left: 350px">
                          <li><a href="">Cerrar Sesión</a></li>
                  </ul>
                </nav>
              </div>
            </header>

      <section id="wrap">

      <section id="main">

      <form action="../controlador/cont_add_inv.php" method="POST">

          <h1>Agregar Estudiante</h1>

          <table>		
            <tr>
                  <td>  <h2>Nombre de la investigacion</h2> <input type="text" name ="nombre_inv" onkeypress="return soloLetras(event);" size="20" maxlength="50" placeholder="Nombre investigacion" required></td>
                  <td>  <h2>Autor</h2> <input type="text" name = "autor" onkeypress="return soloLetras(event);" size="20" maxlength="50" placeholder="autor" required></td>  
                  <td>  <h2>tutor</h2> <input type="text" name="tutor" size="20" maxlength="50" onkeypress="return soloLetras(event);" placeholder="tutor" required></td>
            </tr>

            <tr>
                  <td> <h2>tipo de investigacion</h2>
                        <SELECT name="tipo_inv" required>
                            <OPTION selected>Seleccione
                                <OPTION value= DeCampo>De campo
                                <OPTION value= Experimental>Experimental
                            </OPTION>
                        </SELECT>
                  </td>

                  <td>  <h2>otos autores</h2> <input type="text" name= "otro_autor" onkeypress="return soloLetras(event);" placeholder="otros autores" required></td>
                  <td>  <h2>fecha</h2> <input type="text" name ="fecha_c" onkeypress="return justNumbers(event);" size="10" maxlength="10" placeholder="00/00/00" required></td>
            </tr>
          
            <tr>
                  <td>  <h2>lugar</h2> <input type="text" name = "lugar_inv" size="10" maxlength="100" placeholder="Lugar" required /></td>
                  <td>  <h2>Status</h2>
                           <SELECT name="status" required>
                              <OPTION selected>Seleccione
                                  <OPTION value="En aprobacion">Aprobacion
                                  <OPTION value="iniciando">Iniciado
                                  <OPTION value="desarrollo">Desarrollo          
                                  <OPTION value="en prueba">En pruebas
                                  <OPTION value="finalizado">Finalizado
                              </OPTION>
                          </SELECT>  

                          </td>
                          </tr>
        
        <!-- <td>  <h2>Archivo</h2> <input type="file" name = "file_inv" size="10" maxlength="100" placeholder="archivo" required /></td> -->

                  <!-- <td>  <h2>Sede</h2>
                            <SELECT name="sede" required>
                                 <OPTION selected>Seleccione
                                     <OPTION value="Los Cedros">Los Cedros
                                      <OPTION value="Edificio Sucre">Edificio Sucre
                                </OPTION>  
                           </SELECT>
                  </td>         -->
          <!--   </tr>

            <tr>
                  <td>  <h2>Trayecto</h2>
                             <SELECT name="trayecto" required>
                                   <OPTION selected>Seleccione
                                      <OPTION value="Inicial">Inicial
                                      <OPTION value= "I">I
                                      <OPTION value= "II">II
                                      <OPTION value= "III">III
                                      <OPTION value= "IV">IV</b>
                                    </OPTION>
                              </SELECT>
                  </td>
 -->
                  <!-- <td>  <h2>Trimestre</h2>
                            <SELECT name="trimestre" required>
                                 <OPTION selected>Seleccione
                                    <OPTION value= "I">I
                                    <OPTION value= "II">II
                                    <OPTION value= "III">III
                                 </OPTION>
                            </SELECT>  
                  </td>
 -->
             <!--      <td>  <h2>Turno</h2>
                            <SELECT name="turno" required>
                                 <OPTION selected>Seleccione
                                    <OPTION value= "Mañana">Mañana 
                                    <OPTION value= "Tarde">Tarde
                                    <OPTION value= "Noche">Noche
                                 </OPTION>
                            </SELECT>
                  </td>

            </tr>

            <tr> -->
                  <!-- <td>  <h2>Sección</h2>
                            <SELECT name="seccion" required>
                                 <OPTION selected>Seleccione
                                    <OPTION value= "01">01
                                    <OPTION value= "02">02
                                    <OPTION value= "03">03
                                    <OPTION value= "04">04
                                    <OPTION value= "05">05
                                 </OPTION>
                            </SELECT>
                  </td>
 -->
                  <!-- <td>  <h2>Tipo de Actividad</h2>
                            <SELECT id="tipoactividad" required>
                            </SELECT>
                  </td>

                  <td>  <h2>Actividad</h2>
                            <SELECT name="actividad_option" id="actividad">
                            </SELECT>
                  </td> -->


           <!-- </tr> -->
          
          </table>

          <table id="table2">
              <tr>
                  <td>  <button type="submit">Guardar</button></td>
                  <td>  <div class="nav">
                            <input type="button" value="Regresar" onclick="regresar()" id="submit">
                        </div>
                  </td> 

              </tr>
          </table>
         
        
      </form>

      </section>	
      </section>
</body>
</html>	
	
	


