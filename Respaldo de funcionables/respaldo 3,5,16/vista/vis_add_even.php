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


      <title>Agregar Evento</title>
      </head>


      <body>
<?php 
include("../vista/header.html");
?>
          </div>          
      </header>

    <article>
      <section id="main-content">
      <header>
        <h3 align="center">Agregar Evento</h3>
      </header>

      <form class="form-horizontal" action="../controlador/cont_add_even.php" method="POST">

          <div class="form-group">
            <label class="control-label col-xs-2">Nombre:</label> 
              <div class="col-xs-8"> 
                <input type="text" class="form-control" name ="evento" onkeypress="return soloLetras(event);" size="20" maxlength="50" placeholder="Nombre investigacion" required></td>
              </div>
          </div>  
                  <div class="form-group">     
                 <label class="control-label col-xs-2">Tipo:</label>
                    <div class="col-xs-8">       
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
                 <label class="control-label col-xs-2">Invitados:</label> 
                    <div class="col-xs-8"> 
                      <input type="text" class="form-control" name="invitados" size="20" maxlength="50" onkeypress="return soloLetras(event);" placeholder="tutor" required></td>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label class="control-label col-xs-2">Fecha:</label>
                      <div class="col-xs-8">
                       <input type="text" class="form-control" name="fecha_e" size="20" maxlength="50" onkeypress="return justNumbers(event);" placeholder="tutor" required></td></td>
                      </div>
                  </div>   
                <div class="form-group">
                <label class="control-label col-xs-2">Lugar:</label> 
                    <div class="col-xs-8">
                      <input type="text" class="form-control" name= "lugar_e" onkeypress="return soloLetras(event);" placeholder="otros autores" required></td>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="control-label col-xs-2">Tema:</label> 
                    <div class="col-xs-8">
                       <input type="text" class="form-control" name ="tema" onkeypress="return soloLetras(event);" size="10" maxlength="10" placeholder="00/00/00" required></td>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="control-label col-xs-2">Facilitador:</label> 
                      <div class="col-xs-8">
                        <input type="text" class="form-control" name = "facilitador" size="10" maxlength="100" placeholder="Facilitador" required /></td>
                      </div>
                 </div>     
                <div class="form-group">
                    <label class="control-label col-xs-2">Asistencia:</label> 
                        <div class="col-xs-8">
                        <input type="text" class="form-control" name = "asistencia" size="10" maxlength="100" placeholder="asistencia" required /></td>
                        </div>
                </div>        
          
                      <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <button type="submit"  class="btn btn-primary">Guardar</button>
             <input type="button"  class="btn btn-primary" value="Regresar" onclick="regresar()" id="submit">
        </div>
         </div>     
      </form>

      </section>	
      </section>
</body>
</html>	
	
	


