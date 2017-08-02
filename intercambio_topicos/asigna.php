<?php
session_start();
require("conexionG.php");

$linea ="select exists(select * from participantes where id_participante_sugerido=".$_POST['id_participante_sugerido'].");";
$rs = $db->Execute($linea);
$val = $rs->fields[0];

if($val==0){
	$linea2 = "update participantes set id_participante_sugerido = ".$_POST['id_participante_sugerido']." where id_participante = ".$_SESSION['id'].";";
	$rs2 = $db->Execute($linea2);
	echo "1";
}	
else{
	echo "Selecciona nuevamente porfavor";
}
?>
