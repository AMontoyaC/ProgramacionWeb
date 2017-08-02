<?php
session_start();
	//mandar llamar la conexion, importa la clase
	require('conexion_class.php');

	class Canasta
	{
		private $cantidad;
		private $total;
		private $id_prod;
		private $id_cliente;
        
		private $con;

		//asignar valores de junto con un cnstructor sobrecargado
		function __construct($cantidad,$total,$id_prod,$id_cliente)
		{
			$this -> cantidad = $cantidad;
			$this -> total = $total;
			$this -> id_prod = $id_prod;
			//$this -> id_cliente = $id_cliente;

			$objConexion =  new conexion();
			$this-> conADO = $objConexion->conectarADO();
		}

		public function insCanasta()
		{
				$this -> id_cliente = $_SESSION['id_cliente'];

					$qry_can = "CALL insCanasta(0,'".$this -> cantidad."'
						,'".$this -> total."'
						,'".$this -> id_prod."'
						,'".$_SESSION['id_cliente']."',1);";
				

					//echo $qry_can;
					$this -> conADO -> Execute($qry_can);		
					echo("<script>window.location = '../vista/compra.html';</script>");
		}

		public function getCanasta()
		{
			$qry_ctes = "select * from canasta";
			$con_ctes = mysql_query($qry_ctes,$this -> con);
			return $con_ctes;//con_ctes es como un resultset 
		}
	}
?>

