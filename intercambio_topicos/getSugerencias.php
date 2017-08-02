<?php
session_start();
require("conexionG.php");


if(isset($_POST['sugPartSug'])){
	$linea = "select id_participante_sugerido from participantes  where id_participante = ".$_SESSION['id'].";";
	$rs = $db->Execute($linea);
	$val = $rs->fields[0];
	$linea2 = "select sugerencias from participantes where id_participante = ".$val.";";
	$rs2 = $db->Execute($linea2);
	$sug = $rs2->fields[0];
	$cuadros = $sug;
	$cuadros = "<div class='recuadro' id='".$val."' style='background-image: url(images/p" . $val . ".jpg);' align='center'></div>";
	$cuadros = $cuadros . "<div class='recuadro2' id='sugerencias_".$val."'><p>SUGERENCIAS DE REGALO:	<br>".$sug."</p></div>";
	echo $cuadros;
}

if(isset($_POST['sugPart'])){
	$linea = "select sugerencias from participantes where id_participante = ".$_SESSION['id'].";";
	$rs = $db->Execute($linea);
	$sug = $rs->fields[0];
	echo $sug;
}
?>