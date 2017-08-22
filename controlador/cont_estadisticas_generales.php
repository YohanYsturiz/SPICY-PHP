
<?php
include_once('../modelo/mode_conection.php');
$conexion = new Connex();
$pgconn=$conexion->conectar();

include('../modelo/mode_estadisticas_generales.php');
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

//Investigaciones en finalizado por semestres. 

$consulta_investigaciones_finalizado_semestre_uno = $estadistica->contar_investigaciones_finalizado_semestre_uno();
$investigaciones_finalizado_semestre_uno = pg_fetch_array($consulta_investigaciones_finalizado_semestre_uno);
$todos_investigaciones_finalizado_semestre_uno = $investigaciones_finalizado_semestre_uno['semestre_uno'];

$consulta_investigaciones_finalizado_semestre_dos = $estadistica->contar_investigaciones_finalizado_semestre_dos();
$investigaciones_finalizado_semestre_dos = pg_fetch_array($consulta_investigaciones_finalizado_semestre_dos);
$todos_investigaciones_finalizado_semestre_dos = $investigaciones_finalizado_semestre_dos['semestre_dos'];

$consulta_investigaciones_aprobado = $estadistica->contar_investigaciones_aprobado();
$investigaciones_aprobado = pg_fetch_array($consulta_investigaciones_aprobado);
$todos_investigaciones_aprobado = $investigaciones_aprobado['numero_investigaciones_aprobadas'];

// Estadisticas de metas por semestre "investigaciones Operacion". 

$consulta_total_usuarios = $estadistica->total_usuarios();
$total_usuarios = pg_fetch_array($consulta_total_usuarios);
$total_usuarios_meta = $total_usuarios['numero_usuarios'];

$mtotal = $todos_investigaciones_finalizado_semestre_uno/$total_usuarios_meta;

$mtotal_porcentaje= $mtotal*100;

//prototipo segundo Trimestre
$mtotal_2do_semestre = $todos_investigaciones_finalizado_semestre_dos/$total_usuarios_meta;

$mtotal_porcentaje_dos= $mtotal_2do_semestre*100;

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

$consulta_entregado_enero = $estadistica->estadisticas_entregado_enero();
$entregado_enero = pg_fetch_array($consulta_entregado_enero);
$total_entregado_enero = $entregado_enero['entregado_enero'];

$consulta_entregado_febrero = $estadistica->estadisticas_entregado_febrero();
$entregado_febrero = pg_fetch_array($consulta_entregado_febrero);
$total_entregado_febrero = $entregado_febrero['entregado_febrero'];

$consulta_entregado_marzo = $estadistica->estadisticas_entregado_marzo();
$entregado_marzo = pg_fetch_array($consulta_entregado_marzo);
$total_entregado_marzo = $entregado_marzo['entregado_marzo'];

$consulta_entregado_abril = $estadistica->estadisticas_entregado_abril();
$entregado_abril = pg_fetch_array($consulta_entregado_abril);
$total_entregado_abril = $entregado_abril['entregado_abril'];

$consulta_entregado_mayo = $estadistica->estadisticas_entregado_mayo();
$entregado_mayo = pg_fetch_array($consulta_entregado_mayo);
$total_entregado_mayo = $entregado_mayo['entregado_mayo'];

$consulta_entregado_junio = $estadistica->estadisticas_entregado_junio();
$entregado_junio = pg_fetch_array($consulta_entregado_junio);
$total_entregado_junio = $entregado_junio['entregado_junio'];

$consulta_entregado_julio = $estadistica->estadisticas_entregado_julio();
$entregado_julio = pg_fetch_array($consulta_entregado_julio);
$total_entregado_julio = $entregado_julio['entregado_julio'];

$consulta_entregado_agosto = $estadistica->estadisticas_entregado_agosto();
$entregado_agosto = pg_fetch_array($consulta_entregado_agosto);
$total_entregado_agosto = $entregado_agosto['entregado_agosto'];

