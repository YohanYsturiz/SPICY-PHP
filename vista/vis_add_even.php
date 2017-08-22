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


      <title>Agregar Evento</title>
      </head>


      <body background="#D8D6D6">

<?php 
include("../vista/header.html");
?>
          </div>          
      </header>
   <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Agregar Evento</h3>
          <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Datos del Evento</h4>

      <form class="form-horizontal style-form" action="../controlador/cont_add_even.php" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" name ="evento" onkeypress="return soloLetras(event);" placeholder="Nombre del evento" required />
               </div>
          </div>
                  <div class="form-group">     
                 <label class="col-sm-2 col-sm-2 control-label">Tipo:</label>
                     <div class="col-sm-10">      
                    <SELECT class="form-control" name="tipo_ev" required>
                    <OPTION selected>Seleccione </OPTION>
                    <OPTION value="Taller">Taller </OPTION>
                    <OPTION value="Seminario">Seminario </OPTION>
                    <OPTION value="Foro">Foro </OPTION>
                    </OPTION>
                    </SELECT>  </td>  
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
                                  <SELECT class="form-control" name="lider" id="tutor">
                   </SELECT>
                              </div>
                              </div>
                  <div class="form-group">
                 <label class="col-sm-2 col-sm-2 control-label">Invitados:</label> 
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" name="invitados" size="20" maxlength="50" onkeypress="return soloLetras(event);" placeholder="tutor" required>
                    </div>
                  </div>  
                   <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Desde el Dia</label>
                              <div class="col-sm-10">
                                   <input type="date" class="form-control" name="fecha_ini_e" placeholder="DD-MM-YYYY" />
                              </div>
                          </div>
                     <div class="form-group" id="dpStart" data-date-format="DD-MM-YYYY">
                              <label class="col-sm-2 col-sm-2 control-label">Hasta el Dia</label>
                              <div class="col-sm-10">
                                   <input type="date" class="form-control" name="fecha_cu_eve" placeholder="DD-MM-YYYY" />
                              </div>
                          </div>         
                <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Lugar:</label> 
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name= "lugar_e" onkeypress="return soloLetras(event);" placeholder="otros autores" required></td>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tema:</label> 
                    <div class="col-sm-10">
                       <input type="text" class="form-control" name ="tema" onkeypress="return soloLetras(event);" size="10" maxlength="10" placeholder="00/00/00" required></td>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Facilitador:</label> 
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name = "facilitador" size="10" maxlength="100" placeholder="Facilitador" required /></td>
                      </div>
                 </div>     
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Asistencia:</label> 
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name = "asistencia" size="10" maxlength="100" placeholder="asistencia" required /></td>
                        </div>
                </div> 
                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estatus</label>
                              <div class="col-sm-10">
                                  <SELECT class="form-control" name="estatus_e" required>
                            <OPTION selected>Seleccione </OPTION>
                                <OPTION value= solicitud>Solicitud 
                                <OPTION value= iniciado>Iniciado 
                                <OPTION value= desarrollo>En Desarrollo 
                                <OPTION value= finalizado>Por Evaluar 
                                </OPTION> 
                        </SELECT>
                              </div>
                 </section>	      
             <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Archivo</h4>
                       <div class="form-group">
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Archivo (PDF):</label>
                               <input type="file" class="form-control btn btn-theme" name = "foto" required />
                        <input type="text tarea" class="form-control" name = "descripcion" size="10" maxlength="100" placeholder="Descripcion..." required />
                          </div>
                      </div>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->

           <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
        <div class="form-group" align="center">
            <button type="submit"  class="btn btn-primary">Guardar</button>
             <input type="button"  class="btn btn-primary" value="Regresar" onclick="regresar()" id="submit">
        </div>

         </div>
                      </div>    
                </div>      
                </div> 
      </form>

      </section>
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
	
	


