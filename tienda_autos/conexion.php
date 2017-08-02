<?php
//session_start();
//require('conexion.php');

include('res/adodb5/adodb.inc.php');
//include("res/adodb5/adodb-exceptions.inc.php"); 

$db = ADONewConnection('mysql'); 
//$db->debug = true;
$db -> Connect('localhost', 'root', '123456' , 'tienda_autos');
?>