<?php /* Smarty version 3.1.27, created on 2015-10-09 18:17:00
         compiled from "/var/www/html/topicos_web/templates/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:197723462756184aecad06d5_60068849%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8a9bde20f33670aa30446d9a8a30c1b9ff712d' => 
    array (
      0 => '/var/www/html/topicos_web/templates/index.html',
      1 => 1444432617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197723462756184aecad06d5_60068849',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56184aecc5f670_99033837',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56184aecc5f670_99033837')) {
function content_56184aecc5f670_99033837 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '197723462756184aecad06d5_60068849';
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