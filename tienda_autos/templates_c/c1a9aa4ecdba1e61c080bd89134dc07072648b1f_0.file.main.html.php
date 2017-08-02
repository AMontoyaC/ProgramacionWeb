<?php /* Smarty version 3.1.27, created on 2015-10-28 23:08:44
         compiled from "/var/www/html/Competencia2/Tarea2/templates/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:201312810456319bcc4c4c18_81321429%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a9aa4ecdba1e61c080bd89134dc07072648b1f' => 
    array (
      0 => '/var/www/html/Competencia2/Tarea2/templates/main.html',
      1 => 1446091723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201312810456319bcc4c4c18_81321429',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56319bcc4cd2f8_26699530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56319bcc4cd2f8_26699530')) {
function content_56319bcc4cd2f8_26699530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201312810456319bcc4c4c18_81321429';
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
					<h4 id="res"></h4>
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