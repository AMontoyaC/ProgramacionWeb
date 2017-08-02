<?php /* Smarty version 3.1.27, created on 2015-10-28 21:49:28
         compiled from "/var/www/html/Competencia2/Tarea2/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14269964705631893819c0b6_67775922%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b92d30086bc661785caa3c2cfa0e5270e7ed81' => 
    array (
      0 => '/var/www/html/Competencia2/Tarea2/templates/main.tpl',
      1 => 1446086966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14269964705631893819c0b6_67775922',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563189381bc190_07612271',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563189381bc190_07612271')) {
function content_563189381bc190_07612271 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14269964705631893819c0b6_67775922';
?>

			<section>
				<div class="columnas" id="c1">
					<h4> Número 1: </h4>
					<h4> Número 2: </h4>			
					<h4> Resultado: </h4>
				</div>
				<div class="columnas" id="c1">
					<br><br>
					<input id="num1" required>
					<br><br>
					<input id="num2" required>
					<br><br>
					<input id="res" disabled>
				</div>
				
				<div class="columnas" id="c2">
					<br><br><br><br>
					<input id="btnSuma" type="button" value="+" class="opr">
					<input id="btnResta" type="button" value="-" class="opr">
					<input id="btnDivision" type="button" value="/" class="opr">
					<input id="btnMultiplicacion" type="button" value="*" class="opr">
				</div>
				<div class="columnas">
					<br>
					<img src="http://stream1.gifsoup.com/view3/2153406/alan-blackjack-o.gif" id="gif">
				</div>
			</section>
<?php }
}
?>