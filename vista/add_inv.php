  <?php
    session_start();
    $usuario  = $_SESSION['usuario'];
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
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz. ";
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


      <title>Registrar Investigación</title>
      </head>


      <body>
<?php 
include("../vista/header.html");
?>
          <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Agregar Investigación</h3>
          <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Datos de la investigación</h4>
                      <form class="form-horizontal style-form" action="../controlador/cont_add_inv.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                             <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name ="nombre_inv" onkeypress="return soloLetras(event);" placeholder="Nombre investigacion" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Autor</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name = "autor" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="autor" required>
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Linea de Investigacion</label>
                              <div class="col-sm-10">
                                   <SELECT class="form-control" id="linea_investigacion" name="linea_investigacion" required>

                        </SELECT>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lider</label>
                              <div class="col-sm-10">
                                  <SELECT class="form-control" name="tutor" id="tutor">
                   </SELECT>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo de Investigación</label>
                              <div class="col-sm-10">
                                  <SELECT class="form-control" name="tipo_inv" required>
                            <OPTION selected>Seleccione </OPTION>
                                <OPTION value= articulo de publicacion>articulo de publicacion </OPTION>
                                <OPTION value= articulo cientifico>articulo cientifico</OPTION>
                                <OPTION value= ponencia>ponencia</OPTION>
                                <OPTION value= cursos o coaching>curso o coaching</OPTION>
                                <OPTION value= taller>talleres</OPTION>
                                <OPTION value= investigacion experimental>investigacion experimental</OPTION>
                                <OPTION value= investigacion de campo>investigacion de campo</OPTION> 
                        </SELECT>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Otros autores</label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" name= "otro_autor" onkeypress="return soloLetras(event);" placeholder="otros autores" required>
                              </div>
                          </div>
                          <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha Inicio</label>
                              <div class="col-sm-10">
                                   <input type="date" class="form-control" name="fecha_ini" placeholder="DD-MM-YYYY" />
                              </div>
                          </div>
                           <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha de culminacion</label>
                              <div class="col-sm-10">
                                   <input type="date" class="form-control" name="fecha_c" placeholder="DD-MM-YYYY" /><!-- <span class="glyphicon glyphicon-calendar"></span> -->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lugar</label>
                              <div class="col-sm-10">
                                   <input type="text" class="form-control" name = "lugar_inv" size="10" maxlength="100" placeholder="Lugar" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estatus</label>
                              <div class="col-sm-10">
                                   <SELECT class="form-control" name="status" required>
                      <OPTION selected>Seleccione </OPTION>
                      <OPTION value="desarrollo">Desarrollo </OPTION>
                      <OPTION value="finalizado">Finalizado</OPTION> 
                    </SELECT>
                              </div>
                          </div>                 
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
            <!-- INLINE FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Archivo</h4>
                       <div class="form-group">
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Archivo (PDF):</label>
                               <input type="file" class="form-control btn btn-theme" name = "foto" required />
                        <input type="text tarea" class="form-control" name = "precio" size="10" maxlength="100" placeholder="Descripcion..." required />
                          </div>
                           <div class="form-group">
  
                          </div>
                          <div class="form-group" align="center">
            <button type="submit"  class="btn btn-primary">Guardar</button>
             <input type="button"  class="btn btn-primary" value="Regresar" onclick="regresar()" id="submit">
        </div>

         </div>
                      </div>
  </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
            
            
            </div><!-- /row -->
            
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

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
<footer id="main-footer">
    <p>&copy; 2016 <a href="http://www.cuc.edu.ve/">Colegio Universitario de Caracas, Altamira, Av. La Floresta, sede sucre</a></p>
  </footer>
</html>	
	
	


