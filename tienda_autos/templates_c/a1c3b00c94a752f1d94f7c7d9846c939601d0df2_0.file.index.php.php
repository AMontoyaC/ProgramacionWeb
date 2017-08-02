<?php /* Smarty version 3.1.27, created on 2015-11-28 16:49:09
         compiled from "/var/www/html/GPS/tienda_autos/index.php" */ ?>
<?php
/*%%SmartyHeaderCode:172662788565a2f658aea49_89417916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c3b00c94a752f1d94f7c7d9846c939601d0df2' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/index.php',
      1 => 1448750945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172662788565a2f658aea49_89417916',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a2f65a34b46_49485203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a2f65a34b46_49485203')) {
function content_565a2f65a34b46_49485203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172662788565a2f658aea49_89417916';
echo '<?php
';?>//require("conexion.php");
require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/GPS/tienda_autos/templates/');
$smarty->setCompileDir('/var/www/html/GPS/tienda_autos/templates_c/');
$smarty->setConfigDir('/var/www/html/GPS/tienda_autos/configs/');
$smarty->setCacheDir('/var/www/html/GPS/tienda_autos/cache/');

$contenido = "inicio";

if(isset($_REQUEST["action"])){
	//recibir parametro para saber que accion (boton) se realizo
	switch($_REQUEST["action"]){
		case "admin_propietarios":
			$contenido = "admin_propietarios.html";
			break;
		default:
			$contenido = "inicio";
	}
}
$smarty->assign('v_contenido', $contenido);

$smarty->display('index.php');

<?php echo '?>';

}
}
?>