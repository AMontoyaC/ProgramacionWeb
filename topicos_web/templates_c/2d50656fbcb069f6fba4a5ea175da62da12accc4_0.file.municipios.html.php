<?php /* Smarty version 3.1.27, created on 2015-10-27 00:54:06
         compiled from "/var/www/html/topicos_web/templates/municipios.html" */ ?>
<?php
/*%%SmartyHeaderCode:928298303562f117e04e523_08128824%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d50656fbcb069f6fba4a5ea175da62da12accc4' => 
    array (
      0 => '/var/www/html/topicos_web/templates/municipios.html',
      1 => 1445925184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928298303562f117e04e523_08128824',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562f117e101d96_27654566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562f117e101d96_27654566')) {
function content_562f117e101d96_27654566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '928298303562f117e04e523_08128824';
?>
<!--Ejemplo ajax con post-->
<select id="estados">
	<option value="gto">Guanajuato</option>
	<option value="jal">Jalisco</option>
	<option value="mich">Michoac&aacute;n</option>
</select>

<select id="municipios">
</select>
<?php }
}
?>