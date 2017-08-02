<?php /* Smarty version 3.1.27, created on 2015-11-10 03:07:01
         compiled from "/var/www/html/Competencia2/Proyecto/templates/alta_vehiculos.html" */ ?>
<?php
/*%%SmartyHeaderCode:10427857415641b3b57715e3_77903728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17d8f8296d0a4fdd5799d142e273db849b2db1b' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/alta_vehiculos.html',
      1 => 1447146416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10427857415641b3b57715e3_77903728',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5641b3b57ac142_58052420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5641b3b57ac142_58052420')) {
function content_5641b3b57ac142_58052420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10427857415641b3b57715e3_77903728';
?>
<br>
<div class="container">
  <h3 align="center">ALTA VEHICULOS</h3><br><br>
  <div class="col-sm-6">
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
        <option>Autom&aacute;tica</option>
        <option>Manual</option>
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
            document.write('<option value="'+i+'">'+i+'</option>');
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
            <input value="1" type="checkbox" onclick="clickRB(1)"/>Seguro
        </div>
        <div class="checkbox">
            <input value="2" type="checkbox" onclick="clickRB(2)"/>Aire acondicionado
        </div>
        <div class="checkbox">
            <input value="3" type="checkbox" onclick="clickRB(3)"/>Estereo
        </div>
        <div class="checkbox">
            <input value="4" type="checkbox" onclick="clickRB(4)"/>Bolsas de aire o seguridad
        </div>
        <div class="checkbox">
            <input value="5" type="checkbox" onclick="clickRB(5)"/>Frenos de disco
        </div>
        <div class="checkbox">
            <input value="6" type="checkbox" onclick="clickRB(6)"/>Birlos de seguridad
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="observaciones" class="col-sm-3 control-label">Observaciones:</label>
      <div class="col-sm-5">
      <textarea rows="4" cols="50" class="form-control" id="observaciones"/></textarea> 
      </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-5" align="center">
      <input class="btn btn-success" type="submit" value="Registrar" id="btn_alta_vehiculos">
    </div>
    </div>
    
</form> 
</div>



<!--Tabla ver propietarios-->
<div class="col-sm-6">
  <table class="table" id="tablaP">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Tipo</th>
      </tr>
      <!--
      <tr>
        <td id="tablaAVP_nombre">A</td>
        <td id="tablaAVP_apellidos">B</td>
        <td id="tablaAVP_tipo">C</td>
      </tr>-->
      
    </thead>
  </table>
  <input class="btn btn-success" type="button" value="Ver" id="btn_av_tablaP">
</div>
</div>
<br><br><?php }
}
?>