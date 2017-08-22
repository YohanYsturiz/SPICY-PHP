<?php

class conexionPGSQL {

	  private $user;
        private $clave;
        private $servidor;
        private $db;
        private $port;
        private $conexion;

	public function cargar_valores () {

		$this->servidor='localhost';
		$this->db='sig_cuc';
		$this->user='postgres';
		$this->clave='1234';
		$this->conexion="host='$this->servidor' dbname='$this->db' user='$this->user' password='$this->clave'";

	}

	public function conectar() {

		$this->cargar_valores();
		$this->url=pg_connect($this->conexion);
		return true;
	}

	function destruir() {

		pg_close($this->url);
	}

}


?>
