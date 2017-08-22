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
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/font-iconos_administrador.min.css">
  <link href="../css/form.css" rel="stylesheet">
  <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <script src="../js/lumino.glyphs.js"> </script>
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
<section id="main-content-panel">
 <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-6 text-right">
                                <!-- <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> -->
                                    <div class="huge">Objetivos</div>
                                    <div><a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar Objetivos</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Mas detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="huge">Usuarios</div>
                                    <div><a class="btn btn-success" data-toggle="modal" data-target="#myModalusuario">Agregar usuarios</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Mas detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="huge">Fechas</div>
                                    <div><a class="btn btn-warning" data-toggle="modal" data-target="#myModalfechas">Agregar Metas</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Mas detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="huge">Metas</div>
                                    <div><a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Modificar Fechas</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Mas detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Ventana modal -->
        <form class="form-horizontal" action="../controlador/cont_add_objetivos.php" method="POST">        
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
              <!-- Contenido de la ventana-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Nuevo Objetivo </h4>
              </div>
            <div class="modal-body">
              <p>selecciona</p>
            <div class="form-group">  
              <label class="control-label col-xs-2">Cantidad:</label>  
              <div class="col-xs-5">  
                <SELECT class="form-control" name="cantidad" required>
                      <OPTION selected>seleccione </OPTION>
                      <OPTION value="1">1 </OPTION>
                      <OPTION value="2">2</OPTION>
                      <OPTION value="3">3</OPTION>
                      <OPTION value="4">4</OPTION>
                      <OPTION value="5">5</OPTION>
                      <OPTION value="6">6</OPTION> 
                      </OPTION>
                    </SELECT>
              </div>
          </div>
          <div class="form-group">  
            <label class="control-label col-xs-2">Tipo:</label>  
            <div class="col-xs-5">  
            <SELECT class="form-control" name="tipo_obj" required>
                      <OPTION selected>seleccione </OPTION>
                      <OPTION value="articulo para publicacion">artículo de publicaión</OPTION>
                      <OPTION value="articulo cientifico">artículo cientifico</OPTION>
                      <OPTION value="Ponencia">ponencias</OPTION>
                      <OPTION value="cursos">cursos</OPTION>
                      <OPTION value="talleres">talleres</OPTION>
                      <OPTION value="experimental">investigación experimental</OPTION>
                      <OPTION value="de campo">investigación de campo</OPTION> 
                      </OPTION>
                    </SELECT>
            </div>
          </div>
           <div class="form-group">
                    <label class="control-label col-xs-2">Fecha Culminación:</label>
                    <div class="col-xs-5">    
                    <input type="text" class="form-control" name="fecha_culminacion" id="text">
                    </div>
                </div>    
                   <div class="form-group">
                 <label class="control-label col-xs-2">Ponderacion:</label>
                    <div class="col-xs-5"> 
                    <input type="text" class="form-control" name= "ponderacion_obj" id="text">
                    </div>
                 </div>     
    </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
    
                      </table>   
                     </div>
              
            </div>
          </div>
         
        </div>
  </div>
  </form>         
  <form class="form-horizontal" action="../controlador/cont_add_user.php" method="POST">        
        <div class="modal fade" id="myModalusuario" role="dialog">
          <div class="modal-dialog">
              <!-- Contenido de la ventana-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Nuevo Usuario </h4>
              </div>
            <div class="modal-body">
              <p>Agregar usuario</p>
          <div class="form-group">
                <label class="control-label col-xs-2">Cédula</label> 
                   <div class="col-xs-8"> 
                   <input type="text" class="form-control" name ="cedulaN" onkeypress="return justNumbers(event);" size="10" maxlength="10" placeholder="Cedula" required></td>
                  </div>
                </div> 
          <div class="form-group">
                <label class="control-label col-xs-2">Clave</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="claveN" size="20" maxlength="30" placeholder="Clave" required />
                </div>
              </div>  
    </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Agregar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  </form>
  <?php
