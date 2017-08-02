<?php
session_start();
require("conexionG.php");


if(isset($_POST['Pass'])){
	$nombre = $_POST['user'];
	$contraseña = $_POST['password'];
	$linea = "select password from participantes where nombre='".$nombre."';";
	$rs = $db->Execute($linea);
	$val = $rs->fields[0];

	$pass = md5($contraseña);
	if($val == null)
		echo "0";
	else
		echo "1";
}


if(isset($_POST['nuevaContra'])){
	$nombre = $_POST['nombre'];
	$contraseña = $_POST['password'];
	$pass = md5($contraseña);
	$linea = "update participantes set password = '".$pass."'  where nombre = '".$nombre."';";
	$db->Execute($linea);

	$linea2 = "select id_participante from participantes where password ='".$pass."' and nombre='".$nombre."';";
	$rs2 = $db->Execute($linea2);
	$id_participante_log = $rs2->fields[0];
	if($id_participante_log == null)
		echo "0";
	else{
		$_SESSION['nombre'] = $nombre;
		$_SESSION['id'] = $id_participante_log;
		echo "Bienvenido " . $_SESSION['nombre'];
	}
}

if(isset($_POST['inicioSesion'])){
	$nombre = $_POST['nombre'];
	$contraseña = $_POST['password'];
	$pass = md5($contraseña);
	$linea2 = "select id_participante from participantes where password ='".$pass."' and nombre='".$nombre."';";
	$rs2 = $db->Execute($linea2);
	$id_participante_log = $rs2->fields[0];
	if($id_participante_log == null)
		echo "0";
	else{
		$_SESSION['nombre'] = $nombre;
		$_SESSION['id'] = $id_participante_log;
		echo "Bienvenido " . $_SESSION['nombre'];
	}
}

if(isset($_POST['Cuadros'])){
	$cuadros = "";
	$linea = "select id_participante from participantes  where id_participante <> ".$_SESSION['id'].";";
	$rs = $db->Execute($linea);
	while (!$rs->EOF) {
		$array[] = $rs->fields[0];
		//$cuadros = $cuadros . "<div class='recuadro' id='".$id_part_c."'></div>";
		$rs->MoveNext();
	}
	shuffle($array);
	foreach ($array as $value) {
	   $cuadros = $cuadros . "<div class='recuadro' id='".$value."'></div>";
	}
	echo $cuadros;
	
}

if(isset($_POST['revPartSug'])){
	$linea = "select id_participante_sugerido from participantes  where id_participante = ".$_SESSION['id'].";";
	$rs = $db->Execute($linea);
	$val = $rs->fields[0];
	if($val == null){
		echo "0";
	}
	else{
		echo $val;
	}
}

if(isset($_POST['Salir'])){
	session_destroy();
	session_start();
	echo "1";
}
?>