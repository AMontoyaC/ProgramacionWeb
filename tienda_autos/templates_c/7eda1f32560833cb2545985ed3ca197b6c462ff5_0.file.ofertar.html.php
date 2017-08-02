<?php /* Smarty version 3.1.27, created on 2015-11-29 19:34:46
         compiled from "/var/www/html/GPS/tienda_autos/templates/ofertar.html" */ ?>
<?php
/*%%SmartyHeaderCode:385024963565ba7b6cd4a74_62712449%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eda1f32560833cb2545985ed3ca197b6c462ff5' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/ofertar.html',
      1 => 1448845974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385024963565ba7b6cd4a74_62712449',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565ba7b6d51139_78913712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565ba7b6d51139_78913712')) {
function content_565ba7b6d51139_78913712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '385024963565ba7b6cd4a74_62712449';
?>
<div class="container" >
	<div class="form_isr">
    <div class="container">
      <h3 align="center" id="titulo_form_o">OFERTA TU VEH&Iacute;CULO!</h3><br><br>
      <h3>Ingresa los datos de tu veh&iacute;culo</h3>

      <form class="form-horizontal" id="form_ofertar">
        <div class="form-group">
          <label for="fo_marca" class="col-sm-2 control-label">Marca</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fo_marca" required/>
          </div>
        </div>
 
        <div class="form-group">
          <label for="fo_modelo" class="col-sm-2 control-label">Modelo</label>
          <div class="col-sm-5">
          <input type="text" class="form-control" id="fo_modelo" required/>
          </div>
        </div>

        <div class="form-group">
          <label for="fo_color" class="col-sm-2 control-label">Color</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fo_color" />
          </div>
        </div>

        <div class="form-group">
          <label for="fo_precio" class="col-sm-2 control-label">Precio</label>
          <div class="col-sm-5">
          <input type="number" ="form-control" id="fo_precio" />
          </div>
        </div>

        <div class="form-group">
          <label for="fo_observaciones" class="col-sm-2 control-label">Observaciones</label>
          <div class="col-sm-5">
          <textarea type="text" form="form_ofertar" id="fo_observaciones" rows="5" /></textarea> 
          </div>
        </div>

        <!--<div class="form-group">
          <label for="fo_imagen" class="col-sm-2 control-label">Imagen del Veh&iacute;culo</label>
          <div class="col-sm-5">
          <input type="file" ="form-control" id="fo_imagen" />
          </div>
        </div>-->

        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input class="btn btn-success" type="submit" value="Ofertar" id="btn_ofertar">
          </div>
        </div>
      </form> 
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div><?php }
}
?>