include_once('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();
$query = "select semestre_uno_ini, semestre_uno_c, semestre_dos_ini, semestre_dos_c from sig_cuc.calendario";
$fechas_semestre = pg_query($pgconn,$query);
    while($fechas_semestre_uno= pg_fetch_array($fechas_semestre))
               {
            
              
                        ?>
  <form class="form-horizontal" action="../controlador/cont_fechas_semestre.php" method="POST">        
        <div class="modal fade" id="myModalfechas" role="dialog">
          <div class="modal-dialog">
              <!-- Contenido de la ventana-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Modificar Fechas de evaluación </h4>
              </div>
            <div class="modal-body">
              <p>Revision Primer Semestre</p>
          <div class="form-group">
                <label class="control-label col-xs-2">Desde:</label> 
                   <div class="col-xs-8"> 
                   <input type="text" class="form-control" name ="semestre_uno_ini" size="10" maxlength="10" value="<?php echo $fechas_semestre_uno['semestre_uno_ini'];?>" required></td>
                  </div>
                </div> 
          <div class="form-group">
                <label class="control-label col-xs-2">Hasta:</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="semestre_uno_c" size="20" maxlength="30" value="<?php echo $fechas_semestre_uno['semestre_uno_c'];?>"  required />
                </div>
              </div> 
               <hr>
            <p>Revision Segundo Semestre</p> 
            <div class="form-group">
                <label class="control-label col-xs-2">Desde:</label> 
                   <div class="col-xs-8"> 
                   <input type="text" class="form-control" name ="semestre_dos_ini" size="10" maxlength="10" value="<?php echo $fechas_semestre_uno['semestre_dos_ini'];?>"></td>
                  </div>
                </div> 
          <div class="form-group">
                <label class="control-label col-xs-2">Hasta:</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="semestre_dos_c" size="20" maxlength="30" value="<?php echo $fechas_semestre_uno['semestre_dos_c'];?>">
                </div>
              </div>   
                <?php 
                }
              ?>
    </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
    
                      </table>   
                     </div>
              
            </div>
          </div>
         
        </div>
  </div>
  </form>         
        <input type="hidden" name="cod_usuario" value="<?php echo $columna['cod_usuario'] ?>">
         <input type="hidden" name="cod_objetivo" value="<?php echo $columna['cod_objetivo'] ?>">
        <!-- <input type="hidden" name="autor" value="<?php //echo $columna['autor'] ?>"> -->
        <!-- <input type="hidden" name="tutor" value="<?php //echo $columna['tutor'] ?>"> --> 
            </div><!-- /row --> 
            </div><!-- /row -->           
    
      <div class="row mt">
    <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i><a name="investigaciones" > Objetivos del Departamento</a></h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Cantidad</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Producto</th>
                                  <th><i class="fa fa-bookmark"></i>Ponderacion</th>
                                  <th><i class=" fa fa-edit"></i> Fecha culminación</th>
                                    
                              </tr>
                              </thead>
                              <tbody>       
                                     <?php
                        include_once('../modelo/mode_conection.php');
                        $conexion = new Connex();
                        $pgconn=$conexion->conectar();
                        $query = "select * from sig_cuc.objetivo where fk_cod_usuario_objetivo='1'";
                        $objetivos = pg_query($pgconn,$query);
                      while($rowobjetivos = pg_fetch_array($objetivos))
                      {
                        echo "<tr>";
                        echo "<td> " . 
                        $rowobjetivos["cantidad"] . "</td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowobjetivos["tipo_obj"] . "</a></td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowobjetivos["fecha_culminacion"] . "</a></td>"; 
                        echo "<td class='hidden-phone'>" .
                        $rowobjetivos["ponderacion_obj"] . "</a></td>"; 
                        echo "</tr>"; 
                      }
                        ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  </div>

                  <div class="row mt">
                 <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i><a name="investigaciones" >Lista de usuarios</a></h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Cargo</th>
                                  <th><i class="fa fa-bookmark"></i>Nivel Academico</th>
                                  <th><i class=" fa fa-edit"></i> Correo</th>
                                    
                              </tr>
                              </thead>
                              <tbody>       
                                     <?php
                        $query = "select * from sig_cuc.usuario";
                        $usuario = pg_query($pgconn,$query);
                      while($rowusuario = pg_fetch_array($usuario))
                      {
                        echo "<tr>";
                        echo "<td><a href='../vista/perfil_usu_get.php?cod_usuario=".$rowusuario['cod_usuario'] ."'>" . 
                        $rowusuario["nombres"] . "</td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowusuario["cargo"] . "</a></td>";  
                        echo "<td class='hidden-phone'>" . 
                        $rowusuario["nivel_academico"] . "</a></td>"; 
                        echo "<td class='hidden-phone'>" .
                        $rowusuario["correo"] . "</a></td>"; 
                        echo "</tr>"; 
                      }
                        ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  </div>
                  </section>
  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/chart.min.js"></script>
  <script src="../js/chart-data.js"></script>
  <script src="../js/easypiechart.js"></script>
  <script src="../js/easypiechart-data.js"></script>
  <script src="../js/selects.js"> </script>
  <script src="../js/micalendario.js"></script>
  <script src="../js/ocultar.js"> </script>
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
    <p align="center">&copy; 2016 <a href="http://www.cuc.edu.ve/">Colegio Universitario de Caracas, Altamira, Av. La Floresta, sede sucre</a></p>
  </footer>
</html>	
	
	


