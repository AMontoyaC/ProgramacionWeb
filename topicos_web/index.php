<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/topicos_web/templates/');
$smarty->setCompileDir('/var/www/html/topicos_web/templates_c/');
$smarty->setConfigDir('/var/www/html/topicos_web/configs/');
$smarty->setCacheDir('/var/www/html/topicos_web/cache/');


$contenido = "portada";

if(isset($_REQUEST["action"])){
	//recibir parametro para saber que accion (boton) se realizo
	switch($_REQUEST["action"]){
		case "qsomos":
			$contenido = "quienes_somos.html";
			break;
		case "carreras":
			$contenido = "carreras.html";
			break;
		case "contacto":
			$contenido = "contacto.html";
			break;
		case "mapa":
			$contenido = "mapa.html";
			break;
		case "ejemplos_jquery":
			$contenido = "ejemplos_jquery.html";
			break;
		case "numcontrol":
			$contenido = "numcontrol.html";
			break;
		case "municipios":
			$contenido = "municipios.html";
			break;
		default:
			$contenido = "portada";
	}
}


//name: nombre de variable de plantilla
//Ned: valor que se le asigna a la variable (name)
//$smarty->assign('name','Ned');


//en este caso la variable de plantilla es V_CONTENIDO
//es la que recibira el valor de la variable contenido
//la variable de plantilla se crea en el archivo de plantillas
$smarty->assign('v_contenido', $contenido);



//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('index.html');

?>
