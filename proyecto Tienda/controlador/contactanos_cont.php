<?php
require('../modelo/contactanos_class.php');

$nomc = $_POST['txtcnom'];
$emailc = $_POST['txtconemail'];
$asuntoc = $_POST['txtcasunto'];
$mensajec = $_POST['txtcmensaje'];

$objContactanos = new Contactanos($nomc,$emailc,$asuntoc,$mensajec);

		$captcha2;
        $captcha2=$_POST['g-recaptcha-response'];
        if(!$captcha2){
          echo "<script type='text/javascript'>alert('Eres un robot!');</script>";
          echo("<script>window.location = '../vista/inicio.php';</script>");
          exit;
        }else{
        	$objContactanos -> enviarDuda();
        }
?>