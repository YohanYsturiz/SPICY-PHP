<?php
session_start();

class investigaciones{
    private $nombre_inv;
    private $autor;
    private $tutor;
    private $tipo_inv;
    private $otro_autor;
    private $fecha_c;
    private $lugar_inv;
    private $status;
    //private $file_inv;
    // private $trayecto;
    // private $trimestre;
    // private $turno;
    // private $seccion;
    // private $pgconn;

    function inicializar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_c,$lugar_inv,$status,$pgconn){
    
    	$this->nombre_inv = $nombre_inv;
    	$this->autor = $autor;
    	$this->tutor = $tutor;
    	$this->tipo_inv = $tipo_inv;
    	$this->otro_autor = $otro_autor;
    	$this->fecha_c = $fecha_c;
    	$this->lugar_inv = $lugar_inv;
    	$this->status = $status;
        $this->pgconn = $pgconn;
    	//$this->file_inv = $file_inv;
    	// $this->trayecto = $trayecto;
    	// $this->trimestre = $trimestre;
    	// $this->turno = $turno;
    	// $this->seccion = $seccion;
     //    $this->actividad_option = $actividad_option;
    	

    }
    
    public function agregar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_c,$lugar_inv,$status,$pgconn){
				$query = "insert into sig_cuc.investigaciones (nombre_inv,autor,tutor,tipo_inv,otro_autor,fecha_c,lugar_inv,status) values('$nombre_inv','$autor','$tutor','$tipo_inv','$otro_autor','$fecha_c','$lugar_inv','$status')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_c,$lugar_inv,$status,$pgconn){
				$query = "update sig_cuc.investigaciones set nombre_inv='$nombre_inv', autor='$autor', tutor='$tutor', tipo_inv='$tipo_inv', otro_autor='$otro_autor', fecha_c='$fecha_c', lugar_inv='$lugar_inv', status='$status' where nombre_inv= '$nombre_inv'";
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
	   
    public function consultarUNAinvestigaciones($nombre_inv)
    	{
 			$query = "select * from sig_cuc.investigaciones where nombre_inv = '$nombre_inv'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
					return $nreg ;
				}
	   }
}

?> 
