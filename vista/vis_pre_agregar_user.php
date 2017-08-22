<HTML>
<HEAD>

<TITLE>Buscar Estudiante</TITLE>

<style type="text/css">
<!--
.Estilo1 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 18px;
}
.Estilo2 {
  color: blue;
  font-size: 1.8em;
}
-->
</style>
<link href="../../stylessesion.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../../menuvertical.css" rel="stylesheet" type="text/css" media="screen" />
<link rel='stylesheet' href='../../registro.css' />
<link rel='stylesheet' href='../../contormenu.css' />
<link href="../../loginedit.css" rel="stylesheet" type="text/css" media="screen"  />

<script type='text/javascript'>
function regresar()
{
    window.location="../vista/vis_menu_user.php";
}
 function justNumbers(e)
      {
          var keynum = window.event ? window.event.keyCode : e.which;
          if ((keynum == 8) || (keynum == 46))
          return true;
           
          return /\d/.test(String.fromCharCode(keynum));
      }
</script>
</HEAD> 

<BODY>
<div id="wrapper">

  <div id="header">

    <div id="logo">

      <h1><a href="#">cuc</a></h1>      

    </div>

</div>

  <!-- end #header -->

  <div id="menu">


  </div>

  <!-- end #menu -->


      <div class="post">

        <h2 class="title"><a href="#">Buscar usuario</a></h2>

        <p class="meta"><span class="posted">
        
 </span></p>

  </div>
</div>
             </div>
             </div>
             </div>
             </div>
             
      
          
</p>
          </p>

<FORM METHOD="POST" ACTION="../controlador/cont_pre_login.php">

<TABLE  width="50%" height="34%" align="center" bordercolor="white" border="10px"  class="contacto" >
<tr>
  <th><h2 class="title">Ingrese la Cedula <p></h2></th>
  </tr>
  
<tr>
<th width="48%" align="center"><INPUT TYPE="text" size="15" name="cedula"   placeholder="Ingrese un Numero de Cedula" onkeypress="return justNumbers(event);"onkeypress="return justNumbers(event);" /></th>
<th width="48%" align="center"><INPUT TYPE="text" size="15" name="clave"   placeholder="Ingrese su clave" /></th>

<table align="center">
  <tr>
      <td>
        <p></p>
        <p></p>
        <p></p>
          <input type="submit" value="Buscar" id="submit">
          <input type="button" name="accion" value="Regresar" type="button" onclick="regresar()" id="submit">

        
      </td>
  </tr>
</table>
</table>

</FORM>

</BODY>
</HTML>
