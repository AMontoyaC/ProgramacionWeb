<?php
	//mandar llamar la conexion, importa la clase
	require('conexion_class.php');

	class Canasta
	{
		private $id_prod;
        
		private $con;

		//asignar valores de junto con un cnstructor sobrecargado
		function __construct($id_prod)
		{
			$this -> id_prod = $id_prod;

			$objConexion =  new conexion();
			$this -> con = $objConexion -> conectar();
		}

		public function busP()
		{
					$qry_b = "CALL busP(
						'".$this -> id_prod."');";
				

					echo $qry_b;
					$busca = mysql_query($qry_b,$this -> con);		
		}
	}
?>

