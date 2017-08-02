<?php /* Smarty version 3.1.27, created on 2015-11-27 03:03:01
         compiled from "/var/www/html/GPS/tienda_autos/templates/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:137276916356581c45deeb70_92591347%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71732b140847501484cada133bb1584bc034b7e' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/main.html',
      1 => 1446963448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137276916356581c45deeb70_92591347',
  'variables' => 
  array (
    'v_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56581c45e14f58_94389286',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56581c45e14f58_94389286')) {
function content_56581c45e14f58_94389286 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137276916356581c45deeb70_92591347';
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