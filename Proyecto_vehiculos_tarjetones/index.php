<?php
//require("conexion.php");
require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/Competencia2/Proyecto/templates/');
$smarty->setCompileDir('/var/www/html/Competencia2/Proyecto/templates_c/');
$smarty->setConfigDir('/var/www/html/Competencia2/Proyecto/configs/');
$smarty->setCacheDir('/var/www/html/Competencia2/Proyecto/cache/');

$contenido = "inicio";

if(isset($_REQUEST["action"])){
	//recibir parametro para saber que accion (boton) se realizo
	switch($_REQUEST["action"]){
		case "alta_propietarios":
			$contenido = "alta_propietarios.html";
			break;
		case "alta_vehiculos":
			$contenido = "alta_vehiculos.html";
			break;
		case "registro":
			$contenido = "registro.html";
			break;
		case "admin_propietarios":
			$contenido = "admin_propietarios.html";
			break;
		case "admin_vehiculos":
			$contenido = "admin_vehiculos.html";
			break;
		case "admin_tarjetones":
			$contenido = "tarjetones.html";
			break;
		case "admin_estadisticas":
			$contenido = "estadistica.html";
			break;
		default:
			$contenido = "inicio";
	}
}
$smarty->assign('v_contenido', $contenido);

$smarty->display('index.html');

?>
