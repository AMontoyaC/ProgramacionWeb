<?php /* Smarty version 3.1.27, created on 2015-10-28 22:55:56
         compiled from "/var/www/html/Competencia2/Tarea2/templates/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:357653986563198cc74c774_66967582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c6edc8f8096e35af7734dc87b1d9d377fa55f3' => 
    array (
      0 => '/var/www/html/Competencia2/Tarea2/templates/index.html',
      1 => 1446090952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357653986563198cc74c774_66967582',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563198cc87b2c7_45235146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563198cc87b2c7_45235146')) {
function content_563198cc87b2c7_45235146 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '357653986563198cc74c774_66967582';
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