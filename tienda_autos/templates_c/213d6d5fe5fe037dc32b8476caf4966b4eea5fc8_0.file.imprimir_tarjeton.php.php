<?php /* Smarty version 3.1.27, created on 2015-11-08 23:52:57
         compiled from "/var/www/html/Competencia2/Proyecto/templates/imprimir_tarjeton.php" */ ?>
<?php
/*%%SmartyHeaderCode:434086652564034b91a3a01_65440465%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213d6d5fe5fe037dc32b8476caf4966b4eea5fc8' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/imprimir_tarjeton.php',
      1 => 1447048341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434086652564034b91a3a01_65440465',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564034b9226131_66781939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564034b9226131_66781939')) {
function content_564034b9226131_66781939 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '434086652564034b91a3a01_65440465';
echo '<?php
';?>session_start();
$_SESSION["t_propietario"] = "Aa";
<?php echo '?>';?>

<div class="container">

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
          <label id="tarjeton_propietario"><?php echo '<?php ';?>echo $_SESSION['t_propietario'];<?php echo '?>';?></label>
        </div> 
        <div class="col-md-6">
          <label id="tarjeton_tipo">Tipo</label>
          <br><br><br><br><br>
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
    <br><br><br><br><br><br><br>
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

<!--
<?php echo '<script'; ?>
>
function impT() {
    $("#tarjeton_propietario").html("Hello jQuery");
    alert(t_propietario);
}
$(document).ready(impT);
<?php echo '</script'; ?>
>-->
<?php }
}
?>