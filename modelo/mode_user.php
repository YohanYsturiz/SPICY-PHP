<?php
class usuario
	
	{
	    private $apellidos;
	    private $nombres;
	    private $usuario;
	    private $clave;
	    private $cedula;
	    private $correo;
	    private $nivel_academico;
	    private $cargo;
	    private $pgconn;

    	function inicializar($apellidos,$nombres,$usuario,$clave,$cedula,$correo,$nivel_academico,$cargo,$pgconn)

    	{
	        $this->apellidos	= $apellidos;
	        $this->nombres 		= $nombres;
	        $this->usuario 		= $usuario;
	        $this->clave 		= $clave;
	        $this->cedula 		= $cedula;
	        $this->cargo 		= $cargo;
	        $this->correo 		= $correo;
	        $this->nivel_academico 	= $nivel_academico;
	        $this->pgconn       = $pgconn;
	    }
    
    	public function agregar($usuarioN,$claveN,$nombres,$apellidos,$cedulaN,$cargo,$nivel_academico,$correo,$pgconn)

    	{
			$query = "insert into sig_cuc.usuario (usuario,clave,nombres,apellidos,cedula,cargo,nivel_academico,correo) values('$usuarioN', '$claveN', '$nombres', '$apellidos','$cedulaN','$cargo','$correo','$nivel_academico')";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			return $consulta; 	
    	}

    	public function modificar($cedula,$usuario,$clave,$apellidos,$nombres,$cargo,$correo,$nivel_academico,$pgconn)

    	{
			$query = "update sig_cuc.usuario set usuario='$usuario', clave='$clave', apellidos='$apellidos', nombres='$nombres', correo='$correo', nivel_academico='$nivel_academico', cargo='$cargo', where cedula= '$cedula'";
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

    	public function completar_formulario($usuarioN,$clave,$apellidos,$nombres,$correo,$cargo,$nivel_academico,$cedula,$pgconn)

    	{
			$query = "update sig_cuc.usuario set usuario='$usuarioN', clave='$clave', apellidos='$apellidos', nombres='$nombres', correo='$correo', nivel_academico='$nivel_academico', cargo='$cargo' where cedula= '$cedula'";
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
    
    	public function eliminar($cod_usuario,$pgconn)

    	{
			$query = "delete from sig_cuc.usuario where cod_usuario='$cod_usuario'";
			$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
			return $consulta; 				
   		 }
   
   		public function autenticar($clave,$usuario,$pgconn)

   		{
			$query = "select cod_usuario, cedula from sig_cuc.usuario where usuario='$usuario' and clave = '$clave'";
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

    		public function autenticar_pre_login($cedula,$clave,$pgconn)

   		{
			$query = "select cod_usuario, cedula from sig_cuc.usuario where cedula='$cedula' and clave = '$clave'";
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
	    public function consultarUNusuarioget($cod_usuario)
        {
            $query = "select * from sig_cuc.usuario where cod_usuario = '$cod_usuario'";
            $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());      
            if ($consulta) 
            {
                $nreg = pg_fetch_array($consulta);
                    return $nreg ;
                }
       }
	}

?> 
