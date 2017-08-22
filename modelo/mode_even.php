<?php
class eventos{
    private $evento;
    private $tipo_ev;
    private $linea_investigacion;
    private $lider;
    private $invitados;
    private $fecha_ini_e;
    private $fecha_cu_eve;
    private $lugar_e;
    private $tema;
    private $facilitador;
    private $asistencia;
    private $estatus_e;
    private $archivo_e;
    private $descripcion;
    // private $trayecto;
    // private $trimestre;
    // private $turno;
    // private $seccion;
    // private $pgconn;

    function inicializar($evento,$tipo_ev,$linea_investigacion,$lider,$invitados,$fecha_ini_e,$fecha_cu_eve,$lugar_e,$tema,$facilitador,$asistencia,$estatus_e,$archivo_e,$descripcion,$cod_usuario,$pgconn){
    
    	$this->evento = $evento;
    	$this->tipo_ev = $tipo_ev;
        $this->linea_investigacion = $linea_investigacion;
    	$this->lider = $lider;
        $this->invitados = $invitados;
    	$this->fecha_ini_e = $fecha_ini_e;
        $this->fecha_cu_eve = $fecha_cu_eve;
    	$this->lugar_e = $lugar_e;
    	$this->tema = $tema;
    	$this->facilitador = $facilitador;
        $this->asistencia = $asistencia;
        $this->estatus_e = $estatus_e;
        $this->archivo_e = $archivo_e;
        $this->descripcion = $descripcion;
        $this->cod_usuario = $cod_usuario;
        $this->pgconn = $pgconn;
    	//$this->file_inv = $file_inv;
    	// $this->trayecto = $trayecto;
    	// $this->trimestre = $trimestre;
    	// $this->turno = $turno;
    	// $this->seccion = $seccion;
        //$this->actividad_option = $actividad_option;
    	

    }
    
    public function agregar($evento,$tipo_ev,$linea_investigacion,$lider,$invitados,$fecha_ini_e,$fecha_cu_eve,$lugar_e,$tema,$facilitador,$asistencia,$estatus_e,$archivo_e,$descripcion,$cod_usuario,$pgconn){
				$query = "insert into sig_cuc.evento (evento,tipo_ev,linea_investigacion,lider,invitados,fecha_ini_e,fecha_cu_eve,lugar_e,tema,facilitador,asistencia,estatus_e,archivo_e,descripcion,fk_cod_usuario) values('$evento','$tipo_ev','$linea_investigacion','$lider','$invitados','$fecha_ini_e','$fecha_cu_eve','$lugar_e','$tema','$facilitador','$asistencia','$estatus_e','$archivo_e','$descripcion','$cod_usuario')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificar($evento,$invitados,$linea_investigacion,$lider,$tipo_ev,$facilitador,$asistencia,$fecha_ini_e,$fecha_cu_eve,$lugar_e,$tema,$estatus_e,$archivo_e,$descripcion,$pgconn){
				$query = "update sig_cuc.evento set evento='$evento', invitados='$invitados',linea_investigacion='$linea_investigacion',lider='$lider', tipo_ev='$tipo_ev', facilitador='$facilitador',asistencia='$asistencia', fecha_ini_e='$fecha_ini_e', fecha_cu_eve='$fecha_cu_eve', lugar_e='$lugar_e', tema='$tema', estatus_e='$estatus_e', archivo_e='$archivo_e', descripcion='$descripcion' where evento= '$evento'";
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
    public function eliminar($evento,$pgconn){
				$query = "delete from sig_cuc.evento where evento='$evento'";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 				
    }
   
   public function consultareventos($pgconn)
    	{
 			$query = "select * from sig_cuc.evento";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
					return $consulta;
				}		    	
	   }
	   
         public function consultarUNeventos($evento)
        {
            $query = "select * from sig_cuc.evento where evento = '$evento'";
            $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());      
            if ($consulta) 
            {
                $nreg = pg_fetch_array($consulta);
                    return $nreg ;
                }
       }
       
    public function consultarUNeventosget($cod_even)
    	{
 			$query = "select * from sig_cuc.evento where cod_even = '$cod_even'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
					return $nreg ;
				}
	   }
}

?> 
