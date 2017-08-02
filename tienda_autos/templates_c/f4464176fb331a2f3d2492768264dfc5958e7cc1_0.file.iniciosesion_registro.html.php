<?php /* Smarty version 3.1.27, created on 2015-11-29 01:41:25
         compiled from "/var/www/html/GPS/tienda_autos/templates/iniciosesion_registro.html" */ ?>
<?php
/*%%SmartyHeaderCode:1127401600565aac2548ebe2_16782324%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4464176fb331a2f3d2492768264dfc5958e7cc1' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/iniciosesion_registro.html',
      1 => 1448782868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127401600565aac2548ebe2_16782324',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565aac254c3ad8_42074493',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565aac254c3ad8_42074493')) {
function content_565aac254c3ad8_42074493 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1127401600565aac2548ebe2_16782324';
?>

<div class="container" >
	<div class="form_isr">
    <div class="container">
      <h3 align="center" id="titulo_form">INICIO SESI&Oacute;N / REGISTRO</h3><br><br>
      <div class="form-group">  
        <label class="col-sm-3 control-label" for="seleccion">Selecciona la opci&oacute;n que deseas: 
        <div class="col-sm-offset-3 col-sm-9" id="seleccion">
        <div class="checkbox" id="seleccion_checkbox">
          <input value="1" type="checkbox" onclick="selecciona(1)" id="rb1"/>Inicio Sesi&oacute;n
        </div>
        <div class="checkbox">
          <input value="2" type="checkbox" onclick="selecciona(2)" id="rb2"/>Registro
        </div>
      </div>
      

      <form class="form-horizontal" id="form_inicio_sesion">
        <div class="form-group">
          <label for="fis_email" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-5">
          <input type="email" ="form-control" id="fis_email" required/>
          </div>
        </div>
 
        <div class="form-group">
          <label for="fis_password" class="col-sm-2 control-label">Password:</label>
          <div class="col-sm-5">
          <input type="password" class="form-control" id="fis_password" required/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input class="btn btn-success" type="submit" value="Inicio Sesi&oacute;n" id="btn_inicio_sesion">
          </div>
        </div>
      </form>

      <br><br>
      <form class="form-horizontal" id="form_registro">
        <div class="form-group">
          <label for="fr_nombre" class="col-sm-2 control-label">Nombre:</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fr_nombre" required/>
          </div>
        </div>

        <div class="form-group">
          <label for="fr_apepat" class="col-sm-2 control-label">Apellido Paterno:</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fr_apepat" />
          </div>
        </div>

        <div class="form-group">
          <label for="fr_apemat" class="col-sm-2 control-label">Apellido Materno</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fr_apemat" />
          </div>
        </div>

        <div class="form-group">
          <label for="fr_direccion" class="col-sm-2 control-label">Direcci&oacute;n:</label>
          <div class="col-sm-5">
          <input type="text" ="form-control" id="fr_direccion" />
          </div>
        </div>

        <div class="form-group">
          <label for="fr_telefono" class="col-sm-2 control-label">Tel&eacute;fono:</label>
          <div class="col-sm-5">
          <input type="number" ="form-control" id="fr_telefono" />
          </div>
        </div>

        <div class="form-group">
          <label for="fr_email" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-5">
          <input type="email" ="form-control" id="fr_email" required/>
          </div>
        </div>

        <div class="form-group">
          <label for="fr_password" class="col-sm-2 control-label">Password:</label>
          <div class="col-sm-5">
          <input type="password" class="form-control" id="fr_password" required/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-5" align="center">
            <input class="btn btn-success" type="submit" value="Registro" id="btn_registro">
          </div>
        </div>
      </form> 
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div><?php }
}
?>