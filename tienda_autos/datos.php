<?php
session_start();
require('conexion.php');

if(isset($_POST['inicioSesion'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$linea = "select id_usuario,nombre from usuario where password ='".$password."' and email='".$email."';";
	$rs = $db->Execute($linea);
	$id_usuario_log = $rs->fields[0];
	$id_nombre_log = $rs->fields[1];
	if($id_usuario_log == null)
		echo "0";
	else{
		$_SESSION['nombre'] = $id_nombre_log;
		$_SESSION['id'] = $id_usuario_log;
		echo $_SESSION['nombre'];
	}
}

if(isset($_POST['cerrarSesion'])) {
	if($_SESSION['id'] != null){
		session_destroy();
		session_start();
		echo "1";
	}else
		echo "0";
}

if(isset($_POST['registrar'])) {
	$nombre = $_POST["nombre"];
	$apepat = $_POST["apepat"];
	$apemat = $_POST["apemat"];
	$dir = $_POST["dir"];
	$tel = $_POST["tel"];
	$r_email = $_POST["r_email"];
	$r_password = $_POST["r_password"];

	$r_pass = md5($r_password);
	$linea = "insert into usuario (nombre,apellido_pat,apellido_mat,domicilio,telefono,email,password) values ('".$nombre."','".$apepat."','".$apemat."','".$dir."',".$tel.",'".$r_email."','".$r_pass."');";
	$db->Execute($linea);
	$linea2 = "select id_usuario from usuario where nombre='".$nombre."' and apellido_pat='".$apepat."' and apellido_mat='".$apemat."' and domicilio ='".$dir."' and telefono = ".$tel." and email='".$r_email."' and password = '".$r_pass."';";
	$res = $db->Execute($linea2);
	$id_r = $res->fields[0];
	echo $id_r;
}

if(isset($_POST['verCatalogo'])){
	$id_vehiculo;
	$marca;
	$modelo;
	$color;
	$precio;
	$observaciones;
	$cadena = "";

	try{
		$linea = "select id_vehiculo,marca,modelo,color,precio,observaciones from vehiculo where disponibilidad=1;";
    	$rs = $db->Execute($linea);
    	
    	while (!$rs->EOF) {
    		$id_vehiculo = $rs->fields[0];
    		$marca = $rs->fields[1];
	        $modelo = $rs->fields[2];
	        $color = $rs->fields[3];
	        $precio = $rs->fields[4];
	        $observaciones = $rs->fields[5];

	        //poner imagen 0
		        $aux = $id_vehiculo;
		        if($id_vehiculo >7)
		        	$aux = 0;

	        if($observaciones == null)
	        	$observaciones = "No Observaciones";

	        $cadena = $cadena . '<div class="content-wrapper"><div class="content-top"><div class="text"><div class="grid_1_of_3 images_1_of_3"><div class="grid_1"><div class="imgcat"><img src="images/autos/v'.$aux.'.jpg" title="continue reading" width="270px" height="270px"></div><div class="grid_desc"><p class="title" id="marca_modelo">'.$marca.'  '.$modelo.'</p><p class="title1" id="color">'.$color.'</p><p class="title1" id="observaciones">'.$observaciones.'</p><div class="price" style="height: 19px;"><span class="precio" id="precio">$'.$precio.'</span></div><div class="cart-button"><div class="cart" onclick="seleccionarCarro('.$id_vehiculo.')"><img src="images/cart.png"/></div></div></div></div><div class="clear"></div></div></div></div></div>';
	        $rs->MoveNext();
		}
		echo $cadena;
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}

if(isset($_POST['verCarro'])){
	$v_marca;
	$v_modelo;
	$v_color;
	$v_precio;
	$v_observaciones;
	$v_id_vehiculo;
	$cadena = "";
	
	if(!empty($_SESSION['id'])){

		$v_id_usuario = $_SESSION['id'];
		try{
			$linea = "select v.marca,v.modelo,v.color,v.precio,v.observaciones,v.id_vehiculo,u.id_usuario from vehiculo v inner join carro_compra c on v.id_vehiculo = c.id_vehiculo inner join usuario u on c.id_usuario = u.id_usuario where u.id_usuario = ".$v_id_usuario." and v.disponibilidad=1;";
			$rs = $db->Execute($linea);

			while (!$rs->EOF) {
	    		$v_marca = $rs->fields[0];
		        $v_modelo = $rs->fields[1];
		        $v_color = $rs->fields[2];
		        $v_precio = $rs->fields[3];
		        $v_observaciones = $rs->fields[4];
		        $v_id_vehiculo = $rs->fields[5];

		        if($v_observaciones == null)
		        	$v_observaciones = "No Observaciones";

		        	//poner imagen 0
		        $aux = $v_id_vehiculo;
		        if($v_id_vehiculo >7)
		        	$aux = 0;


	        
		        $cadena = $cadena . '<div class="content-wrapper">		  
					<div class="content-top">
						<div class="text"> 	
							<div class="grid_1_of_3 images_1_of_3">
								<div class="grid_1">
									<div class="imgcat">
										<img src="images/autos/v'.$aux.'.jpg" title="continue reading" width="270px" heigth="270px">
									</div>
									<div class="grid_desc">
										<p class="title" id="marca_modelo">'.$v_marca.'    '.$v_modelo.'</p>
										<p class="title1" id="color">'.$v_color.'</p>
										<p class="title1" id="observaciones">'.$v_observaciones.'</p>
										<div class="price" style="height: 19px;">
										 	<span class="precio" id="precio">$'.$v_precio.'</span>
										</div>
										<div class="cart-button">
											<div class="cart" id="btnCarro" onclick="apartar('.$v_id_vehiculo.')">
												Apartar
											</div>
											<div class="cart" id="btnCarro2" onclick="eliminar('.$v_id_vehiculo.')">
												Eliminar del Carro
											</div>
										</div>
									</div>
								</div>
							<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>';
		        $rs->MoveNext();
			}
		echo $cadena;
		}catch (exception $e){
			echo "ERROR!";
		}
	}
	else
		echo "0";
}

if(isset($_POST['apartar'])){
	$a_id_vehiculo = $_POST['id_vehiculo'];

	try{
		$linea = "update vehiculo set disponibilidad='0' where id_vehiculo=".$a_id_vehiculo.";";
		$db->Execute($linea);

		$linea2 = "select disponibilidad from vehiculo where id_vehiculo=".$a_id_vehiculo.";";
		$res = $db->Execute($linea2);

		$opc = $res->fields[0];

		if($opc == 0)
			echo "Vehículo apartado";
		else
			echo "ERROR!";

	}catch (exception $e){
		echo "ERROR!";
	}
}

if(isset($_POST['eliminar'])){
	$e_id_vehiculo = $_POST['id_vehiculo'];

	try{
		$linea = "delete from carro_compra where id_vehiculo=".$e_id_vehiculo." and id_usuario=".$_SESSION['id'].";";
		$db->Execute($linea);

		$linea2 = "select id_vehiculo from carro where id_vehiculo=".$e_id_vehiculo." and id_usuario=".$_SESSION['id'].";";
		$res = $db->Execute($linea2);

		$opc = $res->fields[0];

		if($opc == null)
			echo "*";
		else
			echo "ERROR!";

	}catch (exception $e){
		echo "ERROR!";
	}
}

if(isset($_POST['agregar_carro'])){
	$ac_id_vehiculo = $_POST['id_vehiculo'];

	try{
		$linea = "insert into carro_compra (id_usuario,id_vehiculo) values (".$_SESSION['id'].",".$ac_id_vehiculo.");";
		$db->Execute($linea);

		$linea2 = "select id_vehiculo from carro_compra where id_usuario = ".$_SESSION['id']." and id_vehiculo = ".$ac_id_vehiculo.";";
		$rs = $db->Execute($linea2);

		$opc = $rs->fields[0];

		if($opc == $ac_id_vehiculo)
			echo "*";
		else
			echo "ERROR!";
	}catch (exception $e){
		echo "ERROR!";
	}
}

if(isset($_POST['ofertar'])){
	$o_marca = $_POST['o_marca'];
	$o_modelo = $_POST['o_modelo'];
	$o_color = $_POST['o_color'];
	$o_precio = $_POST['o_precio'];
	$o_observaciones = $_POST['o_observaciones'];


	if(!empty($_SESSION['id'])){
		try{
			$linea = "insert into vehiculo (marca,modelo,color,precio,observaciones,disponibilidad,id_vendedor) values ('".$o_marca."','".$o_modelo."','".$o_color."',".$o_precio.",'".$o_observaciones."','1',".$_SESSION['id'].");";
			$db->Execute($linea);

			$linea2 = "select id_vehiculo from vehiculo where marca ='".$o_marca."' and modelo='".$o_modelo."' and color ='".$o_color."' and precio=".$o_precio." and observaciones='".$o_observaciones."' and id_vendedor=".$_SESSION['id'].";";
			$rs = $db->Execute($linea2);

			$opc = $rs->fields[0];

			if($opc >= 1)
				echo "*";
			else
				echo "ERROR!";
		}catch (exception $e){
			echo "ERROR!";
		}
	}
	else
		echo "No se ha iniciado sesión";
}
?>