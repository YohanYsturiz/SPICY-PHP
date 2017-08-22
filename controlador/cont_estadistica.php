
<?php
include_once('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();

include('../modelo/mode_estadistica.php');
$estadistica = new estadisticas();

//Estadisticas de Eventos

$consulta_iniciados = $estadistica->contar_eventos_iniciado();
$row = pg_fetch_array($consulta_iniciados);
$todos_evento_iniciado = $row['numero_eventoiniciado'];

$consulta_solicitud = $estadistica->contar_eventos_solicitud();
$eventos_solicitud = pg_fetch_array($consulta_solicitud);
$todos_evento_solicitud = $eventos_solicitud['numero_eventosolicitud'];

$consulta_desarrollo = $estadistica->contar_eventos_desarrollo();
$eventos_desarrollo = pg_fetch_array($consulta_desarrollo);
$todos_evento_desarrollo = $eventos_desarrollo['numero_eventodesarrollo'];

$consulta_finalizado = $estadistica->contar_eventos_finalizado();
$eventos_finalizado = pg_fetch_array($consulta_finalizado);
$todos_evento_finalizado = $eventos_finalizado['numero_eventofinalizado'];

$consulta_aprobado = $estadistica->contar_eventos_aprobado();
$eventos_aprobado = pg_fetch_array($consulta_aprobado);
$todos_evento_aprobado = $eventos_aprobado['numero_eventostatusaprobado'];
 
//Estadisticas Investigaciones

$consulta_investigaciones_iniciado = $estadistica->contar_investigaciones_iniciado();
$investigaciones_iniciado = pg_fetch_array($consulta_investigaciones_iniciado);
$todos_investigaciones_iniciado = $investigaciones_iniciado['numero_investigacionesstatusi'];

$consulta_investigaciones_solicitud = $estadistica->contar_investigaciones_solicitud();
$investigaciones_solicitud = pg_fetch_array($consulta_investigaciones_solicitud);
$todos_investigaciones_solicitud = $investigaciones_solicitud['numero_investigacionesstatusso'];

$consulta_investigaciones_desarrollo = $estadistica->contar_investigaciones_desarrollo();
$investigaciones_desarrollo = pg_fetch_array($consulta_investigaciones_desarrollo);
$todos_investigaciones_desarrollo = $investigaciones_desarrollo['numero_investigacionesstatusde'];

$consulta_investigaciones_finalizado = $estadistica->contar_investigaciones_finalizado();
$investigaciones_finalizado = pg_fetch_array($consulta_investigaciones_finalizado);
$todos_investigaciones_finalizado = $investigaciones_finalizado['numero_investigacionesstatusfi'];

$consulta_investigaciones_finalizado_semestre_uno = $estadistica->contar_investigaciones_finalizado_semestre_uno();
$investigaciones_finalizado_semestre_uno = pg_fetch_array($consulta_investigaciones_finalizado_semestre_uno);
$todos_investigaciones_finalizado_semestre_uno = $investigaciones_finalizado_semestre_uno['semestre_uno'];

$consulta_investigaciones_aprobado = $estadistica->contar_investigaciones_aprobado();
$investigaciones_aprobado = pg_fetch_array($consulta_investigaciones_aprobado);
$todos_investigaciones_aprobado = $investigaciones_aprobado['numero_investigacionesstatusaprobado'];

//Estadisticas por usuario eventos
$consulta_usuario_evento_iniciado = $estadistica->estadisticas_x_usuario_evento_iniciado($cod_usuario);
$usuario_evento_iniciado = pg_fetch_array($consulta_usuario_evento_iniciado);
$total_usuario_evento_iniciado = $usuario_evento_iniciado['numero_eventoiniciado_usuario'];

$consulta_usuario_evento_solicitud = $estadistica->estadisticas_x_usuario_evento_solicitud($cod_usuario);
$usuario_evento_solicitud = pg_fetch_array($consulta_usuario_evento_solicitud);
$total_usuario_evento_solicitud = $usuario_evento_solicitud['numero_eventosolicitud_usuario'];

$consulta_usuario_evento_desarrollo = $estadistica->estadisticas_x_usuario_evento_desarrollo($cod_usuario);
$usuario_evento_desarrollo = pg_fetch_array($consulta_usuario_evento_desarrollo);
$total_usuario_evento_desarrollo = $usuario_evento_desarrollo['numero_eventodesarrollo_usuario'];

$consulta_usuario_evento_finalizado = $estadistica->estadisticas_x_usuario_evento_finalizado($cod_usuario);
$usuario_evento_finalizado = pg_fetch_array($consulta_usuario_evento_finalizado);
$total_usuario_evento_finalizado = $usuario_evento_finalizado['numero_eventofinalizado_usuario'];

$consulta_usuario_evento_aprobado = $estadistica->estadisticas_x_usuario_evento_aprobado($cod_usuario);
$usuario_evento_aprobado = pg_fetch_array($consulta_usuario_evento_aprobado);
$total_usuario_evento_aprobado = $usuario_evento_aprobado['numero_eventostatusaprobado_usuario'];

//Estadisticas por usuario investigaciones
$consulta_usuario_investigacion_iniciado = $estadistica->estadisticas_x_usuario_investigacion_iniciado($cod_usuario);
$usuario_investigacion_iniciado = pg_fetch_array($consulta_usuario_investigacion_iniciado);
$total_usuario_investigacion_iniciado = $usuario_investigacion_iniciado['numero_investigacion_aprobado_usuario'];

$consulta_usuario_investigacion_solicitud = $estadistica->estadisticas_x_usuario_investigacion_solicitud($cod_usuario);
$usuario_investigacion_solicitud = pg_fetch_array($consulta_usuario_investigacion_solicitud);
$total_usuario_investigacion_solicitud = $usuario_investigacion_solicitud['numero_investigacion_solicitud_usuario'];

$consulta_usuario_investigacion_desarrollo = $estadistica->estadisticas_x_usuario_investigacion_desarrollo($cod_usuario);
$usuario_investigacion_desarrollo = pg_fetch_array($consulta_usuario_investigacion_desarrollo);
$total_usuario_investigacion_desarrollo = $usuario_investigacion_desarrollo['numero_investigacion_desarrollo_usuario'];

$consulta_usuario_investigacion_finalizado = $estadistica->estadisticas_x_usuario_investigacion_finalizado($cod_usuario);
$usuario_investigacion_finalizado = pg_fetch_array($consulta_usuario_investigacion_finalizado);
$total_usuario_investigacion_finalizado = $usuario_investigacion_finalizado['numero_investigacion_finalizado_usuario'];

$consulta_usuario_investigacion_aprobado = $estadistica->estadisticas_x_usuario_investigacion_aprobado($cod_usuario);
$usuario_investigacion_aprobado = pg_fetch_array($consulta_usuario_investigacion_aprobado);
$total_usuario_investigacion_aprobado = $usuario_investigacion_aprobado['numero_investigacion_aprobado_usuario'];

//Estadisticas de investigaciones entregadas por meses en cada usuario

$consulta_usuario_entregado_enero = $estadistica->estadisticas_entregado_enero_x_usuario($cod_usuario);
$usuario_entregado_enero = pg_fetch_array($consulta_usuario_entregado_enero);
$total_usuario_entregado_enero = $usuario_entregado_enero['entregado_enero'];

$consulta_usuario_entregado_febrero = $estadistica->estadisticas_entregado_febrero_x_usuario($cod_usuario);
$usuario_entregado_febrero = pg_fetch_array($consulta_usuario_entregado_febrero);
$total_usuario_entregado_febrero = $usuario_entregado_febrero['entregado_febrero'];

$consulta_usuario_entregado_marzo = $estadistica->estadisticas_entregado_marzo_x_usuario($cod_usuario);
$usuario_entregado_marzo = pg_fetch_array($consulta_usuario_entregado_marzo);
$total_usuario_entregado_marzo = $usuario_entregado_marzo['entregado_marzo'];

$consulta_usuario_entregado_abril = $estadistica->estadisticas_entregado_abril_x_usuario($cod_usuario);
$usuario_entregado_abril = pg_fetch_array($consulta_usuario_entregado_abril);
$total_usuario_entregado_abril = $usuario_entregado_abril['entregado_abril'];

$consulta_usuario_entregado_mayo = $estadistica->estadisticas_entregado_mayo_x_usuario($cod_usuario);
$usuario_entregado_mayo = pg_fetch_array($consulta_usuario_entregado_mayo);
$total_usuario_entregado_mayo = $usuario_entregado_mayo['entregado_mayo'];

$consulta_usuario_entregado_junio = $estadistica->estadisticas_entregado_junio_x_usuario($cod_usuario);
$usuario_entregado_junio = pg_fetch_array($consulta_usuario_entregado_junio);
$total_usuario_entregado_junio = $usuario_entregado_junio['entregado_junio'];

$consulta_usuario_entregado_julio = $estadistica->estadisticas_entregado_julio_x_usuario($cod_usuario);
$usuario_entregado_julio = pg_fetch_array($consulta_usuario_entregado_julio);
$total_usuario_entregado_julio = $usuario_entregado_julio['entregado_julio'];

$consulta_usuario_entregado_agosto = $estadistica->estadisticas_entregado_agosto_x_usuario($cod_usuario);
$usuario_entregado_agosto = pg_fetch_array($consulta_usuario_entregado_agosto);
$total_usuario_entregado_agosto = $usuario_entregado_agosto['entregado_agosto'];

$consulta_usuario_entregado_septiembre = $estadistica->estadisticas_entregado_septiembre_x_usuario($cod_usuario);
$usuario_entregado_septiembre = pg_fetch_array($consulta_usuario_entregado_septiembre);
$total_usuario_entregado_septiembre = $usuario_entregado_septiembre['entregado_septiembre'];

$consulta_usuario_entregado_octubre = $estadistica->estadisticas_entregado_octubre_x_usuario($cod_usuario);
$usuario_entregado_octubre = pg_fetch_array($consulta_usuario_entregado_octubre);
$total_usuario_entregado_octubre = $usuario_entregado_octubre['entregado_octubre'];

$consulta_usuario_entregado_noviembre = $estadistica->estadisticas_entregado_noviembre_x_usuario($cod_usuario);
$usuario_entregado_noviembre = pg_fetch_array($consulta_usuario_entregado_noviembre);
$total_usuario_entregado_noviembre = $usuario_entregado_noviembre['entregado_noviembre'];

$consulta_usuario_entregado_diciembre = $estadistica->estadisticas_entregado_diciembre_x_usuario($cod_usuario);
$usuario_entregado_diciembre = pg_fetch_array($consulta_usuario_entregado_diciembre);
$total_usuario_entregado_diciembre = $usuario_entregado_diciembre['entregado_diciembre'];

//Estadisticas de investigaciones en desarrollo por meses en cada usuario

$consulta_usuario_desarrollo_enero = $estadistica->estadisticas_desarrollo_enero_x_usuario($cod_usuario);
$usuario_desarrollo_enero = pg_fetch_array($consulta_usuario_desarrollo_enero);
$total_usuario_desarrollo_enero = $usuario_desarrollo_enero['desarrollo_enero'];

$consulta_usuario_desarrollo_febrero = $estadistica->estadisticas_desarrollo_febrero_x_usuario($cod_usuario);
$usuario_desarrollo_febrero = pg_fetch_array($consulta_usuario_desarrollo_febrero);
$total_usuario_desarrollo_febrero = $usuario_desarrollo_febrero['desarrollo_febrero'];

$consulta_usuario_desarrollo_marzo = $estadistica->estadisticas_desarrollo_marzo_x_usuario($cod_usuario);
$usuario_desarrollo_marzo = pg_fetch_array($consulta_usuario_desarrollo_marzo);
$total_usuario_desarrollo_marzo = $usuario_desarrollo_marzo['desarrollo_marzo'];

$consulta_usuario_desarrollo_abril = $estadistica->estadisticas_desarrollo_abril_x_usuario($cod_usuario);
$usuario_desarrollo_abril = pg_fetch_array($consulta_usuario_desarrollo_abril);
$total_usuario_desarrollo_abril = $usuario_desarrollo_abril['desarrollo_abril'];

$consulta_usuario_desarrollo_mayo = $estadistica->estadisticas_desarrollo_mayo_x_usuario($cod_usuario);
$usuario_desarrollo_mayo = pg_fetch_array($consulta_usuario_desarrollo_mayo);
$total_usuario_desarrollo_mayo = $usuario_desarrollo_mayo['desarrollo_mayo'];

$consulta_usuario_desarrollo_junio = $estadistica->estadisticas_desarrollo_junio_x_usuario($cod_usuario);
$usuario_desarrollo_junio = pg_fetch_array($consulta_usuario_desarrollo_junio);
$total_usuario_desarrollo_junio = $usuario_desarrollo_junio['desarrollo_junio'];

$consulta_usuario_desarrollo_julio = $estadistica->estadisticas_desarrollo_julio_x_usuario($cod_usuario);
$usuario_desarrollo_julio = pg_fetch_array($consulta_usuario_desarrollo_julio);
$total_usuario_desarrollo_julio = $usuario_desarrollo_julio['desarrollo_julio'];

$consulta_usuario_desarrollo_agosto = $estadistica->estadisticas_desarrollo_agosto_x_usuario($cod_usuario);
$usuario_desarrollo_agosto = pg_fetch_array($consulta_usuario_desarrollo_agosto);
$total_usuario_desarrollo_agosto = $usuario_desarrollo_agosto['desarrollo_agosto'];

$consulta_usuario_desarrollo_septiembre = $estadistica->estadisticas_desarrollo_septiembre_x_usuario($cod_usuario);
$usuario_desarrollo_septiembre = pg_fetch_array($consulta_usuario_desarrollo_septiembre);
$total_usuario_desarrollo_septiembre = $usuario_desarrollo_septiembre['desarrollo_septiembre'];

$consulta_usuario_desarrollo_octubre = $estadistica->estadisticas_desarrollo_octubre_x_usuario($cod_usuario);
$usuario_desarrollo_octubre = pg_fetch_array($consulta_usuario_desarrollo_octubre);
$total_usuario_desarrollo_octubre = $usuario_desarrollo_octubre['desarrollo_octubre'];

$consulta_usuario_desarrollo_noviembre = $estadistica->estadisticas_desarrollo_noviembre_x_usuario($cod_usuario);
$usuario_desarrollo_noviembre = pg_fetch_array($consulta_usuario_desarrollo_noviembre);
$total_usuario_desarrollo_noviembre = $usuario_desarrollo_noviembre['desarrollo_noviembre'];

$consulta_usuario_desarrollo_diciembre = $estadistica->estadisticas_desarrollo_diciembre_x_usuario($cod_usuario);
$usuario_desarrollo_diciembre = pg_fetch_array($consulta_usuario_desarrollo_diciembre);
$total_usuario_desarrollo_diciembre = $usuario_desarrollo_diciembre['desarrollo_diciembre'];

//Estadisticas de investigaciones finalizadas y aprobadas por meses en cada usuario

$consulta_usuario_aprobadas_enero = $estadistica->estadisticas_aprobadas_enero_x_usuario($cod_usuario);
$usuario_aprobadas_enero = pg_fetch_array($consulta_usuario_aprobadas_enero);
$total_usuario_aprobadas_enero = $usuario_aprobadas_enero['aprobadas_enero'];

$consulta_usuario_aprobadas_febrero = $estadistica->estadisticas_aprobadas_febrero_x_usuario($cod_usuario);
$usuario_aprobadas_febrero = pg_fetch_array($consulta_usuario_aprobadas_febrero);
$total_usuario_aprobadas_febrero = $usuario_aprobadas_febrero['aprobadas_febrero'];

$consulta_usuario_aprobadas_marzo = $estadistica->estadisticas_aprobadas_marzo_x_usuario($cod_usuario);
$usuario_aprobadas_marzo = pg_fetch_array($consulta_usuario_aprobadas_marzo);
$total_usuario_aprobadas_marzo = $usuario_aprobadas_marzo['aprobadas_marzo'];

$consulta_usuario_aprobadas_abril = $estadistica->estadisticas_aprobadas_abril_x_usuario($cod_usuario);
$usuario_aprobadas_abril = pg_fetch_array($consulta_usuario_aprobadas_abril);
$total_usuario_aprobadas_abril = $usuario_aprobadas_abril['aprobadas_abril'];

$consulta_usuario_aprobadas_mayo = $estadistica->estadisticas_aprobadas_mayo_x_usuario($cod_usuario);
$usuario_aprobadas_mayo = pg_fetch_array($consulta_usuario_aprobadas_mayo);
$total_usuario_aprobadas_mayo = $usuario_aprobadas_mayo['aprobadas_mayo'];

$consulta_usuario_aprobadas_junio = $estadistica->estadisticas_aprobadas_junio_x_usuario($cod_usuario);
$usuario_aprobadas_junio = pg_fetch_array($consulta_usuario_aprobadas_junio);
$total_usuario_aprobadas_junio = $usuario_aprobadas_junio['aprobadas_junio'];

$consulta_usuario_aprobadas_julio = $estadistica->estadisticas_aprobadas_julio_x_usuario($cod_usuario);
$usuario_aprobadas_julio = pg_fetch_array($consulta_usuario_aprobadas_julio);
$total_usuario_aprobadas_julio = $usuario_aprobadas_julio['aprobadas_julio'];

$consulta_usuario_aprobadas_agosto = $estadistica->estadisticas_aprobadas_agosto_x_usuario($cod_usuario);
$usuario_aprobadas_agosto = pg_fetch_array($consulta_usuario_aprobadas_agosto);
$total_usuario_aprobadas_agosto = $usuario_aprobadas_agosto['aprobadas_agosto'];

$consulta_usuario_aprobadas_septiembre = $estadistica->estadisticas_aprobadas_septiembre_x_usuario($cod_usuario);
$usuario_aprobadas_septiembre = pg_fetch_array($consulta_usuario_aprobadas_septiembre);
$total_usuario_aprobadas_septiembre = $usuario_aprobadas_septiembre['aprobadas_septiembre'];

$consulta_usuario_aprobadas_octubre = $estadistica->estadisticas_aprobadas_octubre_x_usuario($cod_usuario);
$usuario_aprobadas_octubre = pg_fetch_array($consulta_usuario_aprobadas_octubre);
$total_usuario_aprobadas_octubre = $usuario_aprobadas_octubre['aprobadas_octubre'];

$consulta_usuario_aprobadas_noviembre = $estadistica->estadisticas_aprobadas_noviembre_x_usuario($cod_usuario);
$usuario_aprobadas_noviembre = pg_fetch_array($consulta_usuario_aprobadas_noviembre);
$total_usuario_aprobadas_noviembre = $usuario_aprobadas_noviembre['aprobadas_noviembre'];

$consulta_usuario_aprobadas_diciembre = $estadistica->estadisticas_aprobadas_diciembre_x_usuario($cod_usuario);
$usuario_aprobadas_diciembre = pg_fetch_array($consulta_usuario_aprobadas_diciembre);
$total_usuario_aprobadas_diciembre = $usuario_aprobadas_diciembre['aprobadas_diciembre'];

//Indicador de cumplimiento
$consulta_indicador_usuario_cumplimiento = $estadistica->indicador_usuario_cumplimiento($cod_usuario);
$usuario_cumplimiento = pg_fetch_array($consulta_indicador_usuario_cumplimiento);
$total_indicador_usuario_cumplimiento = $usuario_cumplimiento['cantidad_total'];

//indicador cumplimiento presente
$cumplimiento_presente= $total_usuario_investigacion_finalizado;

//indicador eficacia_usuario
$consulta_indicador_usuario_eficacia = $estadistica->indicador_usuario_eficacia($cod_usuario);
$eficacia_presente = pg_fetch_array($consulta_indicador_usuario_eficacia);
$total_indicador_usuario_eficacia = $eficacia_presente['investigacion_aprobada'];

echo "<script>

        var todos_evento_iniciado = '$todos_evento_iniciado';
        document.cookie='eventos_iniciado='+todos_evento_iniciado+'';

        var todos_evento_solicitud = '$todos_evento_solicitud';
        document.cookie='eventos_solicitud='+todos_evento_solicitud+'';

        var todos_evento_desarrollo = '$todos_evento_desarrollo';
        document.cookie='eventos_desarrollo='+todos_evento_desarrollo+'';

        var todos_evento_finalizado = '$todos_evento_finalizado';
        document.cookie='eventos_finalizado='+todos_evento_finalizado+'';

        var todos_evento_aprobado = '$todos_evento_aprobado';
        document.cookie='eventos_aprobado='+todos_evento_aprobado+'';


        var todos_investigaciones_iniciado = '$todos_investigaciones_iniciado';
        document.cookie='investigaciones_iniciado='+todos_investigaciones_iniciado+'';

        var todos_investigaciones_solicitud = '$todos_investigaciones_solicitud';
        document.cookie='investigaciones_solicitud='+todos_investigaciones_solicitud+'';

        var todos_investigaciones_desarrollo = '$todos_investigaciones_desarrollo';
        document.cookie='investigaciones_desarrollo='+todos_investigaciones_desarrollo+'';

        var todos_investigaciones_finalizado = '$todos_investigaciones_finalizado';
        document.cookie='investigaciones_finalizado='+todos_investigaciones_finalizado+'';

        var todos_investigaciones_aprobado = '$todos_investigaciones_aprobado';
        document.cookie='investigaciones_aprobado='+todos_investigaciones_aprobado+'';


        var usuario_todos_evento_iniciado = '$total_usuario_evento_iniciado';
        document.cookie='usuario_evento_iniciado='+usuario_todos_evento_iniciado+'';

        var usuario_todos_evento_solicitud = '$total_usuario_evento_solicitud';
        document.cookie='usuario_evento_solicitud='+usuario_todos_evento_solicitud+'';

        var usuario_todos_evento_desarrollo = '$total_usuario_evento_desarrollo';
        document.cookie='usuario_evento_desarrollo='+usuario_todos_evento_desarrollo+'';

        var usuario_todos_evento_finalizado = '$total_usuario_evento_finalizado';
        document.cookie='usuario_evento_finalizado='+usuario_todos_evento_finalizado+'';

        var usuario_todos_evento_aprobado = '$total_usuario_evento_aprobado';
        document.cookie='usuario_evento_aprobado='+usuario_todos_evento_aprobado+'';


        var usuario_todos_investigacion_iniciado = '$total_usuario_investigacion_iniciado';
        document.cookie='usuario_investigacion_iniciado='+usuario_todos_investigacion_iniciado+'';

        var usuario_todos_investigacion_solicitud = '$total_usuario_investigacion_solicitud';
        document.cookie='usuario_investigacion_solicitud='+usuario_todos_investigacion_solicitud+'';

        var usuario_todos_investigacion_desarrollo = '$total_usuario_investigacion_desarrollo';
        document.cookie='usuario_investigacion_desarrollo='+usuario_todos_investigacion_desarrollo+'';

        var usuario_todos_investigacion_finalizado = '$total_usuario_investigacion_finalizado';
        document.cookie='usuario_investigacion_finalizado='+usuario_todos_investigacion_finalizado+'';

        var usuario_todos_investigacion_aprobado = '$total_usuario_investigacion_aprobado';
        document.cookie='usuario_investigacion_aprobado='+usuario_todos_investigacion_aprobado+'';    


        var usuario_entregado_enero = '$total_usuario_entregado_enero';
        document.cookie='usuario_entregado_enero='+usuario_entregado_enero+''; 

        var usuario_entregado_febrero = '$total_usuario_entregado_febrero';
        document.cookie='usuario_entregado_febrero='+usuario_entregado_febrero+'';  

        var usuario_entregado_marzo = '$total_usuario_entregado_marzo';
        document.cookie='usuario_entregado_marzo='+usuario_entregado_marzo+''; 

        var usuario_entregado_abril = '$total_usuario_entregado_abril';
        document.cookie='usuario_entregado_abril='+usuario_entregado_abril+''; 

        var usuario_entregado_mayo = '$total_usuario_entregado_mayo';
        document.cookie='usuario_entregado_mayo='+usuario_entregado_mayo+''; 

        var usuario_entregado_junio = '$total_usuario_entregado_junio';
        document.cookie='usuario_entregado_junio='+usuario_entregado_junio+''; 

        var usuario_entregado_julio = '$total_usuario_entregado_julio';
        document.cookie='usuario_entregado_julio='+usuario_entregado_julio+''; 

        var usuario_entregado_agosto = '$total_usuario_entregado_agosto';
        document.cookie='usuario_entregado_agosto='+usuario_entregado_agosto+''; 

        var usuario_entregado_septiembre = '$total_usuario_entregado_septiembre';
        document.cookie='usuario_entregado_septiembre='+usuario_entregado_septiembre+''; 

        var usuario_entregado_octubre = '$total_usuario_entregado_octubre';
        document.cookie='usuario_entregado_octubre='+usuario_entregado_octubre+''; 

        var usuario_entregado_noviembre = '$total_usuario_entregado_noviembre';
        document.cookie='usuario_entregado_noviembre='+usuario_entregado_noviembre+''; 

        var usuario_entregado_diciembre = '$total_usuario_entregado_diciembre';
        document.cookie='usuario_entregado_diciembre='+usuario_entregado_diciembre+''; 


        var usuario_desarrollo_enero = '$total_usuario_desarrollo_enero';
        document.cookie='usuario_desarrollo_enero='+usuario_desarrollo_enero+''; 

        var usuario_desarrollo_febrero = '$total_usuario_desarrollo_febrero';
        document.cookie='usuario_desarrollo_febrero='+usuario_desarrollo_febrero+'';  

        var usuario_desarrollo_marzo = '$total_usuario_desarrollo_marzo';
        document.cookie='usuario_desarrollo_marzo='+usuario_desarrollo_marzo+''; 

        var usuario_desarrollo_abril = '$total_usuario_desarrollo_abril';
        document.cookie='usuario_desarrollo_abril='+usuario_desarrollo_abril+''; 

        var usuario_desarrollo_mayo = '$total_usuario_desarrollo_mayo';
        document.cookie='usuario_desarrollo_mayo='+usuario_desarrollo_mayo+''; 

        var usuario_desarrollo_junio = '$total_usuario_desarrollo_junio';
        document.cookie='usuario_desarrollo_junio='+usuario_desarrollo_junio+''; 

        var usuario_desarrollo_julio = '$total_usuario_desarrollo_julio';
        document.cookie='usuario_desarrollo_julio='+usuario_desarrollo_julio+''; 

        var usuario_desarrollo_agosto = '$total_usuario_desarrollo_agosto';
        document.cookie='usuario_desarrollo_agosto='+usuario_desarrollo_agosto+''; 

        var usuario_desarrollo_septiembre = '$total_usuario_desarrollo_septiembre';
        document.cookie='usuario_desarrollo_septiembre='+usuario_desarrollo_septiembre+''; 

        var usuario_desarrollo_octubre = '$total_usuario_desarrollo_octubre';
        document.cookie='usuario_desarrollo_octubre='+usuario_desarrollo_octubre+''; 

        var usuario_desarrollo_noviembre = '$total_usuario_desarrollo_noviembre';
        document.cookie='usuario_desarrollo_noviembre='+usuario_desarrollo_noviembre+''; 

        var usuario_desarrollo_diciembre = '$total_usuario_desarrollo_diciembre';
        document.cookie='usuario_desarrollo_diciembre='+usuario_desarrollo_diciembre+'';


        var usuario_aprobadas_enero = '$total_usuario_aprobadas_enero';
        document.cookie='usuario_aprobadas_enero='+usuario_aprobadas_enero+''; 

        var usuario_aprobadas_febrero = '$total_usuario_aprobadas_febrero';
        document.cookie='usuario_aprobadas_febrero='+usuario_aprobadas_febrero+'';  

        var usuario_aprobadas_marzo = '$total_usuario_aprobadas_marzo';
        document.cookie='usuario_aprobadas_marzo='+usuario_aprobadas_marzo+''; 

        var usuario_aprobadas_abril = '$total_usuario_aprobadas_abril';
        document.cookie='usuario_aprobadas_abril='+usuario_aprobadas_abril+''; 

        var usuario_aprobadas_mayo = '$total_usuario_aprobadas_mayo';
        document.cookie='usuario_aprobadas_mayo='+usuario_aprobadas_mayo+''; 

        var usuario_aprobadas_junio = '$total_usuario_aprobadas_junio';
        document.cookie='usuario_aprobadas_junio='+usuario_aprobadas_junio+''; 

        var usuario_aprobadas_julio = '$total_usuario_aprobadas_julio';
        document.cookie='usuario_aprobadas_julio='+usuario_aprobadas_julio+''; 

        var usuario_aprobadas_agosto = '$total_usuario_aprobadas_agosto';
        document.cookie='usuario_aprobadas_agosto='+usuario_aprobadas_agosto+''; 

        var usuario_aprobadas_septiembre = '$total_usuario_aprobadas_septiembre';
        document.cookie='usuario_aprobadas_septiembre='+usuario_aprobadas_septiembre+''; 

        var usuario_aprobadas_octubre = '$total_usuario_aprobadas_octubre';
        document.cookie='usuario_aprobadas_octubre='+usuario_aprobadas_octubre+''; 

        var usuario_aprobadas_noviembre = '$total_usuario_aprobadas_noviembre';
        document.cookie='usuario_aprobadas_noviembre='+usuario_aprobadas_noviembre+''; 

        var usuario_aprobadas_diciembre = '$total_usuario_aprobadas_diciembre';
        document.cookie='usuario_aprobadas_diciembre='+usuario_aprobadas_diciembre+'';


        var usuario_indicador_cumplimiento = '$total_indicador_usuario_cumplimiento';
        document.cookie='usuario_indicador_cumplimiento='+usuario_indicador_cumplimiento+'';

        
        var usuario_indicador_cumplimiento_presente = '$cumplimiento_presente';
        document.cookie='usuario_indicador_cumplimiento_presente='+usuario_indicador_cumplimiento_presente+'';


        var usuario_indicador_eficacia_presente = '$total_indicador_usuario_eficacia';
        document.cookie='usuario_indicador_eficacia_presente='+usuario_indicador_eficacia_presente+'';


    </script>"

?>