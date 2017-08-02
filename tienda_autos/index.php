<?php
//require("conexion.php");
require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/GPS/tienda_autos/templates/');
$smarty->setCompileDir('/var/www/html/GPS/tienda_autos/templates_c/');
$smarty->setConfigDir('/var/www/html/GPS/tienda_autos/configs/');
$smarty->setCacheDir('/var/www/html/GPS/tienda_autos/cache/');

$contenido = "index2.html";

if(isset($_REQUEST["action"])){
	//recibir parametro para saber que accion (boton) se realizo
	switch($_REQUEST["action"]){
		case "ofertar":
			$contenido = "ofertar.html";
			break;
		case "carro_compras":
			$contenido = "carro_compras.html";
			break;
		case "catalogo":
			$contenido = "catalogo.html";
			break;
		case "iniciosesion_registro":
			$contenido = "iniciosesion_registro.html";
			break;
		default:
			$contenido = "index2.html";
	}
}
$smarty->assign('v_contenido', $contenido);

$smarty->display('index.html');

?>
