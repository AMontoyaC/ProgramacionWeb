<?php /* Smarty version 3.1.27, created on 2015-11-08 00:18:43
         compiled from "/var/www/html/Competencia2/Proyecto/templates/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:1206066206563ee94382f468_44382272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c7613bc9b78a0f5d93dfd54afb650b6dabf023' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/main.html',
      1 => 1446963448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206066206563ee94382f468_44382272',
  'variables' => 
  array (
    'v_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ee94384ce57_08748007',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ee94384ce57_08748007')) {
function content_563ee94384ce57_08748007 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1206066206563ee94382f468_44382272';
?>
<!--del lado de la presentación (plantillas como cual) se le puede agregar
        código php para poder definir lógico-->
        <?php if ($_smarty_tpl->tpl_vars['v_contenido']->value != 'inicio') {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['v_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }

}
}
?>