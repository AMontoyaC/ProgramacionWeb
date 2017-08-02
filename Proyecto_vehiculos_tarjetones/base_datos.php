<?php
session_start();
require('conexion.php');

if(isset($_POST['añadir_AP'])) {
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$domicilio = $_POST["domicilio"];
	$telefono = $_POST["telefono"];
	$id_puesto = $_POST["id_puesto"];
	$no_licencia = $_POST["no_licencia"];
	$tarjeta_circulacion = $_POST["tarjeta_circulacion"];

	if($telefono==null)
		$telefono = 0;

	/*$linea = 'insert into propietario (nombre, apellidos, domicilio, telefono, id_categoria,no_licencia, tarjeta_circulacion, activo) values('."'" . $nombre . "','"
			. $apellidos . "','" . $domicilio . "'," . $telefono . ',' . $id_puesto . ','
			. $no_licencia . ",'" . $tarjeta_circulacion . "',1);";
	*/
	$linea = "select insertarP('".$nombre."','".$apellidos."','".$domicilio."',".$telefono.",".$id_puesto.",".$no_licencia.",'".$tarjeta_circulacion."');";
	try{
    	$rs = $db->Execute($linea);
    	echo $rs;
	} 
	catch (exception $e){
    	echo "+";
	}
}


if(isset($_POST['añadir_AV'])) {
	$tavp_id_prop = $_POST["tavp_id_prop"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$id_transmision = $_POST["id_transmision"];
	$placas = $_POST["placas"];
	$color = $_POST["color"];
	$año = $_POST["año"];
	$observaciones = $_POST["observaciones"];
	$caracteristicas = $_POST["caracteristicas"];
	$car1 = $caracteristicas{0};
	$car2 = $caracteristicas{1};
	$car3 = $caracteristicas{2};
	$car4 = $caracteristicas{3};
	$car5 = $caracteristicas{4};
	$car6 = $caracteristicas{5};

	$linea = "select insertarV2(". $tavp_id_prop .",'". $marca ."','". $modelo ."',". $id_transmision .",'". $placas ."','". $color ."','". $año ."','". $observaciones ."',". $car1. ",". $car2. ",". $car3. ",". $car4. ",". $car5. ",". $car6. ");";
    $rs = $db->Execute($linea);
    echo $rs;
}


//VER PROPIETARIOS
if(isset($_POST['verTablaP_AV'])) {
	$id_propietario;
	$nombre;
	$apellidos;
	$id_categoria;
	$categoria;
	$cadena = "";

	try{
		$linea = "select id_propietario,nombre,apellidos,id_categoria from propietario where activo='1';";
    	$rs = $db->Execute($linea);
    	while (!$rs->EOF) {
    		$id_propietario = $rs->fields[0];
    		$nombre = $rs->fields[1];
	        $apellidos = $rs->fields[2];
	        $id_categoria = $rs->fields[3];

	        switch ($id_categoria) {
	        	case 1:
	        		$categoria = 'Maestro';
	        		break;
	        	case 2:
	        		$categoria = 'Alumno';
	        		break;
	        	case 3:
	        		$categoria = 'Empleado Administrativo';
	        		break;
	        }
	        
	        $cadena = $cadena . "<tr onClick='obtenerinfoPropietarioAVP(". $id_propietario .")' style='color:black'id='". $id_propietario ."'>
	        <td id='tablaAVP_nombre'>" . $nombre . "</td>
	        <td id='tablaAVP_apellidos'>" . $apellidos . "</td>
        	<td id='tablaAVP_tipo'>" . $categoria . "</td>
      		</tr>";
	        $rs->MoveNext();
		}
		echo $cadena;
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}

//VER PROPIETARIOS PARA ALTA VEHICULOS
if(isset($_POST['ver_admin_P'])) {
	echo "<script type='text/javascript'>alert('alerta! P');</script>";
	try{
		$linea = 'select nombre, apellidos, telefono, id_categoria, no_licencia, tarjeta_circulacion from propietario;';
    	$rs = $db->Execute($linea);
    	if ($rs === false) die("failed");
	    while (!$rs->EOF) {
	        print $rs->fields[0];
	        $rs->MoveNext();
		}
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}


//VER VEHICULOS ADMIN
if(isset($_POST['verV_admin'])) {
	$id_vehiculo_Vadmin;
	$propietario_nombre_Vadmin;
	$propietario_apellidos_Vadmin;
	$marca_Vadmin;
	$modelo_Vadmin;
	$id_transmision_Vadmin;
	$placas_Vadmin;
	$color_Vadmin;
	$año_Vadmin;
	$id_caracteristicas_Vadmin;
	$observaciones_Vadmin;
	$cadena_Vadmin = "";
	
	try{
		$linea = "select vehiculo.id_vehiculo,propietario.nombre,propietario.apellidos,vehiculo.marca,vehiculo.modelo,vehiculo.id_transm,vehiculo.placas,vehiculo.color,vehiculo.año,vehiculo.observaciones,vehiculo.id_caract from propietario inner join vehiculo on propietario.id_propietario = vehiculo.id_propietario;";
    	$rs = $db->Execute($linea);
    	while (!$rs->EOF) {
    		$id_vehiculo_Vadmin = $rs->fields[0];
    		$propietario_nombre_Vadmin = $rs->fields[1];
    		$propietario_apellidos_Vadmin = $rs->fields[2];
    		$marca_Vadmin = $rs->fields[3];
	        $modelo_Vadmin = $rs->fields[4];
	        $id_transmision_Vadmin = $rs->fields[5];
	        $placas_Vadmin = $rs->fields[6];
	        $color_Vadmin = $rs->fields[7];
	        $año_Vadmin = $rs->fields[8];
	        $observaciones_Vadmin = $rs->fields[9];
	        $id_caracteristicas_Vadmin = $rs->fields[10];

	        $linea2 ="select seguro,aireacond,estereo,bolsasas,frenosd,birloss from caracteristicas where id_caract=". $id_caracteristicas_Vadmin .";";
	        $rs2 = $db ->Execute($linea2);
	        $caracteristicas_Vadmin = $rs2->fields[0] . "," .$rs2->fields[1]. "," .$rs2->fields[2]. "," .$rs2->fields[3]. "," .$rs2->fields[4]. "," .$rs2->fields[5];


	        switch ($id_transmision_Vadmin) {
	        	case 1:
	        		$transmision_Vadmin = 'Autom&aacute;tica';
	        		break;
	        	case 2:
	        		$transmision_Vadmin = 'Manual';
	        		break;
	        }

	        $cadena_Vadmin = $cadena_Vadmin . "<tr onClick='obtenerinfo_Vadmin(". $id_vehiculo_Vadmin .")' style='color:black'id='". $id_vehiculo_Vadmin ."'>
	        <td id='tabla_propietario_Vadmin'>" . $propietario_nombre_Vadmin . $propietario_apellidos_Vadmin ."</td>
	        <td id='tabla_marca_Vadmin'>" . $marca_Vadmin . "</td>
	        <td id='tabla_modelo_Vadmin'>" . $modelo_Vadmin . "</td>
	        <td id='tabla_transmision_Vadmin'>" . $transmision_Vadmin . "</td>
        	<td id='tabla_placas_Vadmin'>" . $placas_Vadmin . "</td>
        	<td id='tabla_color_Vadmin'>" . $color_Vadmin . "</td>
        	<td id='tabla_año_Vadmin'>" . $año_Vadmin . "</td>
        	<td id='tabla_observaciones_Vadmin' style='display:none;''>" . $observaciones_Vadmin . "</td>
        	<td id='tabla_id_caracteristicas_Vadmin' style='display:none;''>" . $id_caracteristicas_Vadmin . "</td>
        	<td id='tabla_caracteristicas_Vadmin' style='display:none;''>" . $caracteristicas_Vadmin . "</td>
      		</tr>";
	        $rs->MoveNext();
		}
		echo $cadena_Vadmin;
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}



//VER PROPIETARIOS ADMIN
if(isset($_POST['verP_admin'])) {
	$id_propietario_Padmin;
	$marca_Aadmin;
	$modelo_Vadmin;
	$domicilio_Padmin;
	$telefono_Padmin;
	$id_categoria_Padmin;
	$categoria_Padmin;
	$no_licencia_Padmin;
	$tarjeta_circulacion_Padmin;
	$cadena_Padmin = "";
	try{
		$linea = "select id_propietario,nombre,apellidos,domicilio,telefono,id_categoria,no_licencia,tarjeta_circulacion from propietario where activo='1';";
    	$rs = $db->Execute($linea);
    	while (!$rs->EOF) {
    		$id_propietario_Padmin = $rs->fields[0];
    		$nombre_Padmin = $rs->fields[1];
	        $apellidos_Padmin = $rs->fields[2];
	        $domicilio_Padmin = $rs->fields[3];
	        $telefono_Padmin = $rs->fields[4];
	        $id_categoria_Padmin = $rs->fields[5];
	        $no_licencia_Padmin = $rs->fields[6];
	        $tarjeta_circulacion_Padmin = $rs->fields[7];

	        switch ($id_categoria_Padmin) {
	        	case 1:
	        		$categoria_Padmin = 'Maestro';
	        		break;
	        	case 2:
	        		$categoria_Padmin = 'Alumno';
	        		break;
	        	case 3:
	        		$categoria_Padmin = 'Empleado Administrativo';
	        		break;
	        }
	        $cadena_Padmin = $cadena_Padmin . "<tr onClick='obtenerinfo_Padmin(". $id_propietario_Padmin .")' style='color:black'id='". $id_propietario_Padmin ."'>
	        <td id='tabla_nombre_Padmin'>" . $nombre_Padmin . "</td>
	        <td id='tabla_apellidos_Padmin'>" . $apellidos_Padmin . "</td>
	        <td id='tabla_domicilio_Padmin'>" . $domicilio_Padmin . "</td>
	        <td id='tabla_telefono_Padmin'>" . $telefono_Padmin . "</td>
        	<td id='tabla_tipo_Padmin'>" . $categoria_Padmin . "</td>
        	<td id='tabla_no_licencia_Padmin'>" . $no_licencia_Padmin . "</td>
        	<td id='tabla_tarjeta_circulacion_Padmin'>" . $tarjeta_circulacion_Padmin . "</td>
      		</tr>";
	        $rs->MoveNext();
		}
		echo $cadena_Padmin;
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}

if(isset($_POST['formP_admin'])) {
	$idP_formP_admin = $_POST["id_propietario_P"];
	$nombre_formP_admin = $_POST["nombre_P"];
	$apellidos_formP_admin = $_POST["apellidos_P"];
	$domicilio_formP_admin = $_POST["domicilio_P"];
	$telefono_formP_admin = $_POST["telefono_P"];
	$id_categoria_formP_admin = $_POST["id_categoria_P"];
	$no_licencia_formP_admin = $_POST["no_licencia_P"];
	$tarjeta_circulacion_formP_admin = $_POST["tarjeta_circulacion_P"];
	$btn = $_POST["boton"];


	if($btn==1){
		if($telefono_formP_admin==null)
		$telefono = 0;
		$linea = "update propietario set nombre='" . $nombre_formP_admin ."',apellidos='" . $apellidos_formP_admin . "',domicilio='" . $domicilio_formP_admin . "',telefono=" . $telefono_formP_admin . ",id_categoria=" . $id_categoria_formP_admin . ",no_licencia='" . $no_licencia_formP_admin . "',tarjeta_circulacion='" . $tarjeta_circulacion_formP_admin . "' where id_propietario=" . $idP_formP_admin . ";";
	}else{
		$linea = "select eliminarP(" . $idP_formP_admin . ");";
	}
	try{
    	$db->Execute($linea);
    	echo "*";
	} 
	catch (exception $e){
    	echo "+";
	}
}

if(isset($_POST['formV_admin'])) {
	$idV_formV_admin = $_POST["id_vehiculo_V"];
	$marca_formV_admin = $_POST["marca_V"];
	$modelo_formV_admin = $_POST["modelo_V"];
	$id_transmision_formV_admin = $_POST["id_transmision_V"];
	$placas_formV_admin = $_POST["placas_V"];
	$color_formV_admin = $_POST["color_V"];
	$año_formV_admin = $_POST["año_V"];
	$caracteristicas_formV_admin = $_POST["caracteristicas_V"];
	$id_caracteristicas_formV_admin = $_POST["id_caracteristicas_V"];
	$observaciones_formV_admin = $_POST["observaciones_V"];
	$btn = $_POST["boton"];

	$car1_V = $caracteristicas_formV_admin{0};
	$car2_V = $caracteristicas_formV_admin{1};
	$car3_V = $caracteristicas_formV_admin{2};
	$car4_V = $caracteristicas_formV_admin{3};
	$car5_V = $caracteristicas_formV_admin{4};
	$car6_V = $caracteristicas_formV_admin{5};

	if($btn==1){
		$linea = "select actualizarV(" . $idV_formV_admin . ",'" . $marca_formV_admin . "','" . $modelo_formV_admin . "'," . $id_transmision_formV_admin . ",'" . $placas_formV_admin . "','" . $color_formV_admin . "','" . $año_formV_admin . "','" . $observaciones_formV_admin . "'," . $id_caracteristicas_formV_admin . "," . $car1_V . "," . $car2_V . "," . $car3_V . "," . $car4_V . "," . $car5_V . "," . $car6_V . ");";
	}else{
		$linea = "select eliminarV(" . $idV_formV_admin . "," . $id_caracteristicas_formV_admin . ");";
	}
	try{
    	$db->Execute($linea);
    	echo "*";
	} 
	catch (exception $e){
    	echo "+";
	}
}


//VER TABLA TARJETONES
if(isset($_POST['verTabla_T'])) {
	$id_propietario_T;
	$nombre_T;
	$apellidos_T;
	$id_categoria_T;
	$categoria_T;
	$marca_T;
	$modelo_T;
	$placas_T;
	$color_T;
	$cadena_T = "";
	$id_vehiculo_T;

	try{
		$linea = "select propietario.id_propietario,propietario.nombre,propietario.apellidos,propietario.id_categoria,vehiculo.marca,vehiculo.modelo,vehiculo.placas,vehiculo.color,vehiculo.id_vehiculo from propietario inner join vehiculo on propietario.id_propietario = vehiculo.id_propietario;";
    	$rs = $db->Execute($linea);
    	while (!$rs->EOF) {
    		$id_propietario_T = $rs->fields[0];
    		$nombre_T = $rs->fields[1];
	        $apellidos_T = $rs->fields[2];
	        $id_categoria_T = $rs->fields[3];
	        $marca_T = $rs->fields[4];
	        $modelo_T = $rs->fields[5];
	        $placas_T = $rs->fields[6];
	        $color_T = $rs->fields[7];
	        $id_vehiculo_T = $rs->fields[8];

	        switch ($id_categoria_T) {
	        	case 1:
	        		$categoria_T = 'Maestro';
	        		break;
	        	case 2:
	        		$categoria_T = 'Alumno';
	        		break;
	        	case 3:
	        		$categoria_T = 'Empleado Administrativo';
	        		break;
	        }
	        $cadena_T = $cadena_T. "<tr onClick='obtenerinfoTarjeton(". $id_vehiculo_T .")' style='color:black'id='". $id_vehiculo_T ."'>
	        <td id='td_t_propietario'>" . $nombre_T . $apellidos_T . "</td>
	        <td id='td_t_tipo'>" . $categoria_T . "</td>
        	<td id='td_t_marca'>" . $marca_T . "</td>
        	<td id='td_t_modelo'>" . $modelo_T . "</td>
        	<td id='td_t_placas'>" . $placas_T . "</td>
        	<td id='td_t_color'>" . $color_T . "</td>
      		</tr>";
	        $rs->MoveNext();
		}
		echo $cadena_T;
	} 
	catch (exception $e){
    	echo "ERROR!";
	}
}


if(isset($_POST['T'])) {
	$_SESSION["tp"] = $_POST["tp"];
	$_SESSION["tt"] = $_POST["tt"];
	$_SESSION["tm"] = $_POST["tm"];
	$_SESSION["tmo"] = $_POST["tmo"];
	$_SESSION["tpl"] = $_POST["tpl"];
	$_SESSION["tc"] = $_POST["tc"];
}


?>