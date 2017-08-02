<?php
require('../modelo/clientes_class.php');

$nomcte = $_POST['txtnom'];
$apepatcte = $_POST['txtapepat'];
$apematcte = $_POST['txtapemat'];
$dircte = $_POST['txtdir'];
$ciucte = $_POST['txtciu'];
$cpcte = $_POST['txtcp'];
$telcte = $_POST['txttel'];
$emailcte = $_POST['txtemail'];
$confemailcte = $_POST['txtcemail'];
$usuariocte = $_POST['txtusuario'];
$passwordcte = $_POST['txtpassword'];

$objCte = new Clientes($nomcte,$apepatcte,$apematcte,$dircte,$ciucte,$cpcte,$telcte,$emailcte
						,$usuariocte,$passwordcte);

switch ($_GET['opc']) {
	case 1:
		//insercion

        
		    $captcha;
        $captcha=$_POST['g-recaptcha-response'];
        if(!$captcha){
          echo "<script type='text/javascript'>alert('Eres un robot!');</script>";
          echo("<script>window.location = '../vista/inicio.php';</script>");
          exit;
        }else{
          $objCte->insClienteADO();
        }
        /*
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdmogcTAAAAADXc-fQqXwcr4XssVbCeTB2dfdxY
          &response=".$captcha."&remoteip".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo "<script type='text/javascript'>alert('Eres un robot!');</script>";
          echo("<script>window.location = '../vista/inicio.php';</script>");
        }else
        {
			$objCte->insClienteADO();
        }
        */
		//$objCte->insClienteADO();
		break;
	
	case 2:
		//inciar sesion
    $objCte->iniciarsesionADO();
		break;
}
?>