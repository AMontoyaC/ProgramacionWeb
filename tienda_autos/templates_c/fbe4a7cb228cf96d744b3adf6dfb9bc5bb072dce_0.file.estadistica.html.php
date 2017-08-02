<?php /* Smarty version 3.1.27, created on 2015-11-13 00:53:55
         compiled from "/var/www/html/Competencia2/Proyecto/templates/estadistica.html" */ ?>
<?php
/*%%SmartyHeaderCode:132710022156458903535ea1_87998069%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe4a7cb228cf96d744b3adf6dfb9bc5bb072dce' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/estadistica.html',
      1 => 1447397490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132710022156458903535ea1_87998069',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564589035ac956_68299445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564589035ac956_68299445')) {
function content_564589035ac956_68299445 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '132710022156458903535ea1_87998069';
?>


<div class="container">
  <h3 align="center">ESTADISTICAS</h3><br><br>
  <div align="center">
        

        <div align="center">
           <br>
            <button id="cargaGrafico">Ver Gráfica</button>

          </div>
           <div id="piechart1" style="width: 600px; height: 500px;"></div>
          <div id="pie">
            <div id="piechart2" style="width: 600px; height: 500px;"></div>
        </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(cargar_datos_);
<?php echo '</script'; ?>
>
<?php }
}
?>