$consulta_entregado_septiembre = $estadistica->estadisticas_entregado_septiembre();
$entregado_septiembre = pg_fetch_array($consulta_entregado_septiembre);
$total_entregado_septiembre = $entregado_septiembre['entregado_septiembre'];

$consulta_entregado_octubre = $estadistica->estadisticas_entregado_octubre();
$entregado_octubre = pg_fetch_array($consulta_entregado_octubre);
$total_entregado_octubre = $entregado_octubre['entregado_octubre'];

$consulta_entregado_noviembre = $estadistica->estadisticas_entregado_noviembre();
$entregado_noviembre = pg_fetch_array($consulta_entregado_noviembre);
$total_entregado_noviembre = $entregado_noviembre['entregado_noviembre'];

$consulta_entregado_diciembre = $estadistica->estadisticas_entregado_diciembre();
$entregado_diciembre = pg_fetch_array($consulta_entregado_diciembre);
$total_entregado_diciembre = $entregado_diciembre['entregado_diciembre'];

//Estadisticas de investigaciones en desarrollo por meses en cada usuario

$consulta_desarrollo_enero = $estadistica->estadisticas_desarrollo_enero();
$desarrollo_enero = pg_fetch_array($consulta_desarrollo_enero);
$total_desarrollo_enero = $desarrollo_enero['desarrollo_enero'];

$consulta_desarrollo_febrero = $estadistica->estadisticas_desarrollo_febrero();
$desarrollo_febrero = pg_fetch_array($consulta_desarrollo_febrero);
$total_desarrollo_febrero = $desarrollo_febrero['desarrollo_febrero'];

$consulta_desarrollo_marzo = $estadistica->estadisticas_desarrollo_marzo();
$desarrollo_marzo = pg_fetch_array($consulta_desarrollo_marzo);
$total_desarrollo_marzo = $desarrollo_marzo['desarrollo_marzo'];

$consulta_desarrollo_abril = $estadistica->estadisticas_desarrollo_abril();
$desarrollo_abril = pg_fetch_array($consulta_desarrollo_abril);
$total_desarrollo_abril = $desarrollo_abril['desarrollo_abril'];

$consulta_desarrollo_mayo = $estadistica->estadisticas_desarrollo_mayo();
$desarrollo_mayo = pg_fetch_array($consulta_desarrollo_mayo);
$total_desarrollo_mayo = $desarrollo_mayo['desarrollo_mayo'];

$consulta_desarrollo_junio = $estadistica->estadisticas_desarrollo_junio();
$desarrollo_junio = pg_fetch_array($consulta_desarrollo_junio);
$total_desarrollo_junio = $desarrollo_junio['desarrollo_junio'];

$consulta_desarrollo_julio = $estadistica->estadisticas_desarrollo_julio();
$desarrollo_julio = pg_fetch_array($consulta_desarrollo_julio);
$total_desarrollo_julio = $desarrollo_julio['desarrollo_julio'];

$consulta_desarrollo_agosto = $estadistica->estadisticas_desarrollo_agosto();
$desarrollo_agosto = pg_fetch_array($consulta_desarrollo_agosto);
$total_desarrollo_agosto = $desarrollo_agosto['desarrollo_agosto'];

$consulta_desarrollo_septiembre = $estadistica->estadisticas_desarrollo_septiembre();
$desarrollo_septiembre = pg_fetch_array($consulta_desarrollo_septiembre);
$total_desarrollo_septiembre = $desarrollo_septiembre['desarrollo_septiembre'];

$consulta_desarrollo_octubre = $estadistica->estadisticas_desarrollo_octubre();
$desarrollo_octubre = pg_fetch_array($consulta_desarrollo_octubre);
$total_desarrollo_octubre = $desarrollo_octubre['desarrollo_octubre'];

$consulta_desarrollo_noviembre = $estadistica->estadisticas_desarrollo_noviembre();
$desarrollo_noviembre = pg_fetch_array($consulta_desarrollo_noviembre);
$total_desarrollo_noviembre = $desarrollo_noviembre['desarrollo_noviembre'];

