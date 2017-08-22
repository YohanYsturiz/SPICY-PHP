<?php
session_start();
$usuario = $_SESSION['usuario'];
$clave  = $_SESSION['clave'];
$cod_usuario = $_SESSION['cod_usuario'];
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
      <title>Buscar investigacion</title>
      
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
                  <h5 class="centered"><?php  echo $columna['nombre_inv'];?></h5>
    <ul class="nav menu">
      <li><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Autor: <a href="#investigaciones"><?php  echo $columna['autor'];?></a></li>
      <li><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Estatus:  <a href="#eventos"><?php  echo $columna['status'];?></a></li>
      <li><a href="#indicadores"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Mis indicadores</a></li>
        <?php  
        if (($cod_usuario == 1) && ($columna['status']=='finalizado')){
       ?>
       <div class="form group" align="center">
        <h6>¿Cumplio los requerimientos?</h6>
        <br>
       <form class="form-horizontal" action="../controlador/cont_ponderacion.php" method="POST"> 
        <label for="primary" class="btn btn-primary btn-sm"> Aprobar <input type="checkbox" id="primary" class="badgebox" value="aprobado" name="aprobado"><span class="badge">&check;</span></label>
        <input type="hidden" name="cod_inv" value="<?php echo $columna['cod_inv'] ?>">
        <input type="hidden" name="fk_cod_usuario" value="<?php echo $columna['fk_cod_usuario'] ?>">
        <button type="submit" class="btn btn-primary">enviar</button>
        </form>
  </div>
  <?php
 }
