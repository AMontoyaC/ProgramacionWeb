<?php /* Smarty version 3.1.27, created on 2015-10-26 18:31:11
         compiled from "/var/www/html/topicos_web/templates/estados.html" */ ?>
<?php
/*%%SmartyHeaderCode:1155209457562eb7bf983850_79450508%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a347381fb3b9186c05e41a72711f1ac75263e589' => 
    array (
      0 => '/var/www/html/topicos_web/templates/estados.html',
      1 => 1445902111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155209457562eb7bf983850_79450508',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562eb7bfcddab6_64154889',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562eb7bfcddab6_64154889')) {
function content_562eb7bfcddab6_64154889 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1155209457562eb7bf983850_79450508';
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