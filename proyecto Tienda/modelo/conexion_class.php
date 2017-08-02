<?php
require '../res/adodb5/adodb.inc.php';

class conexion{

	private $SGBD = 'postgresql';
	private $HOST = 'localhost';
	private $USER = 'updb';
	private $PWD  = '123456';
	private $BD   = 'proydb';

	//codigo capa abstraccion
	//conexion ADODB
	public function conectarADO(){
		$objADO = ADONewConnection($this -> SGBD);
		#$db -> debug = true; //muestra los errores que esta haciendo
		$objADO ->Connect($this -> HOST, $this -> USER, $this -> PWD, $this -> BD);
		return $objADO;
	}
}
?>