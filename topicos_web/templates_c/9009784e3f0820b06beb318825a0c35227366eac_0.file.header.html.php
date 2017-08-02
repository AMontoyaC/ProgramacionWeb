<?php /* Smarty version 3.1.27, created on 2015-10-19 18:01:47
         compiled from "/var/www/html/topicos_web/templates/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:15956132945625765bceba23_21474133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9009784e3f0820b06beb318825a0c35227366eac' => 
    array (
      0 => '/var/www/html/topicos_web/templates/header.html',
      1 => 1445295646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15956132945625765bceba23_21474133',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5625765bd0d678_95610250',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5625765bd0d678_95610250')) {
function content_5625765bd0d678_95610250 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15956132945625765bceba23_21474133';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/styles.css">	
		<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
	</head>
<body>
	<div id="wrapper">

		<!--Linea superior-->
		<div id="linea-superior"></div>
		<!--Encabezado-->
		<header>
			<!--Logo-->
			<img src="images/logo.jpg">
			<!--iconos rsedes sociales-->
			<ul id="redes-sociales"><!--Lista no ordenada-->
				 <li class="twitter"><a href="#"></a></li>
				 <li class="facebook"><a href="#"></a></li>
				 <li class="google"><a href="#"></a></li>
				 <li class="rss"><a href="#s"></a></li>
			</ul>
			<!--Caja de buscar y boton-->
			<form id="forma-buscar" method="GET" action="#">
				<input id="input-buscar" type="text" placeholder="Buscar...">
				<button id="boton-buscar"></button>
			</form>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?action=qsomos">Quienes somos</a></li>
				<li><a href="index.php?action=carreras">Carreras</a></li>
				<li><a href="index.php?action=contacto">Contacto</a></li>
				<li><a href="index.php?action=mapa">Mapa</a></li>
			</ul>
		</nav>
<?php }
}
?>