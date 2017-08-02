<?php /* Smarty version 3.1.27, created on 2015-11-07 22:49:25
         compiled from "/var/www/html/Competencia2/Proyecto/templates/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1176853727563ed45532cb90_39816186%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d652eed135a8b895237d8045282fa2cac1aa066' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/index.html',
      1 => 1446952883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1176853727563ed45532cb90_39816186',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ed455344721_39963061',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ed455344721_39963061')) {
function content_563ed455344721_39963061 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1176853727563ed45532cb90_39816186';
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