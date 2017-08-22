<!DOCTYPE html >
<html lang="en">
	<head>
	<meta charset="UFT-8">
	<title>Boostrap</title>
	<meta name="viewport" content="widt=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<h1>Este es un header</h1>
		<button class="btn btn-primary">Boton boosttrap</button>
		<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Email:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Confirmar Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" placeholder="Telefono">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">F. Nacimiento:</label>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Dia</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Mes</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Año</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Dirección:</label>
        <div class="col-xs-9">
            <textarea rows="3" class="form-control" placeholder="Dirección"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Genero:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="male"> Maculino
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="female"> Femenino
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="news"> Enviar noticias.
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>
</form>


		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

<?
//tomo el nombre del mes que hay que imprimir
$nombre_mes = dame_nombre_mes($mes);

//construyo la tabla general
echo '<table class="tablacalendario" cellspacing="3" cellpadding="2" border="0">';
echo '<tr><td colspan="7" class="tit">';
//tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
echo '<table width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
//calculo el mes y ano del mes anterior
$mes_anterior = $mes - 1;
$ano_anterior = $ano;
if ($mes_anterior==0){
   $ano_anterior--;
   $mes_anterior=12;
}
echo '<a href="index.php?nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><span>-</span></a></td>';
echo '<td class="titmesano">' . $nombre_mes . " " . $ano . '</td>';
echo '<td class="mesanterior">';
//calculo el mes y ano del mes siguiente
$mes_siguiente = $mes + 1;
$ano_siguiente = $ano;
if ($mes_siguiente==13){
   $ano_siguiente++;
   $mes_siguiente=1;
}
echo '<a href="index.php?nuevo_mes=' . $mes_siguiente . '&nuevo_ano=' . $ano_siguiente . '"><span>+</span></a></td>';
//finalizo la tabla de cabecera
echo '</tr></table>';
echo '</td></tr>';

//fila con todos los días de la semana
echo '   <tr>
         <td width="14%" class="diasemana"><span>L</span></td>
         <td width="14%" class="diasemana"><span>M</span></td>
         <td width="14%" class="diasemana"><span>X</span></td>
         <td width="14%" class="diasemana"><span>J</span></td>
         <td width="14%" class="diasemana"><span>V</span></td>
         <td width="14%" class="diasemana"><span>S</span></td>
         <td width="14%" class="diasemana"><span>D</span></td>
      </tr>';

//Variable para llevar la cuenta del dia actual 
$dia_actual = 1; 

//calculo el numero del dia de la semana del primer dia 
$numero_dia = calcula_numero_dia_semana(1,$mes,$ano); 

//calculo el último dia del mes 
$ultimo_dia = ultimoDia($mes,$ano);

//escribo la primera fila de la semana
echo "<tr>";
for ($i=0;$i<7;$i++){
   if ($i < $numero_dia){
      //si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
      echo '<td class="diainvalido"><span></span></td>';
   } else {
      echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
      $dia_actual++;
   }
}
echo "</tr>";


//recorro todos los demás días hasta el final del mes
$numero_dia = 0;
while ($dia_actual <= $ultimo_dia){
   //si estamos a principio de la semana escribo el <TR>
   if ($numero_dia == 0)
      echo "<tr>";
   echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
   $dia_actual++;
   $numero_dia++;
   //si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>
   if ($numero_dia == 7){
      $numero_dia = 0;
      echo "</tr>";
   }
}

//compruebo que celdas me faltan por escribir vacias de la última semana del mes
for ($i=$numero_dia;$i<7;$i++){
   echo '<td class="diainvalido"><span></span></td>';
}

echo "</tr>";
echo "</table>";



?>
	</body>

</html>