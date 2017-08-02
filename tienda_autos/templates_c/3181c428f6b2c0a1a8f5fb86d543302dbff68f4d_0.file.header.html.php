<?php /* Smarty version 3.1.27, created on 2015-11-29 16:46:54
         compiled from "/var/www/html/GPS/tienda_autos/templates/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:2050668493565b805e476386_95099033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3181c428f6b2c0a1a8f5fb86d543302dbff68f4d' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/header.html',
      1 => 1448837205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050668493565b805e476386_95099033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565b805e73e667_49206566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565b805e73e667_49206566')) {
function content_565b805e73e667_49206566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2050668493565b805e476386_95099033';
?>
|<!DOCTYPE HTML>
<html>
<head>
<title>Tienda Veh&iacute;culos</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'> 
<!--slider-->
<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/script.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/script2.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/superfish.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="header-bg">
	<div class="wrap"> 
		<div class="h-bg">
			<div class="total">
				<div class="header"><div class="clear"></div> 
					<div class="header-bot">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" /></a>
						</div>
						<div class="logo2" >
							<p id="user_loggeado"></p>
						</div>
					<div class="clear"></div> 
				</div>		
		</div>	
		<div class="menu"> 	
			<div class="top-nav"> 
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="index.php?action=catalogo">Cat&aacute;logo Veh&iacute;culos</a></li>
						<li><a href="index.php?action=ofertar">Ofertar</a></li>
						<li><a href="index.php?action=carro_compras">Carro compras</a></li>
						<li><a href="index.php?action=iniciosesion_registro">Inicio sesi&oacute;n/Registro</a></li>
						<li><img src="images/cerrar_sesion.png"  width="56px" height="60px" id="cerrar_sesion"/></li>
					</ul>
					<div class="clear"></div> 
				</div>
		</div>
		
<?php }
}
?>