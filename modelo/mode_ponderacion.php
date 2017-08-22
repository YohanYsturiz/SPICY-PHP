<?php
class ponderacion
	
	{
	    private $aprobado;
	    private $cod_inv;
	    private $fk_cod_usuario;
	    private $cod_ponderacion;
	    private $pgconn;
        
    	function inicializar($aprobado,$cod_inv,$fk_cod_usuario,$cod_ponderacion,$pgconn)

    	{
	        $this->aprobado	= $aprobado;
	        $this->cod_inv      = $cod_inv;
	        $this->fk_cod_usuario =$fk_cod_usuario;
	        $this->cod_ponderacion =$cod_ponderacion;
	        $this->pgconn       = $pgconn;
	    }
    
    	public function agregar($aprobado,$cod_inv,$fk_cod_usuario,$pgconn)

    	{
			$query = "insert into sig_cuc.ponderacion (ponderacion,fk_cod_inv_ponderacion,fk_cod_usuario_ponderacion) values('$aprobado','$cod_inv', '$fk_cod_usuario')";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			return $consulta; 	
    	}

    	public function modificar($aprobado,$pgconn)

    	{
			$query = "update sig_cuc.ponderacion set aprobado='$aprobado' where cod_ponderacion = '$cod_ponderacion'";
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
    
    	public function eliminar($cedula,$pgconn)

    	{
			$query = "delete from sig_cuc.usuario where cedula='$cedula'";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			return $consulta; 				
   		 }
   
    
    	public function consultarponderacion($pgconn)
    	
    	{
 			$query = "select * from sig_cuc.ponderacion";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   			{
					return $consulta;
				}		    	
	   	}
	   
    	public function consultaroldponderacion($cod_inv)
    	
    	{
 			$query = "select * from sig_cuc.ponderacion where fk_cod_inv_ponderacion = '$cod_inv'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
				return $nreg ;
			}
	   }
	}

?> 
