<?php /* Smarty version 3.1.27, created on 2015-11-08 00:07:57
         compiled from "/var/www/html/Competencia2/Proyecto/templates/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:2032960657563ee6bd8edcc4_44842574%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47a1e85e1f9dc622ae6c8d4e0881a286553488c' => 
    array (
      0 => '/var/www/html/Competencia2/Proyecto/templates/footer.html',
      1 => 1446962836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032960657563ee6bd8edcc4_44842574',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ee6bd90b5a9_65253460',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ee6bd90b5a9_65253460')) {
function content_563ee6bd90b5a9_65253460 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2032960657563ee6bd8edcc4_44842574';
?>
<section>
    <div class="container" id="slide">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/banner1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/banner2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/banner3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="m">
                    <p>Creado por:<br>
                    De Los Santos V&aacute;zquez Silvia Ver&oacute;nica<br>
                    Montoya C&aacute;rdenas Andrea<br>
                    P&eacute;rez Vel&aacute;zquez Nallely </p>
                </div>
            </div>
        </div>
    </footer>

    
    <?php echo '<script'; ?>
>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    <?php echo '</script'; ?>
>
    
</body>

</html>
<?php }
}
?>