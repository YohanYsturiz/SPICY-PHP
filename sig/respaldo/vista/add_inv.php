<!DOCTYPE>
<html>
  <?php
    session_start();
    $usuario  = $_SESSION['usuario'];
    $clave  = $_SESSION['clave'];
  ?>
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="../js/bootstrap-dropdown.js"</script>
      <script src="../js/selects.js"> </script>
      <script src="../js/jquery.js"></script>
      
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
    <article>
      <section id="main-content">
      <header>
        <h3 align="center">Agregar Investigación</h3>
      </header>
      <form class="form-horizontal" action="../controlador/cont_add_inv.php" method="POST">	
             <div class="form-group">
                <label class="control-label col-xs-2">Nombre:</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="nombre_inv" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="Nombre investigacion" required />
                </div>
              </div>  

              <div class="form-group">
                <label class="control-label col-xs-2">Autor:</label> 
                  <div class="col-xs-8">   
                  <input type="text" class="form-control" name = "autor" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="autor" required></td>  
                  </div>
              </div>   

              <div class="form-group">
                <label class="control-label col-xs-2">Lider:</label>
                  <div class="col-xs-8"> 
                  <input type="text" class="form-control" name="tutor" size="20" maxlength="50" onkeypress="return soloLetras(event);" placeholder="tutor" required></td>
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-2">Tipo de Investigación:</label>
                   <div class="col-xs-8">    
                  <SELECT class="form-control" name="tipo_inv" required>
                            <OPTION selected>Seleccione </OPTION>
                                <OPTION value= DeCampo>De campo </OPTION>
                                <OPTION value= Experimental>Experimental 
                            </OPTION>
                        </SELECT>
                    </div>
              </div>    
                <div class="form-group">
                 <label class="control-label col-xs-2">Otros autores:</label>
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name= "otro_autor" onkeypress="return soloLetras(event);" placeholder="otros autores" required></td>
                  </div>
                </div>  
                <div class="form-group">
                <label class="control-label col-xs-2">Fecha de culminación</label> 
                    <div class="col-xs-8"> 
                    <input type="text" class="form-control" name ="fecha_c" onkeypress="return justNumbers(event);" size="10" maxlength="10" placeholder="00/00/00" required></td>
                  </div>
                </div>     
                <div class="form-group">
                  <label class="control-label col-xs-2">Lugar:</label> 
                    <div class="col-xs-8">
                    <input type="text" class="form-control" name = "lugar_inv" size="10" maxlength="100" placeholder="Lugar" required /></td>
                    </div>
                </div>    
                <div class="form-group">
                <label class="control-label col-xs-2">Estatus:</label>
                    <div class="col-xs-8">        
                    <SELECT class="form-control" name="status" required>
                      <OPTION selected>Seleccione </OPTION>
                      <OPTION value="En aprobacion">Solicitud </OPTION>
                      <OPTION value="iniciando">Iniciado  </OPTION>    
                      <!--<OPTION value="desarrollo">Desarrollo </OPTION>         
                      <OPTION value="en prueba">En pruebas  </OPTION>
                      <OPTION value="finalizado">Finalizado-->
                      </OPTION>
                    </SELECT>
                    </div>
                </div>
          <div>            
           <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <button type="submit"  class="btn btn-primary">Guardar</button>
             <input type="button"  class="btn btn-primary" value="Regresar" onclick="regresar()" id="submit">
        </div>
         </div>
        
      </form>
      </section>
      </article>	
</body>
<footer id="main-footer">
    <p>&copy; 2016 <a href="http://www.cuc.edu.ve/">Colegio Universitario de Caracas, Altamira, Av. La Floresta, sede sucre</a></p>
  </footer>
</html>	
	
	


