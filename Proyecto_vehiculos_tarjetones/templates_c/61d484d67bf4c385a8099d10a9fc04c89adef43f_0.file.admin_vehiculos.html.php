<?php /* Smarty version 3.1.27, created on 2015-11-10 16:40:12
         compiled from "/var/www/html/Competencia2/Proyecto/templates/admin_vehiculos.html" */ ?>
<?php
/*%%SmartyHeaderCode:17165686135642724c36f334_64672122%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d484d67bf4c385a8099d10a9fc04c89adef43f' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/admin_vehiculos.html',
      1 => 1447195181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17165686135642724c36f334_64672122',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5642724c3e3891_42514052',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5642724c3e3891_42514052')) {
function content_5642724c3e3891_42514052 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17165686135642724c36f334_64672122';
?>
<div class="container">
  <h3 align="center">VEHICULOS</h3><br><br>


  <div class="col-sm-5">
    <form class="form-horizontal" id="form_alta_vehiculos">
    <div class="form-group">
      <label for="marca" class="col-sm-3 control-label">Marca * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="marca" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="modelo" class="col-sm-3 control-label">Modelo * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="modelo" required/>
      </div>
    </div>

    <div class="form-group">
      <span for="transmision" class="col-sm-3 control-label"><b>Transmisi&oacute;n</b></span>
      <div class="col-sm-5">
      <select id="transmision" class="form-control" value="Elegir">
        <option id="opAutomaticoV">Autom&aacute;tica</option>
        <option id="opManualV">Manual</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label for="placas" class="col-sm-3 control-label">Placas * :</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="placas" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="color" class="col-sm-3 control-label">Color:</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" id="color"/>
      </div>
    </div>

    <div class="form-group">
      <span for="año" class="col-sm-3 control-label"><b>Año:</b></span>
      <div class="col-sm-5">
      <select id="año" class="form-control" value="Elegir">
        <?php echo '<script'; ?>
 type="text/javascript">
          var fecha = new Date();
          var year = fecha.getFullYear();
          for(var i = 1980; i < year + 2; i++){
            document.write('<option id="'+i+'">'+i+'</option>');
          }
        <?php echo '</script'; ?>
>
      </select>
    </div>
    </div>

    <div class="form-group">  
      <label class="col-sm-3 control-label" for="caracteristicas">Caracter&iacute;sticas:</label>
      <div class="col-sm-offset-3 col-sm-9" id="caracteristicas">
        <div class="checkbox" id="caracteristicas_checkbox">
            <input id="c1" type="checkbox" />Seguro
        </div>
        <div class="checkbox">
            <input id="c2" type="checkbox"/>Aire acondicionado
        </div>
        <div class="checkbox">
            <input id="c3" type="checkbox"/>Estereo
        </div>
        <div class="checkbox">
            <input id="c4" type="checkbox"/>Bolsas de aire o seguridad
        </div>
        <div class="checkbox">
            <input id="c5" type="checkbox"/>Frenos de disco
        </div>
        <div class="checkbox">
            <input id="c6" type="checkbox"/>Birlos de seguridad
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="observaciones" class="col-sm-3 control-label">Observaciones:</label>
      <div class="col-sm-5">
      <textarea rows="4" cols="50" class="form-control" id="observaciones"/></textarea> 
      </div>
    </div>
    
    <br>
    <div class="form-group">
      <div class="col-sm-5" align="center">
        <input class="btn btn-success" type="submit" value="Actualizar" id="btn_admin_vehiculos_actualizar">
      </div>
      <div class="col-sm-5" align="center">
        <input class="btn btn-success" type="submit" value="Eliminar" id="btn_admin_vehiculos_eliminar">
      </div>
      </div>
    
</form> 
  </div><!--Fin div 6 col-->

<!--Tabla ver propietarios-->
<div class="col-sm-7">
  <table class="table" id="tabla_admin_vehiculos">
    <thead>
      <tr>
        <th>Propietario</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Transmisi&oacute;n</th>
        <th>Placas</th>
        <th>Color</th>
        <th>Año</th>
        <th style="display:none;"></th>
        <th style="display:none;"></th>
      </tr>
    </thead>
    <tbody><!--
      <tr id="row_tabla_admin_vehiculos">
        <td id="tabla_propietario"></td>
        <td id="tabla_marca"></td>
        <td id="tabla_modelo"></td>
        <td id="tabla_transmision"></td>
        <td id="tabla_placas"></td>
        <td id="tabla_color"></td>
        <td id="tabla_año"></td>
      </tr>-->
    </tbody>
  </table>
  <input class="btn btn-success" type="button" value="Ver" id="btn_admin_vehiculos_ver">
</div>


</div>
<br><br><?php }
}
?>