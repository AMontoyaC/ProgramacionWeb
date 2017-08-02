<?php
session_start();
	//mandar llamar la conexion, importa la clase
	require('conexion_class.php');

	class Clientes
	{
		private $nomcte;
		private $apepat;
		private $apemat;
		private $dircte;
		private $ciucte;
		private $cpcte;
		private $telcte;
		private $emailcte;
		private $usuariocte;
		private $passwordcte;

		private $auxpass;

		private $conADO;
		private $con;


		//asignar valores de junto con un cnstructor sobrecargado
		function __construct($nomcte,$apepat,$apemat,$dircte,$ciucte,$cpcte,$telcte,$emailcte,$usuariocte,$passwordcte)
		{
			$this -> nomcte = $nomcte;
			$this -> apepat = $apepat;
			$this -> apemat = $apemat;
			$this -> dircte = $dircte;
			$this -> ciucte = $ciucte;
			$this -> cpcte = $cpcte;
			$this -> telcte = $telcte;
			$this -> emailcte = $emailcte;
			$this -> confemailcte = $confemailcte;
			$this -> usuariocte = $usuariocte;
			$this -> passwordcte = $passwordcte;

			$objConexion =  new conexion();
			$this -> conADO = $objConexion -> conectarADO();

			$this -> con = $objConexion -> conectar();
		}

		public function insClienteADO()
		{
			$this -> generarPassword();

			$qry_cte = "CALL insertarCtes('".$this -> nomcte."'
						,'".$this -> apepat."'
						,'".$this -> apemat."'
						,'".$this -> dircte."'
						,'".$this -> ciucte."'
						,'".$this -> cpcte."'
						,'".$this -> telcte."'
						,'".$this -> emailcte."'
						,'".$this -> usuariocte."'
						,'".$this -> passwordcte."');";
			//echo "\n";
			//echo $qry_cte;

			$this -> conADO -> Execute($qry_cte);

			$qry = "SELECT * FROM usuario where usuario='".$this -> usuariocte."';";
			$result = $this -> conADO ->Execute($qry);
			$row_cnt = $result -> RecordCount();
			if ($row_cnt <= 0) {
          		echo "<script type='text/javascript'>alert('No se registro correctamente');</script>";
          		echo("<script>window.location = '../vista/inicio.php';</script>");
          	}
          	else{
          		//echo("<script>window.location = '../vista/registrocorrecto.html';</script>");
          		echo("<script>window.location = 'http://localhost:8080/phpmailer/envio_correo.php?direccion=".$this->emailcte."&usuario=".$this->usuariocte."&password=".$this-> auxpass."&nombre=".$this->nomcte."';</script>");
          	}
		}

		public function generarPassword(){
			$caracteres = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
			$length = strlen ($caracteres);
			for($i=0;$i<8;$i++){
				$l = rand(0,$length);
				$n = $caracteres[$l];
				$aux=$aux.$n;
			}
			//echo $aux;
			$this-> auxpass=$aux;
			echo "<script type='text/javascript'>alert('$aux');</script>";
			$this -> passwordcte = md5($aux);
		}

		public function iniciarsesionADO(){
			$qry_is = "select * from usuario where usuario = '". $this -> usuariocte."' AND password = '".md5($this -> passwordcte)."'";
			$resultis = $this -> conADO ->Execute($qry_is);
			$row_cnt_is = $resultis -> RecordCount();
			if ($row_cnt_is <= 0) {
          		echo "<script type='text/javascript'>alert('Inicio sesion incorrecto');</script>";
          		echo("<script>window.location = '../vista/inicio.php';</script>");
          	}
          	else{
          		/*
          		$qry_idc= "select id_cliente from usuario where usuario = '". $this -> usuariocte."';";
				$resultidc = $this -> conADO ->Execute($qry_idc);
				echo $resultidc;
				$_SESSION['id_cliente']=$resultidc;
				*/
				
				$qry_ctes = "select id_cliente from usuario where usuario = '". $this -> usuariocte."';";
				$con_ctes = mysql_query($qry_ctes,$this -> con);

				while($dat_cte = mysql_fetch_array($con_ctes))//fetch array, se mueve al siguiente
				{
					$_SESSION['id_cliente']=$dat_cte['id_cliente'];
				}

				/*
				//ver variables de sesion
				foreach ($_SESSION as $variable => $valor){ 
  				echo $variable." = ".$valor."<br>"; 
				}*/

          		echo "<script type='text/javascript'>alert('Bienvenido');</script>";
          		echo("<script>window.location = '../vista/inicio.php';</script>");
          	}			
		}
	}
?>