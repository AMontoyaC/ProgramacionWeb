<?php /* Smarty version 3.1.27, created on 2015-10-28 04:52:19
         compiled from "/var/www/html/Competencia2/Tarea2/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48532652556309ad3e6c980_52224197%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e04e029748e518b164fcf195497c94957d5ef4ed' => 
    array (
      0 => '/var/www/html/Competencia2/Tarea2/templates/index.tpl',
      1 => 1446025619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48532652556309ad3e6c980_52224197',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56309ad3e9d416_73156200',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56309ad3e9d416_73156200')) {
function content_56309ad3e9d416_73156200 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48532652556309ad3e6c980_52224197';
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