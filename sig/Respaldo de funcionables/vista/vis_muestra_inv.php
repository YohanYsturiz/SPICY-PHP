<!DOCTYPE>
<html>
    <?php
      session_start();
      $usuario = $_SESSION['usuario'];
      $clave  = $_SESSION['clave'];
    ?>
    <head>
      <meta charset="UTF-8">
      <meta name="description" content="Sistema de Registro de Actividades Extra-Curriculares">
      <meta name="keywords" content="Actividades,CUC,Extra,Curriculares,Univerdad">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/form_all.css">
      <title>Buscar investigacion</title>
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
             <header>
      <div id="subheader"> 
        <div id="logotipo"> <p> <a href="">Actividades CUC</a></p></div>
        <nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Estudiantes</a>
              <ul style="margin-left: 100px">
                <li><a href="../vista/vis_add_student.php">Agregar</a></li>
                <li><a href="../vista/vis_consult_2.php">Consultar</a> </li>
                <li><a href="../vista/vis_consult_all_students.php">Registro Completo</a></li> 
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

          <section id="wrap">
                
        <form action="../controlador/cont_delete_inv.php" method="POST">
        
        <h1>Consultar Estudiante</h1>
              <table id="table2">

              <tr>
                  <td>  <h2>Nombre de la investigacion</h2> <input type="text" name ="nombre_inv" id="text" value="<?php  echo $columna['nombre_inv'];?>" disabled="true"></td>
                  <td>  <h2>Autor</h2> <input type="text" name = "autor" id="text" value="<?php  echo $columna['autor'];?>" disabled="true"></td>  
                  <td>  <h2>tutor</h2> <input type="text" name = "tutor" id="text" value="<?php  echo $columna['tutor'];?>" disabled="true"></td>
            </tr>

            <tr>
                  <td>   <h2>tipo de investigacion</h2>  <input type="text" name="tipo_inv" id="text" value="<?php  echo $columna['tipo_inv'];?>" disabled="true"></td>
                  <td>  <h2>otros autores</h2> <input type="text" name= "edad" id="text" value="<?php  echo $columna['otro_autor'];?>" disabled="true"></td>
                  <td>  <h2>fecha</h2> <input type="text" name = "fecha_c" id="text" value="<?php  echo $columna['fecha_c'];?>" disabled="true"></td>
            </tr>
          
            <tr>
                  <td>  <h2>lugar</h2>  <input type="text" name = "lugar_inv" id="text" value="<?php  echo $columna['lugar_inv'];?>" disabled="true"></td>
                  <td>  <h2>status</h2>  <input type="text" name="status" id="text" value="<?php  echo $columna['status'];?>" disabled="true"></td>
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


             
            

                <input type="hidden" name ="nombreN" value="<?php echo $columna['nombre_inv'] ?>">
                <input type="hidden" name ="tutor" value="<?php echo $columna['tutor'] ?>">
                <input type="hidden" name ="autor" value="<?php echo $columna['autor'] ?>">
            
              </form>

          
          </table> 

          <div id="oculto" style="visibility:hidden">
          <form action="../controlador/con_modify_inv.php" id="oculto" method="post">
          

           <h1>Modificar Estudiante</h1>

          <table>
            
            <tr>

                <td>  <h2>Nombre de la investigacion</h2>  <input type="text" maxlength="30" name="nombre_inv" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['nombre_inv'];?>"> </td>
                <td>  <h2>autor</h2>  <input type="text" maxlength="30" name="autor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['autor'];?>"></td>
                <td>  <h2>tutor</h2>  <input type="text" maxlength="30" name="tutor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['tutor'];?>"> </td>
                
            </tr>

            <tr>
                <td>  <h2>Tipo de la Investigacion</h2>  <SELECT name="tipo_inv" >
                                        <OPTION selected>---<?php  echo $columna['tipo_inv'];?>---
                                            <OPTION value= DeCampo>De Campo
                                            <OPTION value= Experimental>Experimental
                                        </OPTION>
                                     </SELECT>

                </td>

               <td>  <h2>Otros autores</h2>  <input type="text" maxlength="20" name = "otro_autor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['otro_autor'];?>"></td>
               <td>  <h2>fecha de inicio</h2>  <input type="text" name = "fecha_c" maxlength="20" onkeypress="return justNumbers(event);" required value="<?php  echo $columna['fecha_c'];?>"></td>
              
            </tr>

            <tr>
                <td>  <h2>Lugar</h2>  <input type="text" name="lugar_inv" size="12" maxlength="100" required value="<?php  echo $columna['lugar_inv'];?>"></b> </td>
                <td>  <h2>status</h2>   <SELECT required name="status" >
                                            <OPTION selected>---<?php  echo $columna['status'];?>---
                                            <OPTION value="En aprobacion">Aprobacion
                                            <OPTION value="iniciando">Iniciado
                                            <OPTION value="desarrollo">Desarrollo          
                                            <OPTION value="en prueba">En pruebas
                                            <OPTION value="finalizado">Finalizado
                                            </OPTION>
                                        </SELECT> 
                          
                </td>
   
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
             
        <input type="hidden" name="nombre_inv" value="<?php echo $columna['nombre_inv'] ?>">
        <!-- <input type="hidden" name="autor" value="<?php //echo $columna['autor'] ?>"> -->
        <!-- <input type="hidden" name="tutor" value="<?php //echo $columna['tutor'] ?>"> -->
        
        </form>

        </form>

        </section>

</body>
</html>		