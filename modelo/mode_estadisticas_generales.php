<?php

class estadisticas{
    private $numero_eventoiniciado;
    private $numero_eventosolicitud;
    private $numero_eventodesarrollo;
    private $numero_eventofinalizado;
    private $numero_eventostatusaprobado;
    public  $cod_usuario; 


//Estadisticas de eventos

    public function contar_eventos_iniciado()
     {

         $query = "select count(*) AS numero_eventoiniciado
                     from sig_cuc.evento
                     where estatus_e='iniciado'"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;        

    }

    public function contar_eventos_solicitud()
     {

         $query = "select count(*) AS numero_eventosolicitud
                  from sig_cuc.evento
                  where estatus_e='solicitud'"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;        

    }

    public function contar_eventos_desarrollo()
     {

         $query = "select count(*) AS numero_eventodesarrollo
                from sig_cuc.evento
                where estatus_e='desarrollo'"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;        

    }
  
   public function contar_eventos_finalizado()
     {

         $query = "select count(*) AS numero_eventofinalizado
                 from sig_cuc.evento
                 where estatus_e='finalizado'"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;        

    }

    public function contar_eventos_aprobado()
     {

         $query = "select count(*) AS numero_eventostatusaprobado
                from sig_cuc.evento
                where estatus_e='aprobado'"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;        

     }

// Estadisticas de Investigaciones

