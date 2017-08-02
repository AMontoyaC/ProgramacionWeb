<?php /* Smarty version 3.1.27, created on 2015-10-23 17:55:33
         compiled from "/var/www/html/topicos_web/templates/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:1822150150562abae51793f5_22590829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51f2b26163e2e31d8f1b1438a6e8fdf773275f7f' => 
    array (
      0 => '/var/www/html/topicos_web/templates/main.html',
      1 => 1445640861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822150150562abae51793f5_22590829',
  'variables' => 
  array (
    'v_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562abae5185fa0_71676463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562abae5185fa0_71676463')) {
function content_562abae5185fa0_71676463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1822150150562abae51793f5_22590829';
?>

		<!--del lado de la presentación (plantillas como cual) se le puede agregar
		código php para poder definir lógico-->
		<?php if ($_smarty_tpl->tpl_vars['v_contenido']->value == 'portada') {?>

			<h3 id="titulo-tec">Instituto Tecnológico<br> de Celaya</h3>
			<img id="img-portada" src="images/itc1.jpg" alt="Portada">
		<?php } else { ?>
			<!-- <?php echo $_smarty_tpl->tpl_vars['v_contenido']->value;?>
 -->
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['v_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php }

}
}
?>