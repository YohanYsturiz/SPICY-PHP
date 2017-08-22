<?
function mostrar_calendario($mes,$ano){
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
   echo '<a href="index.php?nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><span>-;</span></a></td>';
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
   //echo "Numero del dia de demana del primer: $numero_dia <br>";
   
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
}

//La funcion que muestra el calandario
function formularioCalendario($mes,$ano){
echo '
   <table align="center" cellspacing="2" cellpadding="2" border="0">
   <tr><form action="index.php" method="POST">';
echo '
<td align="center" valign="top">
      Mes: <br>
      <select name=nuevo_mes>
      <option value="1"';
if ($mes==1)
echo "selected";
echo'>Enero</option>
      <option value="2" ';
if ($mes==2) 
   echo "selected";
echo'>Febrero</option>
      <option value="3" ';
if ($mes==3) 
   echo "selected";
echo'>Marzo</option>
      <option value="4" ';
if ($mes==4) 
   echo "selected";
echo '>Abril</option>
      <option value="5" ';
if ($mes==5) 
      echo "selected";
echo '>Mayo</option>
      <option value="6" ';
if ($mes==6) 
   echo "selected";
echo '>Junio</option>
      <option value="7" ';
if ($mes==7) 
   echo "selected";
echo '>Julio</option>
      <option value="8" ';
if ($mes==8) 
   echo "selected";
echo '>Agosto</option>
      <option value="9" ';
if ($mes==9) 
   echo "selected";
echo '>Septiembre</option>
      <option value="10" ';
if ($mes==10) 
   echo "selected";
echo '>Octubre</option>
      <option value="11" ';
if ($mes==11) 
   echo "selected";
echo '>Noviembre</option>
      <option value="12" ';
if ($mes==12) 
echo "selected";
echo '>Diciembre</option>
      </select>
      </td>';
echo '      
    <td align="center" valign="top">
      Año: <br>
      <select name=nuevo_ano>
   ';
//este bucle se podría hacer dependiendo del número de año que se quiera mostrar
//yo voy a mostar 10 años atrás y 10 adelante de la fecha mostrada en el calendario
for ($anoactual=$ano-10; $anoactual<=$ano+10; $anoactual++){
   echo '<option value="' . $anoactual . '" ';
   if ($ano==$anoactual) {
      echo "selected";
   }
   echo '>' . $anoactual . '</option>';
}
echo '</select>
      </td>';
echo '
   </tr>
   <tr>
    <td colspan="2" align="center"><input type="Submit" value="[ IR A ESE MES ]"></td>
   </tr>
   </table><br>
   
   <br>
   
   </form>';
}

<?