$consulta_desarrollo_diciembre = $estadistica->estadisticas_desarrollo_diciembre();
$desarrollo_diciembre = pg_fetch_array($consulta_desarrollo_diciembre);
$total_desarrollo_diciembre = $desarrollo_diciembre['desarrollo_diciembre'];

//Estadisticas de investigaciones finalizadas y aprobadas por meses en cada usuario

$consulta_aprobadas_enero = $estadistica->estadisticas_aprobadas_enero();
$aprobadas_enero = pg_fetch_array($consulta_aprobadas_enero);
$total_aprobadas_enero = $aprobadas_enero['aprobadas_enero'];

$consulta_aprobadas_febrero = $estadistica->estadisticas_aprobadas_febrero();
$aprobadas_febrero = pg_fetch_array($consulta_aprobadas_febrero);
$total_aprobadas_febrero = $aprobadas_febrero['aprobadas_febrero'];

$consulta_aprobadas_marzo = $estadistica->estadisticas_aprobadas_marzo();
$aprobadas_marzo = pg_fetch_array($consulta_aprobadas_marzo);
$total_aprobadas_marzo = $aprobadas_marzo['aprobadas_marzo'];

$consulta_aprobadas_abril = $estadistica->estadisticas_aprobadas_abril();
$aprobadas_abril = pg_fetch_array($consulta_aprobadas_abril);
$total_aprobadas_abril = $aprobadas_abril['aprobadas_abril'];

$consulta_aprobadas_mayo = $estadistica->estadisticas_aprobadas_mayo();
$aprobadas_mayo = pg_fetch_array($consulta_aprobadas_mayo);
$total_aprobadas_mayo = $aprobadas_mayo['aprobadas_mayo'];

$consulta_aprobadas_junio = $estadistica->estadisticas_aprobadas_junio();
$aprobadas_junio = pg_fetch_array($consulta_aprobadas_junio);
$total_aprobadas_junio = $aprobadas_junio['aprobadas_junio'];

$consulta_aprobadas_julio = $estadistica->estadisticas_aprobadas_julio();
$aprobadas_julio = pg_fetch_array($consulta_aprobadas_julio);
$total_aprobadas_julio = $aprobadas_julio['aprobadas_julio'];

$consulta_aprobadas_agosto = $estadistica->estadisticas_aprobadas_agosto();
$aprobadas_agosto = pg_fetch_array($consulta_aprobadas_agosto);
$total_aprobadas_agosto = $aprobadas_agosto['aprobadas_agosto'];

$consulta_aprobadas_septiembre = $estadistica->estadisticas_aprobadas_septiembre();
$aprobadas_septiembre = pg_fetch_array($consulta_aprobadas_septiembre);
$total_aprobadas_septiembre = $aprobadas_septiembre['aprobadas_septiembre'];

$consulta_aprobadas_octubre = $estadistica->estadisticas_aprobadas_octubre();
$aprobadas_octubre = pg_fetch_array($consulta_aprobadas_octubre);
$total_aprobadas_octubre = $aprobadas_octubre['aprobadas_octubre'];

$consulta_aprobadas_noviembre = $estadistica->estadisticas_aprobadas_noviembre();
$aprobadas_noviembre = pg_fetch_array($consulta_aprobadas_noviembre);
$total_aprobadas_noviembre = $aprobadas_noviembre['aprobadas_noviembre'];

$consulta_aprobadas_diciembre = $estadistica->estadisticas_aprobadas_diciembre();
$aprobadas_diciembre = pg_fetch_array($consulta_aprobadas_diciembre);
$total_aprobadas_diciembre = $aprobadas_diciembre['aprobadas_diciembre'];

//Indicador de cumplimiento
$consulta_indicador_cumplimiento = $estadistica->indicador_cumplimiento($cod_usuario);
$cumplimiento = pg_fetch_array($consulta_indicador_cumplimiento);
$total_indicador_cumplimiento = $cumplimiento['cantidad_total'];

//indicador cumplimiento presente
$cumplimiento_presente= $todos_investigaciones_finalizado;


