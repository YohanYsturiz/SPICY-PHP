<!DOCTYPE html>
<html lang="es">
<head>

<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<title>Registrar Usuario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<!--funcion para enviar a end_session-->
<script type='text/javascript'>
	function regresar()
	{
   	 	window.location="vis_login.php";
	}
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
</script>
</head>
<body>
<?php 
include("../vista/header.html");
?>
<section id="main-content">
<form class="form-horizontal" action="../controlador/cont_add_user.php" method="POST">
		<div class="form-group">
                <h3 align="center">Registro de Usuario</h3>
                  <div class="col-xs-8">  
                </div>
              </div> 
		<div class="form-group">
                <label class="control-label col-xs-2">Nombre:</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="nombres" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="Nombre" required />
                </div>
              </div>  

        <div class="form-group">
                <label class="control-label col-xs-2">Usuario</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="usuarioN" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="Usuario" required />
                </div>
              </div> 
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
         <div class="form-group">
                <label class="control-label col-xs-2">Apellido</label> 
                  <div class="col-xs-8">  
                  <input type="text" class="form-control" name ="apellidos" onkeypress="return soloLetras(event);" size="20" maxlength="30" placeholder="Apellido" required />
                </div>
              </div> 
<br>
<table align="center">
  <tr>
  		<td>
  				<input type="submit" value="Guardar" id="submit">
  				<input type="button" name="accion" value="Regresar" type="button" onclick="regresar()" id="submit">
  		</td>
  </tr>
</table>
</form>
</section>
</body>
</html>	
	
// <?php 	

// 	}
// else 
// 	{
// ?>
// <script>
// 		alert('Usuario no Autenticado');
// </script>		
// <?php 		
// 	}
// ?>