?>
      </li>
      <li role="presentation" class="divider"></li>
      <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Mi perfil</a></li>
    </ul>

  </div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 

        <article>         
        <form class="form-horizontal" action="../controlador/cont_delete_inv.php" method="POST">
        <header>
        <h1 align="center">Consultar una Investigación.</h1>

        </header>
                <div class="col-md-6">
                 <div class="form-group">  
                    <label class="control-label col-xs-2">Nombre:</label>  
                     <div class="col-xs-8">  
                      <input type="text" class="form-control" name ="nombre_inv" id="text" value="<?php  echo $columna['nombre_inv'];?>" disabled="true">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label class="control-label col-xs-2">Autor:</label> 
                      <div class="col-xs-8">   
                      <input type="text" class="form-control" name = "autor" id="text" value="<?php  echo $columna['autor'];?>" disabled="true">
                      </div>
                  </div> 

                <div class="form-group">
                    <label class="control-label col-xs-2">tutor:</label>
                      <div class="col-xs-8"> 
                      <input type="text" class="form-control" name = "tutor" id="tutor" value="<?php  echo $columna['tutor'];?>" disabled="true">
                      </div>
                </div>      
                <div class="form-group">
                    <label class="control-label col-xs-2">Tipo de Investigacion:</label>
                    <div class="col-xs-8">    
                    <input type="text" class="form-control" name="tipo_inv" id="text" value="<?php  echo $columna['tipo_inv'];?>" disabled="true">
                    </div>
                </div>    
                   <div class="form-group">
                 <label class="control-label col-xs-2">Otros autores:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name= "edad" id="text" value="<?php  echo $columna['otro_autor'];?>" disabled="true">
                    </div>
                </div>    
                  
                  <div class="form-group">
                    <label class="control-label col-xs-2">fecha de culminación</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name = "fecha_c" id="text" value="<?php  echo $columna['fecha_c'];?>" disabled="true">
                    </div>
                  </div>  
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Linea de Investigacion</label>
                              <div class="col-xs-8">
                                   <input type="text" class="form-control" id="text" name="linea_investigacion" value="<?php  echo $columna['linea_investigacion'];?>" disabled="true"> 
                              </div>

                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lider</label>
                              <div class="col-xs-8">
                                  <input type="text" class="form-control" name="tutor" id="tutor" value="<?php  echo $columna['tutor'];?>" disabled="true">
                              </div>
                         </div>     

                  <div class="form-group">
                    <label class="control-label col-xs-2">lugar:</label> 
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name = "lugar_inv" id="text" value="<?php  echo $columna['lugar_inv'];?>" disabled="true">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label class="control-label col-xs-2">Estatus:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name="status" id="text" value="<?php  echo $columna['status'];?>" disabled="true">
                    </div>
                  </div>  
                   <div class="form-group">
                    <label class="control-label col-xs-2">Archivo:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name="archivo" id="text" value="<?php  echo $columna['archivo'];?>" disabled="true">
                    </div>
                  </div> 
                  <div class="form-group">
                  <label class="control-label col-xs-2" for="observaciones">Descripcion</label>
                   <div class="col-xs-8"> 
                  <textarea class="form-control" rows="5" id="Descripcion" name="descripcion" value="<?php  echo $columna['precio'];?>" disabled="true"></textarea>
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
                <input type="hidden" name ="nombreN" value="<?php echo $columna['nombre_inv'] ?>">
                <input type="hidden" name ="tutor" value="<?php echo $columna['tutor'] ?>">
                <input type="hidden" name ="autor" value="<?php echo $columna['autor'] ?>">
                 </form>

          <div id="oculto" style="visibility:hidden">
          <form class="form-horizontal" action="../controlador/con_modify_inv.php" id="oculto" enctype="multipart/form-data" method="POST" >
           <h1>Modificar Estudiante</h1>
                <div class="form-group">
                <label class="control-label col-xs-2">Nombre de la Investigacion:</label> 
                  <div class="col-xs-8"> 
                  <input type="text" class="form-control" maxlength="30" name="nombre_inv" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['nombre_inv'];?>"> </td>
                  </div>
                </div>  
                <div class="form-group">
                  <label class="control-label col-xs-2">autor</label>  
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" maxlength="30" name="autor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['autor'];?>"></td>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="control-label col-xs-2">Linea de Investigacion</label>
                    <div class="col-xs-8">
                    <input type="text" class="form-control" id="linea_investigacion" name="linea_investigacion" value="<?php  echo $columna['linea_investigacion'];?>" disabled="true"> 
                    </div>
                    </div>
                <div class="form-group">
                     <label class="control-label col-xs-2">Lider</label>
                     <div class="col-xs-8">
                     <input type="text" class="form-control" name="tutor" id="tutor" value="<?php  echo $columna['tutor'];?>" disabled="true">
                      </div>
                      </div>  
                  
                <div class="form-group">
                  <label class="control-label col-xs-2">Tipo de Investigacion</label>  
                  <div class="col-xs-8">
                    <SELECT class="form-control" name="tipo_inv" >
                    <OPTION selected> <?php  echo $columna['tipo_inv'];?></OPTION>
                    <OPTION value= articulo de publicacion>articulo de publicacion </OPTION>
                    <OPTION value= articulo cientifico>articulo cientifico</OPTION>
                    <OPTION value= ponencia>ponencia</OPTION>
                    <OPTION value= cursos o coaching>curso o coaching</OPTION>
                    <OPTION value= taller>talleres</OPTION>
                    <OPTION value= investigacion experimental>investigacion experimental</OPTION>
                    <OPTION value= investigacion de campo>investigacion de campo</OPTION>
                    </OPTION>
                    </SELECT>
                  </div>
                </div>
               <div class="form-group">
                 <label class="control-label col-xs-2">Otros autores</label>  
                  <div class="col-xs-8">
                   <input type="text" class="form-control" maxlength="20" name = "otro_autor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['otro_autor'];?>"></td>
                  </div>
                </div>
               <div class="form-group">
                <label class="control-label col-xs-2">fecha de inicio</label>  
                  <div class="col-xs-8">
                    <input type="date" class="form-control" name="fecha_ini" placeholder="DD-MM-YYYY" value="<?php  echo $columna['fecha_ini'];?>" /><!-- <span class="glyphicon glyphicon-calendar"></span> -->
                  </div>
               </div>
                  <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha de culminacion</label>
                              <div class="col-xs-8">
                                   <input type="date" class="form-control" name="fecha_c" placeholder="DD-MM-YYYY" value="<?php  echo $columna['fecha_c'];?>" /><!-- <span class="glyphicon glyphicon-calendar"></span> -->
                              </div>
                          </div>
                <div class="form-group">
                  <label class="control-label col-xs-2">Lugar</label>  
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name="lugar_inv" size="12" maxlength="100" required value="<?php  echo $columna['lugar_inv'];?>" /></b> </td>
                    </div>
                 </div> 
                <div class="form-group">
                  <label class="control-label col-xs-2">status</label>   
                    <div class="col-xs-8">
                      <SELECT required name="status" class="form-control" >
                      <OPTION selected><?php  echo $columna['status'];?></OPTION>        
                      <OPTION value="desarrollo">Desarrollo</OPTION>
                      <OPTION value="finalizado">Finalizado</OPTION>
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
                 <input type="text tarea" class="form-control" name = "precio" size="10" maxlength="100" required value="<?php  echo $columna['precio'];?>" required />
                     </div>
                 </div>    
                <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                 <input type="button" class="btn btn-primary" value="Regresar" type="button" onclick="regresar()" id="submit">
                 <input type="submit" class="btn btn-primary" value="Modificar" onclick="return confirm('¿Estás seguro de modificar?')" id="submit"> 
                </div>
                </div>     
        </div>
             
        <input type="hidden" name="nombre_inv" value="<?php echo $columna['nombre_inv'] ?>">
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