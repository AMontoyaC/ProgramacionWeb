<?php /* Smarty version 3.1.27, created on 2015-11-12 01:29:29
         compiled from "/var/www/html/Competencia2/Proyecto/templates/tarjetones.html" */ ?>
<?php
/*%%SmartyHeaderCode:6617930356443fd9538912_07861784%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '275d66fdc70ee0172496188d0fd8d9ceab829484' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/tarjetones.html',
      1 => 1447313356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6617930356443fd9538912_07861784',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56443fd95939f3_89164776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56443fd95939f3_89164776')) {
function content_56443fd95939f3_89164776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6617930356443fd9538912_07861784';
?>
<div class="container">
  <h3 align="center">TARJETONES VEHICULOS</h3><br><br>
  <div align="center">
    <input class="btn btn-success" type="button" value="Regresar" id="btn_regresar">
    <input class="btn btn-success" type="button" value="Ver PDF" id="btn_ver_pdf" >
  </div>

<!--Tabla ver propietarios-->
  <table class="table" id="tabla_tarjetones_vehiculos">
    <thead>
      <tr>
        <th>Propietario</th>
        <th>Tipo</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Placas</th>
        <th>Color</th>
      </tr> 
    </thead>
    <tbody>
    </tbody>
  </table>
  <input class="btn btn-success" type="button" value="Ver" id="btn_tarjetones_vehiculos_ver">
  <input class="btn btn-success" type="button" value="Imprimir" id="btn_tarjetones_vehiculos_imprimir"disabled>

</div>
<br><br>


<div class="container" id="div-tarjeton">

<div class="col-md-3" align="center"></div>
  <div id="tarjeton" class="col-md-8">
    <div class="col-md-12" align="center">
      <div id="tarjeton_img"><img src="img/logo_tecno.png" width="130px" height: "150px"></div>
    </div>
    <div class="col-md-12" align="center">
      <h2 id="tarjeton_titulo"><b>INSTITUTO TECNOLÓGICO <br>DE CELAYA</b></h2>
    </div>
    <div class="col-md-12" align="center">
      <h4 id="tarjeton_titulo2"><b>TARJETON</b></h4>
    </div><br><br>
    <div class="col-md-12" align="center">
      <h4 id="tarjeton_titulo3"><b>Propietario</b></h4><br><br>
    </div>
    <div class="col-md-12" align="center">
      <div class="row">
        <div class="col-md-6">
          <label id="tarjeton_propietario">Propietaria</label>
        </div> 
        <div class="col-md-6">
          <label id="tarjeton_tipo">Tipo</label>
          <br><br><br>
        </div>   
      </div>
    </div>
    <div class="col-md-12" align="center">
      <h4 id="tarjeton_titulo3"><b>Veh&iacute;culo</b></h4><br><br>
    </div>
    <div class="col-md-12" align="center">
      <div class="row">
        <div class="col-md-6">
          <label id="tarjeton_marca">Marca</label>
        </div> 
        <div class="col-md-6">
          <label id="tarjeton_modelo">Modelo</label>
        </div>   
      </div><br><br>
      <div class="row">
        <div class="col-md-6">
          <label id="tarjeton_placas">Placas</label>
        </div> 
        <div class="col-md-6">
          <label id="tarjeton_color">Color</label>
        </div>   
      </div>
    <br><br><br>
    </div>


    <div class="col-md-12" align="center">
      <div class="row">
        <div class="col-md-6">
          <div class="div_bottom" style="color:rgb(0,128,0)"> CAMPUS I </div>
          <p class="info_bottom"> Antonio García Cubas Pte #600 esq. Av. Tecnológico. Celaya, Gto. México </p>
          <p class="info_bottom"> Tel.(461)61 17575 </p>
        </div> 
        <div class="col-md-6">
          <div class="div_bottom" style="color:rgb(0,128,0)"> CAMPUS II </div>
          <p class="info_bottom"> Av. García Cubas 1200, Esquina Ignacio Borunda. Celaya, Gto. México. </p>
          <p class="info_bottom"> Tel.01(461) 617 77 70 </p>
        </div>   
      </div>
    </div>
    <div class="col-md-12" align="center">
        <a href = "ww.itcelaya.edu.mx"> ww.itcelaya.edu.mx</a>
        <br><br>
    </div>



  </div>
  </div>
<div class="col-md-3" align="center"></div>
<br><br><br><br><br><br><br><br><br><br>
</div>
<?php }
}
?>