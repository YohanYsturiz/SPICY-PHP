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
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="../css/form_all.css"> -->
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
        <form class="form-horizontal" action="../controlador/cont_delete_inv.php" method="POST">
        <header>
        <h1 align="center">Consultar una Investigación.</h1>
        </header>
                 <div class="form-group">  
                    <label class="control-label col-xs-2">Nombre de la Investigacion:</label>  
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
                      <input type="text" class="form-control" name = "tutor" id="text" value="<?php  echo $columna['tutor'];?>" disabled="true">
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

                  <div class="form-group">
                    <label class="control-label col-xs-2">lugar:</label> 
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name = "lugar_inv" id="text" value="<?php  echo $columna['lugar_inv'];?>" disabled="true">
                    </div>
                  </div>  

                  <div class="form-group">
                    <label class="control-label col-xs-2">Status:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name="status" id="text" value="<?php  echo $columna['status'];?>" disabled="true">
                    </div>
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
          <form class="form-horizontal" action="../controlador/con_modify_inv.php" id="oculto" method="post">
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
                  <label class="control-label col-xs-2">tutor</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" maxlength="30" name="tutor" onkeypress="return soloLetras(event);" required value="<?php  echo $columna['tutor'];?>"> </td>
                    </div>
                 </div>   
                <div class="form-group">
                  <label class="control-label col-xs-2">Tipo de Investigacion</label>  
                  <div class="col-xs-8">
                    <SELECT class="form-control" name="tipo_inv" >
                    <OPTION selected>---<?php  echo $columna['tipo_inv'];?>--- </OPTION>
                    <OPTION value= DeCampo>De Campo </OPTION>
                    <OPTION value= Experimental>Experimental </OPTION>
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
                  <input type="text" class="form-control" name = "fecha_c" maxlength="20" onkeypress="return justNumbers(event);" required value="<?php  echo $columna['fecha_c'];?>"></td>
                  </div>
               </div>

                <div class="form-group">
                  <label class="control-label col-xs-2">Lugar</label>  
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name="lugar_inv" size="12" maxlength="100" required value="<?php  echo $columna['lugar_inv'];?>"></b> </td>
                    </div>
                 </div> 
                <div class="form-group">
                  <label class="control-label col-xs-2">status</label>   
                    <div class="col-xs-8">
                      <SELECT required name="status" class="form-control" >
                      <OPTION selected>---<?php  echo $columna['status'];?>--- </OPTION>
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
        </section>

</body>
</html>		