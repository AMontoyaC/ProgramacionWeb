<?php /* Smarty version 3.1.27, created on 2015-10-07 18:39:52
         compiled from "/var/www/html/topicos_web/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3033751125615ad48c41da5_43513643%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3adb0fc5f2390177fb4edebc1c528beda4add971' => 
    array (
      0 => '/var/www/html/topicos_web/templates/index.tpl',
      1 => 1444261171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3033751125615ad48c41da5_43513643',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5615ad48d76694_10400903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615ad48d76694_10400903')) {
function content_5615ad48d76694_10400903 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3033751125615ad48c41da5_43513643';
?>
Hola <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php }
}
?>