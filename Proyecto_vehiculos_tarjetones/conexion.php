<?php
//session_start();
//require('conexion.php');

include('res/adodb5/adodb.inc.php');
//include("res/adodb5/adodb-exceptions.inc.php"); 

$db = ADONewConnection('postgres'); 
//$db->debug = true;
$db -> Connect('localhost', 'postgres', '123456' , 'proyecto1');
?>