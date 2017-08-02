<?php /* Smarty version 3.1.27, created on 2015-10-13 01:17:00
         compiled from "/var/www/html/topicos_web/templates/contacto.html" */ ?>
<?php
/*%%SmartyHeaderCode:94633168561ca1dcad3715_44488624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac1fd9278a2eab9a5f118f47a60641a1fdece87' => 
    array (
      0 => '/var/www/html/topicos_web/templates/contacto.html',
      1 => 1444690108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94633168561ca1dcad3715_44488624',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561ca1dcf046a6_17458971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561ca1dcf046a6_17458971')) {
function content_561ca1dcf046a6_17458971 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94633168561ca1dcad3715_44488624';
?>
<h1> Contacto </h1>

<div class="main-content">
<form name="frmContacto" methond="post" action="#">
	<table class="tabla-contacto">
		<tr>
			<th colspan="2">Formulario de Contacto</th>
		</tr>
		<tr>
			<td><span class="etiquetas">Nombre *</span></td>
			<td><input type="text" name="nombres" value="" required></td>
		</tr>
		<tr>
			<td><span class="etiquetas">Apellidos</span></td>
			<td><input type="text" name="apellidos" value=""></td>
		</tr>
		<tr>
			<td><span class="etiquetas">Email *</span></td>
			<td><input type="email" name="email" value="" required></td>
		</tr>
		<tr>
			<td><span class="etiquetas">Fecha</span></td>
			<td><input type="date" name="fecha" value=""></td>
		</tr>
		<tr>
			<td><span class="etiquetas">Asunto *</span></td>
			<td><select>
				<option>Elegir</option>
				<option>Sugerencia</option>
				<option>Reportar falla</option>
				<option>Saludar</option>
			</select></td>
		</tr>
		<tr>
			<td><span class="etiquetas">Descripci&oacute;n</span></td>
			<td><textarea name="descripcion" rows="3"></textarea></td>
		</tr>
		<tr>
			<td><input class="btn-submit" type="submit" name="btnSubmit" 					value="Enviar" 
				onMouseOver="this.className='btn-submit-over'" 
				onMouseOut="this.className='btn-submit'"></td>
		</tr>
	</table>
</form>
</div>
<?php }
}
?>