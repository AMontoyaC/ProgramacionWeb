<?php /* Smarty version 3.1.27, created on 2015-10-21 18:25:13
         compiled from "/var/www/html/practica1/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43558341656281ed92684f9_39802158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2d1874695341c3656320a68de8a46bedcf381df' => 
    array (
      0 => '/var/www/html/practica1/templates/index.tpl',
      1 => 1445469888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43558341656281ed92684f9_39802158',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56281ed928f2e0_88531460',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56281ed928f2e0_88531460')) {
function content_56281ed928f2e0_88531460 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43558341656281ed92684f9_39802158';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>