<?php
// lista de eventos
//$json = array();
//$requete = "SELECT * FROM evenement ORDER BY id"

// Conexion a la base de datos
//try {

//$bdd = new PDO ('pg_connect:servidor=localhost; db=sig_cuc', 'root', '');  
//}
//catch (Exception $e ) {
//exit ('imposible realizar la CONEXION');
//}
//$resultat = $bdd->query ($requete) or die  (print_r ($bdd->errorInfo()));
//echo json_encode($resultat->fetchAll (PDO: :FETCH_ASSOC));
?> 
<?php
session_start();

class calendario{
    private $title;
    private $end;
    private $star;
  
    function inicializar($title,$end,$star,$pgconn){
    
    	$this->title = $title;
    	$this->url = $url;
    	$this->star = $star;
    
        $this->pgconn = $pgconn;   
   public function fullcalendar($pgconn)
    	{
 			$query = "select * from sig_cuc.evenement";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
					return $consulta;
				}		    	
	   }
	   
    public function fullcalendaruna($title)
    	{
 			$query = "select * from sig_cuc.evenement where title = '$title'";
			$consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());   	
			if ($consulta) 
	   		{
	   			$nreg = pg_fetch_array($consulta);
					return $nreg ;
				}
	   }
}

?> 
