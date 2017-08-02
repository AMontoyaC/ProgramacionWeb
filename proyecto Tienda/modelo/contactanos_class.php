<?php
	//mandar llamar la conexion, importa la clase
	require('conexion_class.php');

	class Contactanos
	{
		private $nomc;
		private $emailc;
		private $asuntoc;
		private $mensajec;

		private $conADO;
		//asignar valores de junto con un cnstructor sobrecargado
		function __construct($nomc,$emailc,$asuntoc,$mensajec)
		{
			$this -> nomc = $nomc;
			$this -> emailc = $emailc;
			$this -> asuntoc = $asuntoc;
			$this -> mensajec = $mensajec;

			$objConexion =  new conexion();
			$this -> conADO = $objConexion -> conectarADO();
		}

		public function enviarDuda()
		{
			echo("<script>window.location ='http://localhost:8080/phpmailer/envio_correoC.php?nombre=".$this->nomc."&email=".$this->emailc."&asunto=".$this->asuntoc."&mensaje=".$this->mensajec."';</script>");
		}
	}
	?>


	