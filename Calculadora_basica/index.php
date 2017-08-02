<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/Competencia2/Tarea2/templates/');
$smarty->setCompileDir('/var/www/html/Competencia2/Tarea2/templates_c/');
$smarty->setConfigDir('/var/www/html/Competencia2/Tarea2/configs/');
$smarty->setCacheDir('/var/www/html/Competencia2/Tarea2/cache/');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('index.html');

?>
