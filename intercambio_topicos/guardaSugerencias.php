<?php
session_start();
require("conexionG.php");
$sugerencias = $_POST['sugerencias'];
$linea = "update participantes set sugerencias = '".$sugerencias."' where id_participante= ".$_SESSION['id']."";
$rs = $db->Execute($linea);
echo "Sugerencias guardadas correctamente";
?>