<?php

class investigaciones{
    private $nombre_inv;
    private $autor;
    private $tutor;
    private $tipo_inv;
    private $otro_autor;
    private $fecha_ini;
    private $fecha_c;
    private $lugar_inv;
    private $status;
    private $linea_investigacion;
    private $archivo;
    private $precio;
    private $cod_usuario;
    private $cod_inv;
    //private $file_inv;
    // private $pgconn;

    function inicializar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_ini,$fecha_c,$lugar_inv,$status,$linea_investigacion,$archivo,$precio,$cod_usuario,$cod_inv,$pgconn){
    
    	$this->nombre_inv = $nombre_inv;
    	$this->autor = $autor;
    	$this->tutor = $tutor;
    	$this->tipo_inv = $tipo_inv;
    	$this->otro_autor = $otro_autor;
        $this->fecha_ini = $fecha_ini;
    	$this->fecha_c = $fecha_c;
    	$this->lugar_inv = $lugar_inv;
    	$this->status = $status;
        $this->linea_investigacion = $linea_investigacion;
        $this->archivo = $archivo;
        $this->precio = $precio;
        $this->cod_usuario =$cod_usuario;
        $this->cod_inv =$cod_inv;
        $this->pgconn = $pgconn;
    	//$this->file_inv = $file_inv;
    	// $this->trayecto = $trayecto;
    	// $this->trimestre = $trimestre;
    	// $this->turno = $turno;
    	// $this->seccion = $seccion;
     //    $this->actividad_option = $actividad_option;
    	

    }
    
    public function agregar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_ini,$fecha_c,$lugar_inv,$status,$linea_investigacion,$archivo,$precio,$cod_usuario,$pgconn){
				$query = "insert into sig_cuc.investigaciones (nombre_inv,autor,tutor,tipo_inv,otro_autor,fecha_ini,fecha_c,lugar_inv,status,linea_investigacion,archivo,precio,fk_cod_usuario) values('$nombre_inv','$autor','$tutor','$tipo_inv','$otro_autor','$fecha_ini','$fecha_c','$lugar_inv','$status','$linea_investigacion','$archivo','$precio','$cod_usuario')";
				$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
				return $consulta; 	
    			}
    public function modificar($nombre_inv,$autor,$tutor,$tipo_inv,$otro_autor,$fecha_ini,$fecha_c,$lugar_inv,$status,$linea_investigacion,$archivo,$precio,$pgconn){
				$query = "update sig_cuc.investigaciones set nombre_inv='$nombre_inv', autor='$autor', tutor='$tutor', tipo_inv='$tipo_inv', otro_autor='$otro_autor',fecha_ini='$fecha_ini', fecha_c='$fecha_c', lugar_inv='$lugar_inv', status='$status', linea_investigacion='$linea_investigacion', archivo='$archivo', precio='$precio' where nombre_inv= '$nombre_inv'";
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
    public function modificarstatus($status,$cod_inv,$pgconn){
                $query = "update sig_cuc.investigaciones set  status='$status' where cod_inv= '$cod_inv'";
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
