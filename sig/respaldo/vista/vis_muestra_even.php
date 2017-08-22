<!DOCTYPE>
<html>
    <?php
      session_start();
      $usuario = $_SESSION['usuario'];
      $clave  = $_SESSION['clave'];
    ?>
    <head>
      <meta charset="UTF-8">
      <meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
      <link rel="stylesheet" type="text/css" href="../css/styleindex.css">
      <!-- <link rel="stylesheet" type="text/css" href="../css/form_all.css"> -->
      <title>Buscar un Evento</title>
      <script src="../js/ocultar.js"> </script>
      <script src="../js/selects.js"> </script>
      
      <script type='text/javascript'>
        function regresar()
        {
            window.location="../index.php";
        }
        function eliminar()
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
            <li><a href="../index.php">Inicio</a></li>
        <li><a href="../vista/investigaciones.php">Investigaciones</a></li>
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
          </div>          
      </header>
      <section id="main-content">
  
    <article>
      <header>
        <h1>Colegio Universitario de Caracas.</h1>
      </header>
                
        <form action="../controlador/cont_delete_even.php" method="POST">
        
        <h1>Consultar Evento</h1>
              <table id="table2">

              <tr>
                  <td>  <h2>Nombre del evento</h2> <input type="text" name ="evento" id="text" value="<?php  echo $columna['evento'];?>" disabled="true"></td>
                  <td>  <h2>Tipo de evento</h2> <input type="text" name = "tipo_ev" id="text" value="<?php  echo $columna['tipo_ev'];?>" disabled="true"></td>  
                  <td>  <h2>Invitados</h2> <input type="text" name = "invitados" id="text" value="<?php  echo $columna['invitados'];?>" disabled="true"></td>
            </tr>

            <tr>
                  <td>   <h2>fecha del Evento</h2>  <input type="text" name="fecha_e" id="text" value="<?php  echo $columna['fecha_e'];?>" disabled="true"></td>
                  <td>  <h2>Lugar del Evento</h2> <input type="text" name= "lugar_e" id="text" value="<?php  echo $columna['lugar_e'];?>" disabled="true"></td>
                  <td>  <h2>Tema</h2> <input type="text" name = "tema" id="text" value="<?php  echo $columna['tema'];?>" disabled="true"></td>
            </tr>
          
            <tr>
                  <td>  <h2>facilitador</h2>  <input type="text" name = "facilitador" id="text" value="<?php  echo $columna['facilitador'];?>" disabled="true"></td>
                  <td>  <h2>asistencia</h2>  <input type="text" name="asistencia" id="text" value="<?php  echo $columna['asistencia'];?>" disabled="true"></td>
                  <!-- <td>  <h2>Sede</h2>  <input type="text" name="sede" id="text" value="<?php  //echo $columna['sede'];?>" disabled="true"></td> 

                 

            <tr>
                  // <td>  <h2>Trayecto</h2>  <input type="text" name="trayecto" id="text" value="<?php  //echo $columna['trayecto'];?>" disabled="true"></td>
                  <td>  <h2>Trimestre</h2>  <input type="text" name="trayecto" id="text" value="<?php  //echo $columna['trimestre'];?>" disabled="true"></td>
                  <td>  <h2>Turno</h2>  <input type="text" name="trayecto" id="text" value="<?php  //echo $columna['turno'];?>" disabled="true"></td>
              
            </tr>

            <tr>
                  <td><h2>Seccion</h2>  <input type="text" name="seccion" id="text" value="<?php  //echo $columna['seccion'];?>" disabled="true"></td>
                  <td><h2>Actividad Inscrita</h2>  <input type="text" id="text" name="actividad_option" value="<?php  //echo $columna['actividad_option'];?>" disabled="true"></td>

            </tr>
 -->
             <tr>   
                <td><input type="button" value="Regresar" onclick="regresar()" id="submit"></td>
                <td><input type="button" value="Modificar" onclick="mostrar(this); return false" id="submit"></td>
                <form name="tuformulario"> 
                <td><input type="submit" value="Eliminar" onclick="return confirm('¿Estás seguro de eliminar?')" id="submit"></td>
            </tr>


             
            

                <input type="hidden" name ="evento" value="<?php echo $columna['evento'] ?>">
                <input type="hidden" name ="facilitador" value="<?php echo $columna['facilitador'] ?>">
                <input type="hidden" name ="fecha_e" value="<?php echo $columna['fecha_e'] ?>">
            
              </form>

          
          </table> 

          <div id="oculto" style="visibility:hidden">
          <form action="../controlador/con_modify_even.php" id="oculto" method="post">
          

           <h1>Modificar Estudiante</h1>

          <table>
            
            <tr>

                <td>  <h2>Nombre del evento</h2>  <input type="text" maxlength="30" name="evento" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['evento'];?>"> </td>
                <td>  <h2>Tipo de Evento</h2>
                           <SELECT name="tipo_ev" required>
                              <OPTION selected>---<?php  echo $columna['tipo_ev'];?>---
                                  <OPTION value="Taller">Taller
                                  <OPTION value="Seminario">Seminario
                                  <OPTION value="Foro">Foro 
                              </OPTION>
                          </SELECT>  </td> 
                <td>  <h2>invitados</h2>  <input type="text" maxlength="30" name="invitados" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['invitados'];?>"> </td>
                
            </tr>

            <tr>
                <td>  <h2>fecha del evento</h2> <input type="text" maxlength="30" name="fecha_e" onkeypress="return justNumbers(event);" required value="<?php  echo $columna['fecha_e'];?>"> </td>

                </td>

               <td>  <h2>lugar del Evento</h2>  <input type="text" maxlength="20" name = "lugar_e" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['lugar_e'];?>"></td>
               <td>  <h2>tema</h2>  <input type="text" name = "tema" maxlength="20" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['tema'];?>"></td>
              
            </tr>

            <tr>
                <td>  <h2>Facilitador</h2> <input type="text" name = "facilitador" size="10" maxlength="100" placeholder="Facilitador" required value="<?php  echo $columna['facilitador'];?>" /></td>
                <td>  <h2>Asistencia</h2> <input type="text" name = "asistencia" size="10" maxlength="100" placeholder="asistencia" required value="<?php  echo $columna['asistencia'];?>" /></td>
                <!-- <td><h2>Sede</h2>  <SELECT name="sede">
                                      <OPTION selected>---<?php  //echo $columna['sede'];?>---
                                          <OPTION value="Los Cedros">Los Cedros
                                          <OPTION value="Edificio Sucre">Edificio Sucre
                                      </OPTION>  
                                    </SELECT>
                </td>

            </tr>
  
            <tr>
                <td>  <h2>Trayecto</h2>  <SELECT name="trayecto">
                                            <OPTION selected>---<?php  //echo $columna['trayecto'];?>---
                                                <OPTION value Inicial>Inicial
                                                <OPTION value= I>I
                                                <OPTION value= II>II
                                                <OPTION value= III>III
                                                <OPTION value= IV>IV
                                            </OPTION>
                                          </SELECT>
                </td>
                
                <td>  <h2>Trimestre</h2>  <SELECT name="trimestre">
                                              <OPTION selected>---<?php  //echo $columna['trimestre'];?>---
                                                  <OPTION value= I>I
                                                  <OPTION value= II>II
                                                  <OPTION value= III>III
                                              </OPTION>
                                           </SELECT>
                </td>
                  
                <td>  <h2>Turno</h2>  <SELECT name="turno">
                                          <OPTION selected>---<?php  //echo $columna['turno'];?>---
                                              <OPTION value=Manana>Mañana 
                                              <OPTION value= Tarde>Tarde
                                              <OPTION value= Noche>Noche
                                          </OPTION>
                                      </SELECT>
                </td>
                
            </tr>
  
            <tr>
                <td>  <h2>Sección</h2>  <SELECT name="seccion">
                                            <OPTION selected>---<?php  //echo $columna['seccion'];?>---
                                                <OPTION value= "01">01
                                                <OPTION value= "02">02
                                                <OPTION value= "03">03
                                                <OPTION value= "04">04
                                                <OPTION value= "05">05
                                           </OPTION>
                                        </SELECT>
                </td>

               <td><h2>Tipo de Actividad</h2>  <SELECT required id="tipoactividad"> </SELECT> </td>
               <td><h2>Actividad</h2>  <SELECT required name="actividad_option" id="actividad"> </SELECT> </td>

            </tr> -->

            </table>

            <table id="abajo">

            <tr>
            
                <td>  <input type="button" value="Regresar" type="button" onclick="regresar()" id="submit"></td>
                <td>  <input type="submit" value="Modificar" onclick="return confirm('¿Estás seguro de modificar?')" id="submit"> </td>
          
            </tr>

            </table>

        </div>
             
        <input type="hidden" name="evento" value="<?php echo $columna['evento'] ?>">
    <!--     <input type="hidden" name="facilitador" value="<?php //echo $columna['facilitador'] ?>">
        <input type="hidden" name="fecha_e" value="<?php //echo $columna['fecha_e'] ?>">  -->
        
        </form>

        </form>
        </article>
        </section>

</body>
</html>		