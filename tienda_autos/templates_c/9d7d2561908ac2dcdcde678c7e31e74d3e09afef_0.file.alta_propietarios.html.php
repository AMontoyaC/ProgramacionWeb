<?php /* Smarty version 3.1.27, created on 2015-11-09 03:47:56
         compiled from "/var/www/html/Competencia2/Proyecto/templates/alta_propietarios.html" */ ?>
<?php
/*%%SmartyHeaderCode:78771071156406bccdd1f74_09357393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7d2561908ac2dcdcde678c7e31e74d3e09afef' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/alta_propietarios.html',
      1 => 1447062466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78771071156406bccdd1f74_09357393',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56406bcce0c521_30659608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56406bcce0c521_30659608')) {
function content_56406bcce0c521_30659608 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78771071156406bccdd1f74_09357393';
?>
<div class="container">
  <h3 align="center">ALTA PROPIETARIOS</h3><br><br>
  <form class="form-horizontal" id="form_alta_propietarios">
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="nombre" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="apellidos" class="col-sm-2 control-label">Apellidos * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="apellidos" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="domicilio" class="col-sm-2 control-label">Domicilio:</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="domicilio"/>
      </div>
    </div>

    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">Telefono:</label>
      <div class="col-sm-5">
      <input type="tel" size="10" class="form-control" id="telefono"/>
      </div>
    </div>
    
    <div class="form-group">
      <span for="Puesto" class="col-sm-2 control-label">Elige:</span>
      <div class="col-sm-5">
      <select id="Puesto" class="form-control" value="Elegir">
        <option>Maestro</option>
        <option>Alumno</option>
        <option>Empleado Administrativo</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label for="no_licencia" class="col-sm-2 control-label">No. Licencia * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="no_licencia" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="tarjeta_circulacion" class="col-sm-2 control-label">Tarjeta Circulaci&oacute;n * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="tarjeta_circulacion" required/>
      </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-5" align="center">
      <input class="btn btn-success" type="submit" value="Registrar" id="btn_alta_propietarios">
    </div>
    </div>
    
</form> 
</div>
<br><br><?php }
}
?>