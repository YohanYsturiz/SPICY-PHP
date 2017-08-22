<?php

class objetivos{
    private $cantidad;
    private $tipo_obj;
    private $cod_usuario;
    private $fecha_culminacion;
    private $ponderacion_obj;
    //private $file_inv;
    // private $pgconn;

    function inicializar($cantidad,$tipo_obj,$cod_usuario,$fecha_culminacion,$ponderacion_obj,$pgconn){
    
    	$this->cantidad = $cantidad;
    	$this->tipo_obj = $tipo_obj;
    	$this->cod_usuario = $cod_usuario;
    	$this->fecha_culminacion = $fecha_culminacion;
        $this->ponderacion_obj = $ponderacion_obj;
        $this->pgconn = $pgconn;
    	
    }
    
    public function agregar($cantidad,$tipo_obj,$cod_usuario,$fecha_culminacion,$ponderacion_obj,$pgconn){
				$query = "insert into sig_cuc.objetivo (cantidad,tipo_obj,fk_cod_usuario_objetivo,fecha_culminacion,ponderacion_obj) values('$cantidad','$tipo_obj','$cod_usuario','$fecha_culminacion','$ponderacion_obj')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificar($cantidad,$tipo_obj,$cod_usuario,$fecha_culminacion,$ponderacion_obj,$pgconn){
				$query = "update sig_cuc.objetivo set cantidad='$cantidad', tipo_obj='$tipo_obj', fk_cod_usuario_objetivo='$cod_usuario', fecha_culminacion='$fecha_culminacion', ponderacion_obj='$ponderacion_obj' where cod_objetivo= '$cod_objetivo'";
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
    public function eliminar($cod_objetivo,$pgconn){
				$query = "delete from sig_cuc.cod_objetivo where cod_objetivo='$cod_objetivo'";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 				
    }
   
   public function consultarobjetivos($pgconn)
    	{
 			$query = "select * from sig_cuc.objetivo";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
					return $consulta;
				}		    	
	   }
	   
    public function consultarUNobjetivos($cod_objetivo)
    	{
 			$query = "select * from sig_cuc.objetivo where cod_objetivo = '$cod_objetivo'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
					return $nreg ;
				}
	   }
     public function consultarUNAinvestigacionesget($cod_inv)
        {
            $query = "select * from sig_cuc.investigaciones where cod_inv = '$cod_inv'";
            $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());      
            if ($consulta) 
            {
                $nreg = pg_fetch_array($consulta);
                    return $nreg ;
                }
       }

     public function contarinvestigaciones($countinv)
     {

          $query = "select count(*) from sig_cuc.investigaciones where status='Solicitud'";
          $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());      
            if ($consulta) 
            {
                $nreg = pg_fetch_array($consulta);
                    return $nreg ;
                }

 }
   public function aprobarinvestigaciones($cod_inv)
        {
            $query = "select * from sig_cuc.investigaciones where cod_inv = '$cod_inv'";
            $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());      
            if ($consulta) 
            {
                $nreg = pg_fetch_array($consulta);
                    return $nreg ;
                }
       }

}

?> 
