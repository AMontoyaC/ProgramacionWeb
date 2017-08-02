<?php /* Smarty version 3.1.27, created on 2015-11-27 03:03:01
         compiled from "/var/www/html/GPS/tienda_autos/templates/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:16795700656581c45a59820_32943741%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3259fb0d49fd244f2a2729f1322be5db1e7dacd5' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/index.html',
      1 => 1446952883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16795700656581c45a59820_32943741',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56581c45d87458_39927748',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56581c45d87458_39927748')) {
function content_56581c45d87458_39927748 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16795700656581c45a59820_32943741';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>