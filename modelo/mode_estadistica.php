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

      public function contar_investigaciones_finalizado_semestre_uno()
     {

         $query = "select count(*) as semestre_uno from sig_cuc.investigaciones where status='finalizado' and fecha_c between '2016-01-15' and '2016-06-27';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

      public function contar_investigaciones_aprobado()
     {

         $query = "select count(*) AS numero_investigacionesstatusaprobado
                    from sig_cuc.investigaciones
                    where status='aprobado'"; 
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

     //Estadisticas de investigaciones en finalizado por meses x cada usuario

    public function estadisticas_entregado_enero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_enero from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

    public function estadisticas_entregado_febrero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_febrero from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     } 

     public function estadisticas_entregado_marzo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_marzo from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_abril_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_abril from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_mayo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_mayo from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_junio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_junio from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_julio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_julio from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_agosto_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_agosto from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_septiembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_septiembre from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_entregado_octubre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_octubre from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-10-01' and '2016-10-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_entregado_noviembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_noviembre from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_entregado_diciembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as entregado_diciembre from sig_cuc.investigaciones where status='finalizado' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }


      //Estadisticas de investigaciones finalizadas y aprobadas por meses x cada usuario
     
      public function estadisticas_aprobadas_enero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_enero from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_aprobadas_febrero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_febrero from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_marzo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_marzo from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_abril_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_abril from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_mayo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_mayo from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_junio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_junio from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_julio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_julio from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_agosto_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_agosto from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_septiembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_septiembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_octubre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_octubre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-10-01' and '2016-10-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_noviembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_noviembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_aprobadas_diciembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as aprobadas_diciembre from sig_cuc.ponderacion 
  inner join sig_cuc.investigaciones on fk_cod_inv_ponderacion = investigaciones.cod_inv where status='finalizado' and fk_cod_usuario_ponderacion='$cod_usuario' and ponderacion= 'aprobado'  and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     //Estadisticas de investigaciones en desarrollo por meses x cada usuario
      public function estadisticas_desarrollo_enero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_enero from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-01-01' and '2016-01-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

      public function estadisticas_desarrollo_febrero_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_febrero from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-02-01' and '2016-02-29';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_marzo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_marzo from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-03-01' and '2016-03-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_abril_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_abril from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-04-01' and '2016-04-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_mayo_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_mayo from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-05-01' and '2016-05-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_junio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_junio from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-06-01' and '2016-06-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_julio_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_julio from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-07-01' and '2016-07-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_agosto_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_agosto from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-08-01' and '2016-08-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_septiembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_septiembre from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-09-01' and '2016-09-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_octubre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_octubre from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-10-01' and '2016-10-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_noviembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_noviembre from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-11-01' and '2016-11-30';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     public function estadisticas_desarrollo_diciembre_x_usuario($cod_usuario)
     {

         $query = "select count(*) as desarrollo_diciembre from sig_cuc.investigaciones where status='desarrollo' and fk_cod_usuario='$cod_usuario' and fecha_c between '2016-12-01' and '2016-12-31';"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }

     
     //Indicador por usuario de cumplimiento. 

     public function indicador_usuario_cumplimiento($cod_usuario)
     {

         $query = "select sum(cantidad) as cantidad_total from sig_cuc.objetivo where fk_cod_usuario_objetivo='$cod_usuario'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }


    public function indicador_usuario_eficacia($cod_usuario)
     {

         $query = "select count(*) AS investigacion_aprobada
                    from sig_cuc.ponderacion
                    where fk_cod_usuario_ponderacion='$cod_usuario'"; 
         $consulta = pg_query($query) or die ("Consulta errónea: ".pg_last_error());
         return $consulta;        

     }
}

?> 
