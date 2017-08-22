<?php

class fechas_semestre{
    private $semestre_uno_ini;
    private $semestre_uno_c;
    private $semestre_dos_ini;
    private $semestre_dos_c;
    private $cod_calendario;
    // private $pgconn;

    function inicializar($semestre_uno_ini,$semestre_uno_c,$semestre_dos_ini,$semestre_dos_c,$cod_calendario,$pgconn){
    
    	$this->semestre_uno_ini = $semestre_uno_ini;
    	$this->semestre_uno_c = $semestre_uno_c;
    	$this->semestre_dos_ini = $semestre_dos_ini;
    	$this->semestre_dos_c = $semestre_dos_c;
        $this->cod_calendario = $cod_calendario;
        $this->pgconn = $pgconn;
    }
    
    public function agregar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_ini,$fecha_c,$lugar_inv,$status,$linea_investigacion,$archivo,$precio,$cod_usuario,$pgconn){
				$query = "insert into sig_cuc.investigaciones (nombre_inv,autor,tutor,tipo_inv,otro_autor,fecha_ini,fecha_c,lugar_inv,status,linea_investigacion,archivo,precio,fk_cod_usuario) values('$nombre_inv','$autor','$tutor','$tipo_inv','$otro_autor','$fecha_ini','$fecha_c','$lugar_inv','$status','$linea_investigacion','$archivo','$precio','$cod_usuario')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificarfechas($semestre_uno_ini,$semestre_uno_c,$semestre_dos_ini,$semestre_dos_c,$cod_calendario,$pgconn){
				$query = "update sig_cuc.calendario set semestre_uno_ini='$semestre_uno_ini', semestre_uno_c='$semestre_uno_c', semestre_dos_ini='$semestre_dos_ini', semestre_dos_c='$semestre_dos_c' where cod_calendario='$cod_calendario'";
				$rec = pg_query($pgconn,$query) or die ("Consulta errónea: ".pg_last_error());
				if ($rec) 
	   			{
		   			return "ok";
					}	
				else 
					{
		   			return "nok";
					}		

    }

    public function eliminar($nombre_inv,$pgconn){
				$query = "delete from sig_cuc.investigaciones where nombre_inv='$nombre_inv'";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 				
    }
   
   public function consultarinvestigaciones($pgconn)
    	{
 			$query = "select * from sig_cuc.investigaciones";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
					return $consulta;
				}		    	
	   }
	   
    public function consultarUNAfecha_semestre($cod_calendario)
    	{
 			$query = "select * from sig_cuc.calendario where cod_calendario='$cod_calendario'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
					return $nreg ;
				}
	   }
 }



?> 