//indicador eficacia_usuario
$consulta_indicador_eficacia = $estadistica->indicador_eficacia();
$eficacia_presente = pg_fetch_array($consulta_indicador_eficacia);
$total_indicador_eficacia = $eficacia_presente['investigacion_aprobada'];

//INDICADOR DE LINEAS DE INVESTIGACION "CUMPLIMIENTO"
$consulta_indicador_pnfa = $estadistica->indicador_investigacion_pnfa();
$indicador_pnfa = pg_fetch_array($consulta_indicador_pnfa);
$total_indicador_pnfa = $indicador_pnfa['investigaciones_pnfa'];

$consulta_indicador_pnfi = $estadistica->indicador_investigacion_pnfi();
$indicador_pnfi = pg_fetch_array($consulta_indicador_pnfi);
$total_indicador_pnfi = $indicador_pnfi['investigaciones_pnfi'];

$consulta_indicador_pnft = $estadistica->indicador_investigacion_pnft();
$indicador_pnft = pg_fetch_array($consulta_indicador_pnft);
$total_indicador_pnft = $indicador_pnft['investigaciones_pnft'];

$consulta_indicador_preescolar = $estadistica->indicador_investigacion_preescolar();
$indicador_preescolar = pg_fetch_array($consulta_indicador_preescolar);
$total_indicador_preescolar = $indicador_preescolar['investigaciones_preescolar'];

