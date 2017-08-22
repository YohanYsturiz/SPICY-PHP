<?php
session_start();

class usuario
	
	{
	    private $apellidos;
	    private $nombres;
	    private $usuario;
	    private $clave;
	    private $cedula;
	    private $pgconn;

    	function inicializar($apellidos,$nombres,$usuario,$clave,$cedula,$pgconn)

    	{
	        $this->apellidos	= $apellidos;
	        $this->nombres 		= $nombres;
	        $this->usuario 		= $usuario;
	        $this->clave 		= $clave;
	        $this->cedula 		= $cedula;
	        $this->pgconn       = $pgconn;
	    }
    
    	public function agregar($usuarioN,$claveN,$nombres,$apellidos,$cedulaN,$pgconn)

    	{
			$query = "insert into sig_cuc.usuario (usuario,clave,nombres,apellidos,cedula) values('$usuarioN', '$claveN', '$nombres', '$apellidos','$cedulaN')";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			return $consulta; 	
    	}

    	public function modificar($cedula,$usuario,$clave,$apellidos,$nombres,$pgconn)

    	{
			$query = "update sig_cuc.usuario set usuario='$usuario', clave='$clave', apellidos='$apellidos', nombres='$nombres' where cedula= '$cedula'";
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
   
   		public function autenticar($clave,$usuario,$pgconn)

   		{
			$query = "select cedula from sig_cuc.usuario where usuario='$usuario' and clave = '$clave'";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			if($consulta) 
	   			{
	   				$columna = pg_fetch_array($consulta);
	   				return $columna;
	   			} 
			else 
	   			{
	   				echo "Error en la consulta a la base de Datos"."<br>";
	   			}
    	}
    
    	public function consultarusuarios($pgconn)
    	
    	{
 			$query = "select * from sig_cuc.usuario";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   			{
					return $consulta;
				}		    	
	   	}
	   
    	public function consultarUNusuario($cedula)
    	
    	{
 			$query = "select * from sig_cuc.usuario where cedula = '$cedula'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
				return $nreg ;
			}
	   }
	}

?> 
