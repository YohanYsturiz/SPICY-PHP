<?php
 class Connex

    {
        private $user;
        private $clave;
        private $servidor;
        private $db;
        private $port;
        private $conex;

        function Connex()
  {
            $this->user = 'postgres';
            $this->clave='1234';
            $this->servidor = 'localhost';
            $this->db = 'sig_cuc';
            $this->port = 5432;
            $this->conex='';
        }
   public function conectar()
        
        {
        
        $this->conex = pg_connect("host=".$this->servidor." port=".$this->port." password=".$this->clave." user=".$this->user." dbname=".$this->db." ") or die("ERROR DE CONEXION");  
        return $this->conex;
        
        }
    }
?> 
