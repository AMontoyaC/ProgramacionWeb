<?php /* Smarty version 3.1.27, created on 2015-11-28 17:00:42
         compiled from "/var/www/html/GPS/tienda_autos/templates/admin_propietarios.html" */ ?>
<?php
/*%%SmartyHeaderCode:813223489565a321a96e319_75656506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7e8475df5c4740da20933c0429be3c844010f5' => 
    array (
      0 => '/var/www/html/GPS/tienda_autos/templates/admin_propietarios.html',
      1 => 1448751632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813223489565a321a96e319_75656506',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565a321a97b519_87026197',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565a321a97b519_87026197')) {
function content_565a321a97b519_87026197 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '813223489565a321a96e319_75656506';
?>

  <div class="container">
  <h3 align="center">PROPIETARIOS</h3><br><br>


  <div class="col-sm-6">
    <form class="form-horizontal" id="form_admin_propietarios" method="post"><br>
      <div class="form-group">
        <label for="admin_nombre" class="col-sm-3 control-label">Nombre * :</label>
        <div class="col-sm-5"> 
        <input type="text" class="form-control" id="admin_nombre" name="admin_nombreN" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="admin_apellidos" class="col-sm-3 control-label">Apellidos * :</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="admin_apellidos" name="admin_apellidosN" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="admin_domicilio" class="col-sm-3 control-label">Domicilio:</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="admin_domicilio" name="admin_domicilioN" />
        </div>
      </div>

      <div class="form-group">
        <label for="admin_telefono" class="col-sm-3 control-label">Telefono:</label>
        <div class="col-sm-5">
        <input type="tel" size="10" class="form-control" id="admin_telefono" name="admin_telefonoN" />
        </div>
      </div>
      
      <div class="form-group">
        <span for="admin_Puesto" class="col-sm-3 control-label"><b>Elige:</b></span>
        <div class="col-sm-5">
        <select id="admin_Puesto" class="form-control" value="Elegir" name="admin_PuestoN">
          <option id="op_Maestro">Maestro</option>
          <option id="op_Alumno">Alumno</option>
          <option id="op_Empleado">Empleado Administrativo</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="admin_no_licencia" class="col-sm-3 control-label">No. Licencia * :</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="admin_no_licencia" name="admin_no_licenciaN" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="admin_tarjeta_circulacion" class="col-sm-3 control-label">Tarjeta Circulaci&oacute;n * :</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="admin_tarjeta_circulacion" name="admin_tarjeta_circulacionN" required/>
        </div>
      </div>
      
      <br>
      <div class="form-group">
      <div class="col-sm-5" align="center">
        <input class="btn btn-success" type="submit" value="Actualizar" id="btn_admin_propietarios_actualizar">
      </div>
      <div class="col-sm-5" align="center">
        <input class="btn btn-success" type="submit" value="Eliminar" id="btn_admin_propietarios_eliminar">
      </div>
      </div>
      
  </form> 
</div><!--Fin div 6 col-->

<!--Tabla ver propietarios-->
<div class="col-sm-6">
  <table class="table" id="tabla_admin_propietarios">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Domicilio</th>
        <th>Tel&eacute;fono</th>
        <th>Tipo</th>
        <th>No. Licencia</th>
        <th>Tarjeta Circulaci&oacute;n</th>
      </tr>
    </thead>
    <tbody>
    <!--
      <tr>
        <td id="tabla_nombre"></td>
        <td id="tabla_apellidos"></td>
        <td id="tabla_telefono"></td>
        <td id="tabla_tipo"></td>
        <td id="tabla_no_licencia"></td>
        <td id="tabla_tarjeta_circulacion"></td>
      </tr>-->
    </tbody>
  </table>
  <input class="btn btn-success" type="button" value="Ver" id="btn_admin_propietarios_ver">
</div>

</div>
<br><br><?php }
}
?>