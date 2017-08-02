<?php /* Smarty version 3.1.27, created on 2015-11-13 04:26:13
         compiled from "/var/www/html/Competencia2/Proyecto/templates/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:19697721235645bac541b208_71758405%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be79efdb9e3fc6a19854bf0b5d4920c3bcebb5e' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/header.html',
      1 => 1447410347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19697721235645bac541b208_71758405',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5645bac54290a1_33042375',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5645bac54290a1_33042375')) {
function content_5645bac54290a1_33042375 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19697721235645bac541b208_71758405';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Instituto Tecnol&oacute;gico de Celaya</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

  

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    
    
    <?php echo '<script'; ?>
 type="text/javascript" src="jspdf/libs/base64.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jspdf/libs/sprintf.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="jspdf/jspdf.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">-->
    

</head>

<body>
    <header>
        <div id="titulo"><img src="img/logo_tecno.png" id="logo"></div>
        <div class="titulo" id="titulo">TECNOLÓGICO NACIONAL <br>DE MÉXICO
        <h2>INSTITUTO TECNOLÓGICO DE CELAYA</h2></div>
        <div id="titulo"><img src="img/lince_escudo.png" id="escudo"></div>
    </header>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <nav class="menu" id="m">
        <div class="container">
            <div class="menu2">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" id="btn1">Inicio</a></li>
                    <li><a href="index.php?action=alta_propietarios" id="btn2">Alta Propietarios</a></li>
                    <li><a href="index.php?action=alta_vehiculos" id="btn3">Alta Veh&iacute;culos</a></li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Administraci&oacute;n<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" id="admin">
                            <li><a href="index.php?action=admin_propietarios" id="admin_propietarios">Propietarios</a></li>
                            <li><a href="index.php?action=admin_vehiculos" id="admin_vehiculos">Veh&iacute;culos</a></li>
                            <li><a href="index.php?action=admin_tarjetones" id="admin_tarjetones">Tarjetones</a></li>
                            <!--<li><a href="index.php?action=admin_estadisticas" id="admin_estadisticas">Estadísticas</a></li>-->
                        </ul>
                    </li>
                </u
            </div>
        </div>
    </nav>

    <br><br>

<?php }
}
?>