    public function contar_investigaciones_iniciado()
     {

         $query = "select count(*) AS numero_investigacionesstatusi
                    from sig_cuc.investigaciones
                    where status='iniciado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function contar_investigaciones_solicitud()
     {

         $query = "select count(*) AS numero_investigacionesstatusso
                    from sig_cuc.investigaciones
                    where status='solicitud'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function contar_investigaciones_desarrollo()
     {

         $query = "select count(*) AS numero_investigacionesstatusde
                    from sig_cuc.investigaciones
                    where status='desarrollo'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function contar_investigaciones_finalizado()
     {

         $query = "select count(*) AS numero_investigacionesstatusfi
                    from sig_cuc.investigaciones
                    where status='finalizado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

        //Revisiones por Semestre 1, 2

      public function fechas_semestre_uno()
     {
         $query = "select semestre_uno_ini as semestre_uno_inicio from sig_cuc.calendario;"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

          public function fechas_semestre_uno_c()
     {
         $query = "select semestre_uno_c as semestre_uno_culmina from sig_cuc.calendario;"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 
          public function fechas_semestre_dos_ini()
     {
         $query = "select semestre_dos_ini as semestre_dos_inicio from sig_cuc.calendario;"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

          public function fechas_semestre_dos_c()
     {
         $query = "select semestre_uno_c as semestre_dos_culmina from sig_cuc.calendario;"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

     //POR AQUI!!
      public function contar_investigaciones_finalizado_semestre_uno()
     {

        $estadistica = new estadisticas();
        $consulta_semestre_uno_ini = $estadistica->fechas_semestre_uno();
        $semestre_uno_ini = pg_fetch_array($consulta_semestre_uno_ini);
        $semestre_uno_inicio = $semestre_uno_ini['semestre_uno_inicio'];

        $consulta_semestre_uno_c = $estadistica->fechas_semestre_uno_c();
        $semestre_uno_c = pg_fetch_array($consulta_semestre_uno_c);
        $semestre_uno_culmina = $semestre_uno_c['semestre_uno_culmina'];

        $query = "select count(*) as semestre_uno from sig_cuc.investigaciones where status='finalizado' and fecha_c between '$semestre_uno_inicio' and '$semestre_uno_culmina';"; 
        $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
        return $consulta;     


     } 

           public function contar_investigaciones_finalizado_semestre_dos()
     {
         $estadistica = new estadisticas();
         $consulta_semestre_dos_ini = $estadistica->fechas_semestre_dos_ini();
         $semestre_dos_ini = pg_fetch_array($consulta_semestre_dos_ini);
         $semestre_dos_inicio = $semestre_dos_ini['semestre_dos_inicio'];

         $consulta_semestre_dos_c = $estadistica->fechas_semestre_dos_c();
         $semestre_dos_c = pg_fetch_array($consulta_semestre_dos_c);
         $semestre_dos_culmina = $semestre_dos_c['semestre_dos_culmina'];

         $query = "select count(*) as semestre_dos from sig_cuc.investigaciones where status='finalizado' and fecha_c between '$semestre_dos_inicio' and '2016-12-20';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function contar_investigaciones_aprobado()
     {

         $query = "select count(*) as numero_investigaciones_aprobadas from sig_cuc.investigaciones
                    inner join  sig_cuc.usuario
                    on fk_cod_usuario=usuario.cod_usuario
                    inner join sig_cuc.ponderacion
                    on fk_cod_inv_ponderacion=investigaciones.cod_inv
                    where status='finalizado' and ponderacion='aprobado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Estadisticas Trimestrales "Metas"

      public function total_usuarios()
     {

         $query = "select count(*) AS numero_usuarios
                    from sig_cuc.usuario"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      //Estadisticas x usuario eventos

      public function estadisticas_x_usuario_evento_iniciado($cod_usuario)
     {

         $query = "select count(*) AS numero_eventoiniciado_usuario
                     from sig_cuc.evento
                     where fk_cod_usuario='$cod_usuario' and  estatus_e='iniciado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_evento_solicitud($cod_usuario)
     {

         $query = "select count(*) AS numero_eventosolicitud_usuario
                     from sig_cuc.evento
                     where fk_cod_usuario='$cod_usuario' and  estatus_e='solicitud'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

        public function estadisticas_x_usuario_evento_desarrollo($cod_usuario)
     {

         $query = "select count(*) AS numero_eventodesarrollo_usuario
                     from sig_cuc.evento
                     where fk_cod_usuario='$cod_usuario' and  estatus_e='desarrollo'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_evento_finalizado($cod_usuario)
     {

         $query = "select count(*) AS numero_eventofinalizado_usuario
                     from sig_cuc.evento
                     where fk_cod_usuario='$cod_usuario' and  estatus_e='finalizado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_evento_aprobado($cod_usuario)
     {

         $query = "select count(*) AS numero_eventostatusaprobado_usuario
                     from sig_cuc.evento
                     where fk_cod_usuario='$cod_usuario' and  estatus_e='aprobado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Estadisticas por usuario investigaciones

       public function estadisticas_x_usuario_investigacion_iniciado($cod_usuario)
     {

         $query = "select count(*) AS numero_investigacion_aprobado_usuario
                    from sig_cuc.investigaciones
                    where fk_cod_usuario='$cod_usuario' and  status='iniciado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_investigacion_solicitud($cod_usuario)
     {

         $query = "select count(*) AS numero_investigacion_solicitud_usuario
                    from sig_cuc.investigaciones
                    where fk_cod_usuario='$cod_usuario' and  status='solicitud'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_investigacion_desarrollo($cod_usuario)
     {

         $query = "select count(*) AS numero_investigacion_desarrollo_usuario
                    from sig_cuc.investigaciones
                    where fk_cod_usuario='$cod_usuario' and  status='desarrollo'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_investigacion_finalizado($cod_usuario)
     {

         $query = "select count(*) AS numero_investigacion_finalizado_usuario
                    from sig_cuc.investigaciones
                    where fk_cod_usuario='$cod_usuario' and  status='finalizado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_x_usuario_investigacion_aprobado($cod_usuario)
     {

         $query = "select count(*) AS numero_investigacion_aprobado_usuario
                    from sig_cuc.investigaciones
                    where fk_cod_usuario='$cod_usuario' and  status='aprobado'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Estadisticas de investigaciones en finalizado por meses

    public function estadisticas_entregado_enero()
     {

         $query = "select count(*) as entregado_enero from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

    public function estadisticas_entregado_febrero()
     {

         $query = "select count(*) as entregado_febrero from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

     public function estadisticas_entregado_marzo()
     {

         $query = "select count(*) as entregado_marzo from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_abril()
     {

         $query = "select count(*) as entregado_abril from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_mayo()
     {

         $query = "select count(*) as entregado_mayo from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_junio()
     {

         $query = "select count(*) as entregado_junio from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_julio()
     {

         $query = "select count(*) as entregado_julio from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_agosto()
     {

         $query = "select count(*) as entregado_agosto from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_septiembre()
     {

         $query = "select count(*) as entregado_septiembre from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_entregado_octubre()
     {

         $query = "select count(*) as entregado_octubre from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-10-01' and '2016-10-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_entregado_noviembre()
     {

         $query = "select count(*) as entregado_noviembre from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_diciembre()
     {

         $query = "select count(*) as entregado_diciembre from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }


      //Estadisticas de investigaciones finalizadas y aprobadas por meses
     
      public function estadisticas_aprobadas_enero()
     {

         $query = "select count(*) as aprobadas_enero from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_aprobadas_febrero()
     {

         $query = "select count(*) as aprobadas_febrero from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_marzo()
     {

         $query = "select count(*) as aprobadas_marzo from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_abril()
     {

         $query = "select count(*) as aprobadas_abril from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_mayo()
     {

         $query = "select count(*) as aprobadas_mayo from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_junio()
     {

         $query = "select count(*) as aprobadas_junio from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado'  and ponderacion= 'aprobado'  and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_julio()
     {

         $query = "select count(*) as aprobadas_julio from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado'  and ponderacion= 'aprobado'  and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_agosto()
     {

         $query = "select count(*) as aprobadas_agosto from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_septiembre()
     {

         $query = "select count(*) as aprobadas_septiembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_octubre()
     {

         $query = "select count(*) as aprobadas_octubre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-10-01' and '2016-10-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_noviembre()
     {

         $query = "select count(*) as aprobadas_noviembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado'  and ponderacion= 'aprobado'  and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_diciembre()
     {

         $query = "select count(*) as aprobadas_diciembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and ponderacion= 'aprobado'  and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Estadisticas de investigaciones en desarrollo por meses
        
          public function estadisticas_desarrollo_enero()
     {

         $query = "select count(*) as desarrollo_enero from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

    public function estadisticas_desarrollo_febrero()
     {

         $query = "select count(*) as desarrollo_febrero from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

     public function estadisticas_desarrollo_marzo()
     {

         $query = "select count(*) as desarrollo_marzo from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_abril()
     {

         $query = "select count(*) as desarrollo_abril from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_mayo()
     {

         $query = "select count(*) as desarrollo_mayo from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_junio()
     {

         $query = "select count(*) as desarrollo_junio from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_julio()
     {

         $query = "select count(*) as desarrollo_julio from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_agosto()
     {

         $query = "select count(*) as desarrollo_agosto from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_septiembre()
     {

         $query = "select count(*) as desarrollo_septiembre from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_desarrollo_octubre()
     {

         $query = "select count(*) as desarrollo_octubre from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-10-01' and '2016-10-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_desarrollo_noviembre()
     {

         $query = "select count(*) as desarrollo_noviembre from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_diciembre()
     {

         $query = "select count(*) as desarrollo_diciembre from sig_cuc.investigaciones where status='desarrollo' and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     
     //Indicador por usuario de cumplimiento. 

     public function indicador_cumplimiento($cod_usuario)
     {

         $query = "select sum(cantidad) as cantidad_total from sig_cuc.objetivo where fk_cod_usuario_objetivo='1'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }


    public function indicador_eficacia()
     {

         $query = "select count(*) AS investigacion_aprobada
                    from sig_cuc.ponderacion"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Indicador para las lineas de investigacion

      public function indicador_investigacion_pnfa()
     {

         $query = "select count(*) as investigaciones_pnfa from sig_cuc.investigaciones where linea_investigacion='PNFA' and status='finalizado';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function indicador_investigacion_pnfi()
     {

         $query = "select count(*) as investigaciones_pnfi from sig_cuc.investigaciones where linea_investigacion='PNFI' and status='finalizado';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function indicador_investigacion_pnft()
     {

         $query = "select count(*) as investigaciones_pnft from sig_cuc.investigaciones where linea_investigacion='PNFT' and status='finalizado';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

       public function indicador_investigacion_preescolar()
     {

         $query = "select count(*) as investigaciones_preescolar from sig_cuc.investigaciones where linea_investigacion='PREESCOLAR' and status='finalizado';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function indicador_investigacion_trabajo_social()
     {

         $query = "select count(*) as investigaciones_trabajo_social from sig_cuc.investigaciones where linea_investigacion='TRABAJO SOCIAL' and status='finalizado';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }
}

?> 
