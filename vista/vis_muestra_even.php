<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
?>
<?php
include_once('../controlador/cont_consult_get_even.php');
?> 
<!DOCTYPE>
<html>
  
    <head>
       <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link href="../css/form.css" rel="stylesheet">
      <link href="../css/styles.css" rel="stylesheet">
      <script src="../js/lumino.glyphs.js"></script>
      <title>Consulta Evento</title>
      
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
 
<?php 
include("../vista/header.html");
//exec("convert inscripcion acreditable.pdf image.jpg"); echo 'image-0.jpg'; 
?>

  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
   <p class="centered"><a href="#"><img src="../imagenes/pdf.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php  echo $columna['evento'];?></h5>
    <ul class="nav menu">
      <li><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Invitados: <a href="#investigaciones"><?php  echo $columna['invitados'];?></a></li>
      <li><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Facilitador:  <a href="#eventos"><?php  echo $columna['facilitador'];?></a></li>
      <li><a href="#indicadores"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Mis indicadores</a></li>
       <div class="form group" align="center">
        <h6>¿Que ponderacion le colocarias?</h6>
        <br>
        <label for="primary" class="btn btn-primary btn-sm">Muy Buena <input type="checkbox" id="primary" class="badgebox"><span class="badge">&check;</span></label>
        <label for="info" class="btn btn-info btn-sm">Buena <input type="checkbox" id="info" class="badgebox"><span class="badge">&check;</span></label>
        <label for="success" class="btn btn-success btn-sm">Regular <input type="checkbox"  id="success" class="badgebox"><span class="badge">&check;</span></label>
 
  </div>
      </li>
      <li role="presentation" class="divider"></li>
      <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mi perfil</a></li>
    </ul>

  </div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 

        <article>         
        <form class="form-horizontal" action="../controlador/cont_delete_even.php" method="POST">
        <header>
        <h1 align="center">Consultar un Evento.</h1>

        </header>
                <div class="col-md-6">
                 <div class="form-group">  
                    <label class="control-label col-xs-2">Nombre:</label>  
                     <div class="col-xs-8">  
                      <input type="text" class="form-control" name ="evento" id="text" value="<?php  echo $columna['evento'];?>" disabled="true">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label class="control-label col-xs-2">Invitados:</label> 
                      <div class="col-xs-8">   
                      <input type="text" class="form-control" name = "invitados" id="text" value="<?php  echo $columna['invitados'];?>" disabled="true">
                      </div>
                  </div> 

                <div class="form-group">
                    <label class="control-label col-xs-2">Lugar:</label>
                      <div class="col-xs-8"> 
                      <input type="text" class="form-control" name = "lugar_e" id="tutor" value="<?php  echo $columna['lugar_e'];?>" disabled="true">
                      </div>
                </div>      
                <div class="form-group">
                    <label class="control-label col-xs-2">Tema:</label>
                    <div class="col-xs-8">    
                    <input type="text" class="form-control" name="tema" id="text" value="<?php  echo $columna['tema'];?>" disabled="true">
                    </div>
                </div>    
                   <div class="form-group">
                 <label class="control-label col-xs-2">Facilitador:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name= "facilitador" id="text" value="<?php  echo $columna['facilitador'];?>" disabled="true">
                    </div>
                </div>    
                  
                  <div class="form-group">
                    <label class="control-label col-xs-2">Asistencia:</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name = "tipo_ev" id="text" value="<?php  echo $columna['tipo_ev'];?>" disabled="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-2">Estatus:</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name = "estatus_e" id="text" value="<?php  echo $columna['estatus_e'];?>" disabled="true">
                    </div>
                  </div>  
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha Inicio</label>
                              <div class="col-xs-8">
                                   <input type="text" class="form-control" id="text" name="fecha_ini_e" value="<?php  echo $columna['fecha_ini_e'];?>" disabled="true"> 
                              </div>

                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha Culminacion</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="fecha_cu_eve" id="tutor" value="<?php  echo $columna['fecha_cu_eve'];?>" disabled="true">
                              </div>
                         </div>     

                  <div class="form-group">
                    <label class="control-label col-xs-2">Linea Investigacion:</label> 
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name = "linea_investigacion" id="text" value="<?php  echo $columna['linea_investigacion'];?>" disabled="true">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label class="control-label col-xs-2">Lider:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name="lider" id="lider" value="<?php  echo $columna['lider'];?>" disabled="true">
                    </div>
                  </div>  
                   <div class="form-group">
                    <label class="control-label col-xs-2">Archivo:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name="archivo_e" id="text" value="<?php  echo $columna['archivo_e'];?>" disabled="true">
                    </div>
                  </div> 
                  <div class="form-group">
                  <label class="control-label col-xs-2" for="observaciones">Descripcion</label>
                   <div class="col-xs-8"> 
                  <textarea class="form-control" rows="5" id="descripcion" name="descripcion" value="<?php  echo $columna['descripcion'];?>" disabled="true"></textarea>
                   </div>
                  </div>
                </div>
                <div class="form-group"  align="center">
                <a class="fancybox" href="../imagenes/Horario tr3 tri2.jpg"><img src="../imagenes/Horario tr3 tri2.jpg"
                class="img-rounded"></a>
                </div>
                   <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                <input type="button" class="btn btn-primary" value="Regresar" onclick="regresar()" id="submit">
                <input type="button" class="btn btn-primary" value="Modificar" onclick="mostrar(this); return false" id="submit">
                <input type="submit" class="btn btn-primary" value="Eliminar" onclick="return confirm('¿Estás seguro de eliminar?')" id="submit">
                </div>
                </div>

                <form name="tuformulario"> 
                <input type="hidden" name ="evento" value="<?php echo $columna['evento'] ?>">
                <input type="hidden" name ="tutor" value="<?php echo $columna['tutor'] ?>">
                <input type="hidden" name ="autor" value="<?php echo $columna['autor'] ?>">
                 </form>

          <div id="oculto" style="visibility:hidden">
          <form class="form-horizontal" action="../controlador/con_modify_even.php" id="oculto" enctype="multipart/form-data" method="POST" >
           <h1>Modificar Estudiante</h1>
                <div class="form-group">
                <label class="control-label col-xs-2">Nombre:</label> 
                  <div class="col-xs-8"> 
                  <input type="text" class="form-control" maxlength="30" name="evento" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['evento'];?>"> </td>
                  </div>
                </div>  
                <div class="form-group">
                  <label class="control-label col-xs-2">Invitados:</label>  
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" maxlength="30" name="invitados" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['invitados'];?>"> </td>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="control-label col-xs-2">Linea Investigacion:</label>
                    <div class="col-xs-8">
                    <input type="text" class="form-control" id="linea_investigacion" name="linea_investigacion" value="<?php  echo $columna['linea_investigacion'];?>" disabled="true"> 
                    </div>
                    </div>
                <div class="form-group">
                     <label class="control-label col-xs-2">Lider</label>
                     <div class="col-xs-8">
                     <input type="text" class="form-control" name="lider" id="tutor" value="<?php  echo $columna['lider'];?>" disabled="true">
                      </div>
                      </div>  
                  
                <div class="form-group">
                  <label class="control-label col-xs-2">Tipo de Evento</label>  
                  <div class="col-xs-8">
                    <SELECT class="form-control" name="tipo_ev" >
                    <OPTION selected><?php  echo $columna['tipo_ev'];?></OPTION>
                    <OPTION value= De Campo>De Campo </OPTION>
                    <OPTION value= Experimental>Experimental </OPTION>
                    </OPTION>
                    </SELECT>
                  </div>
                </div>
               <div class="form-group">
                 <label class="control-label col-xs-2">Facilitador</label>  
                  <div class="col-xs-8">
                   <input type="text" class="form-control" maxlength="20" name = "facilitador" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['facilitador'];?>"></td>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-2">Asistencia:</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name = "asistencia" id="text" value="<?php  echo $columna['asistencia'];?>">
                    </div>
                  </div>
               <div class="form-group">
                <label class="control-label col-xs-2">fecha de inicio</label>  
                  <div class="col-xs-8">
                    <input type="date" class="form-control" name="fecha_ini_e" placeholder="DD-MM-YYYY" value="<?php  echo $columna['fecha_ini_e'];?>" /><!-- <span class="glyphicon glyphicon-calendar"></span> -->
                  </div>
               </div>
                  <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha de culminacion</label>
                              <div class="col-xs-8">
                                   <input type="date" class="form-control" name="fecha_cu_eve" placeholder="DD-MM-YYYY" value="<?php  echo $columna['fecha_cu_eve'];?>" /><!-- <span class="glyphicon glyphicon-calendar"></span> -->
                              </div>
                          </div>
                <div class="form-group">
                  <label class="control-label col-xs-2">Lugar</label>  
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name="lugar_e" size="12" maxlength="100" required value="<?php  echo $columna['lugar_e'];?>" /></b> </td>
                    </div>
                 </div> 
                 <div class="form-group">
                    <label class="control-label col-xs-2">Tema:</label>
                    <div class="col-xs-8">    
                    <input type="text" class="form-control" name="tema" id="text" value="<?php  echo $columna['tema'];?>">
                    </div>
                <div class="form-group">
                  <label class="control-label col-xs-2">Estatus:</label>   
                    <div class="col-xs-8">
                      <SELECT required name="estatus_e" class="form-control" >
                      <OPTION selected><?php  echo $columna['estatus_e'];?></OPTION>
                      <OPTION value="En aprobacion">Aprobacion </OPTION>
                      <OPTION value="iniciando">Iniciado </OPTION>
                      <OPTION value="desarrollo">Desarrollo </OPTION>         
                      <OPTION value="en prueba">En pruebas </OPTION>
                      <OPTION value="finalizado">Finalizado </OPTION>
                      </OPTION>
                      </SELECT> 
                      </div>
                 </div>   
                <div class="form-group">
                  <label class="control-label col-xs-2">Archivo (PDF):</label> 
                    <div class="col-xs-8">
                    <input type="file" class="form-control" name = "foto" required /></td>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-2">Descripcion:</label> 
                    <div class="col-xs-8">  
                 <input type="text tarea" class="form-control" name = "descripcion" size="10" maxlength="100" required value="<?php  echo $columna['descripcion'];?>" required />
                     </div>
                 </div>    
                <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                 <input type="button" class="btn btn-primary" value="Regresar" type="button" onclick="regresar()" id="submit">
                 <input type="submit" class="btn btn-primary" value="Modificar" onclick="return confirm('¿Estás seguro de modificar?')" id="submit"> 
                </div>
                </div>     
        </div>
             
        <input type="hidden" name="evento" value="<?php echo $columna['evento']; ?>">
        <!-- <input type="hidden" name="autor" value="<?php //echo $columna['autor'] ?>"> -->
        <!-- <input type="hidden" name="tutor" value="<?php //echo $columna['tutor'] ?>"> -->
        
        </form>

        </form>
        </article>
  <script src="../js/ocultar.js"> </script>
  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/chart.min.js"></script>
  <script src="../js/chart-data.js"></script>
  <script src="../js/easypiechart.js"></script>
  <script src="../js/easypiechart-data.js"></script>
  <script src="../js/selects.js"> </script>
  <script src="../js/micalendario.js"></script>
  <script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>
</html>   