$consulta_indicador_trabajo_social = $estadistica->indicador_investigacion_trabajo_social();
$indicador_trabajo_social = pg_fetch_array($consulta_indicador_trabajo_social);
$total_indicador_trabajo_social = $indicador_trabajo_social['investigaciones_trabajo_social'];

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


        var entregado_enero = '$total_entregado_enero';
        document.cookie='entregado_enero='+entregado_enero+''; 

        var entregado_febrero = '$total_entregado_febrero';
        document.cookie='entregado_febrero='+entregado_febrero+'';  

        var entregado_marzo = '$total_entregado_marzo';
        document.cookie='entregado_marzo='+entregado_marzo+''; 

        var entregado_abril = '$total_entregado_abril';
        document.cookie='entregado_abril='+entregado_abril+''; 

        var entregado_mayo = '$total_entregado_mayo';
        document.cookie='entregado_mayo='+entregado_mayo+''; 

        var entregado_junio = '$total_entregado_junio';
        document.cookie='entregado_junio='+entregado_junio+''; 

    	var entregado_julio = '$total_entregado_julio';
        document.cookie='entregado_julio='+entregado_julio+'';

        var entregado_agosto = '$total_entregado_agosto';
        document.cookie='entregado_agosto='+entregado_agosto+''; 

        var entregado_septiembre = '$total_entregado_septiembre';
        document.cookie='entregado_septiembre='+entregado_septiembre+''; 

        var entregado_octubre = '$total_entregado_octubre';
        document.cookie='entregado_octubre='+entregado_octubre+''; 

        var entregado_noviembre = '$total_entregado_noviembre';
        document.cookie='entregado_noviembre='+entregado_noviembre+''; 

        var entregado_diciembre = '$total_entregado_diciembre';
        document.cookie='entregado_diciembre='+entregado_diciembre+''; 


        var desarrollo_enero = '$total_desarrollo_enero';
        document.cookie='desarrollo_enero='+desarrollo_enero+''; 

        var desarrollo_febrero = '$total_desarrollo_febrero';
        document.cookie='desarrollo_febrero='+desarrollo_febrero+'';  

        var desarrollo_marzo = '$total_desarrollo_marzo';
        document.cookie='desarrollo_marzo='+desarrollo_marzo+''; 

        var desarrollo_abril = '$total_desarrollo_abril';
        document.cookie='desarrollo_abril='+desarrollo_abril+''; 

        var desarrollo_mayo = '$total_desarrollo_mayo';
        document.cookie='desarrollo_mayo='+desarrollo_mayo+''; 

        var desarrollo_junio = '$total_desarrollo_junio';
        document.cookie='desarrollo_junio='+desarrollo_junio+''; 

    	var desarrollo_julio = '$total_desarrollo_julio';
        document.cookie='desarrollo_julio='+desarrollo_julio+'';

        var desarrollo_agosto = '$total_desarrollo_agosto';
        document.cookie='desarrollo_agosto='+desarrollo_agosto+''; 

        var desarrollo_septiembre = '$total_desarrollo_septiembre';
        document.cookie='desarrollo_septiembre='+desarrollo_septiembre+''; 

        var desarrollo_octubre = '$total_desarrollo_octubre';
        document.cookie='desarrollo_octubre='+desarrollo_octubre+''; 

        var entregado_noviembre = '$total_desarrollo_noviembre';
        document.cookie='entregado_noviembre='+entregado_noviembre+''; 

        var desarrollo_diciembre = '$total_desarrollo_diciembre';
        document.cookie='desarrollo_diciembre='+desarrollo_diciembre+'';


        var aprobadas_enero = '$total_aprobadas_enero';
        document.cookie='aprobadas_enero='+aprobadas_enero+''; 

        var aprobadas_febrero = '$total_aprobadas_febrero';
        document.cookie='aprobadas_febrero='+aprobadas_febrero+'';  

        var aprobadas_marzo = '$total_aprobadas_marzo';
        document.cookie='aprobadas_marzo='+aprobadas_marzo+''; 

        var aprobadas_abril = '$total_aprobadas_abril';
        document.cookie='aprobadas_abril='+aprobadas_abril+''; 

        var aprobadas_mayo = '$total_aprobadas_mayo';
        document.cookie='aprobadas_mayo='+aprobadas_mayo+''; 

        var aprobadas_junio = '$total_aprobadas_junio';
        document.cookie='aprobadas_junio='+aprobadas_junio+''; 

    	var aprobadas_julio = '$total_aprobadas_julio';
        document.cookie='aprobadas_julio='+aprobadas_julio+'';

        var aprobadas_agosto = '$total_aprobadas_agosto';
        document.cookie='aprobadas_agosto='+aprobadas_agosto+''; 

        var aprobadas_septiembre = '$total_aprobadas_septiembre';
        document.cookie='aprobadas_septiembre='+aprobadas_septiembre+''; 

        var aprobadas_octubre = '$total_aprobadas_octubre';
        document.cookie='aprobadas_octubre='+aprobadas_octubre+''; 

        var aprobadas_noviembre = '$total_aprobadas_noviembre';
        document.cookie='aprobadas_noviembre='+aprobadas_noviembre+''; 

        var aprobadas_diciembre = '$total_aprobadas_diciembre';
        document.cookie='aprobadas_diciembre='+aprobadas_diciembre+'';



        var indicador_cumplimiento = '$total_indicador_cumplimiento';
        document.cookie='indicador_cumplimiento='+indicador_cumplimiento+'';

        
        var indicador_cumplimiento_presente = '$cumplimiento_presente';
        document.cookie='indicador_cumplimiento_presente='+indicador_cumplimiento_presente+'';


        var indicador_eficacia_presente = '$total_indicador_eficacia';
        document.cookie='indicador_eficacia_presente='+indicador_eficacia_presente+'';



        var indicador_pnfa = '$total_indicador_pnfa';
        document.cookie='indicador_pnfa='+indicador_pnfa+'';
   		
   		var indicador_pnfi = '$total_indicador_pnfi';
        document.cookie='indicador_pnfi='+indicador_pnfi+'';

        var indicador_pnft = '$total_indicador_pnft';
        document.cookie='indicador_pnft='+indicador_pnft+'';

        var indicador_preescolar = '$total_indicador_preescolar';
        document.cookie='indicador_preescolar='+indicador_preescolar+'';

        var indicador_trabajo_social = '$total_indicador_trabajo_social';
        document.cookie='indicador_trabajo_social='+indicador_trabajo_social+'';

    </script>"

?>