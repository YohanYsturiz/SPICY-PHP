<?php
session_start();

class eventos{
    private $evento;
    private $tipo_ev;
    private $invitados;
    private $fecha_e;
    private $lugar_e;
    //private $id_e;
    private $tema;
    private $facilitador;
    private $asistencia;
    // private $trayecto;
    // private $trimestre;
    // private $turno;
    // private $seccion;
    // private $pgconn;

    function inicializar($evento,$tipo_ev,$invitados,$fecha_e,$lugar_e,$tema,$facilitador,$asistencia,$pgconn){
    
    	$this->evento = $evento;
    	$this->tipo_ev = $tipo_ev;
    	$this->invitados = $invitados;
    	$this->fecha_e = $fecha_e;
    	$this->lugar_e = $lugar_e;
    	//$this->id_e = $id_e;
    	$this->tema = $tema;
    	$this->facilitador = $facilitador;
        $this->asistencia = $asistencia;
        $this->pgconn = $pgconn;
    	//$this->file_inv = $file_inv;
    	// $this->trayecto = $trayecto;
    	// $this->trimestre = $trimestre;
    	// $this->turno = $turno;
    	// $this->seccion = $seccion;
     //    $this->actividad_option = $actividad_option;
    	

    }
    
    public function agregar($evento,$tipo_ev,$invitados,$fecha_e,$lugar_e,$tema,$facilitador,$asistencia,$pgconn){
				$query = "insert into sig_cuc.evento (evento,tipo_ev,invitados,fecha_e,lugar_e,tema,facilitador,asistencia) values('$evento','$tipo_ev','$invitados','$fecha_e','$lugar_e','$tema','$facilitador','$asistencia')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificar($evento,$tipo_ev,$invitados,$fecha_e,$lugar_e,$tema,$facilitador,$asistencia,$pgconn){
				$query = "update sig_cuc.evento set evento='$evento', tipo_ev='$tipo_ev', invitados='$invitados', fecha_e='$fecha_e', lugar_e='$lugar_e', tema='$tema', facilitador='$facilitador', asistencia='$asistencia' where evento= '$evento'";
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
}

?> 
