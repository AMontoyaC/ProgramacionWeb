$(document).ready(inicializa);

function inicializa(){
	$("#form_registro").hide();
	$("#form_inicio_sesion").hide();
	$("#btn_inicio_sesion").click(function(e){
    	inicioSesion();
		e.preventDefault(); 
	});
	$("#btn_registro").click(function(e){
    	registro();
		e.preventDefault(); 
	});
	var nombre= "";
	$("#user_loggeado").text(nombre);
	$("#cerrar_sesion").click(cerrarSesion);
	$("#catalogo").show();
	$("#catalogo").click(function(e){
		verCatalogo();
		e.preventDefault();
	});


	$("#carro").show();
	$("#carro").click(function(e){
		verCarro();
		e.preventDefault();
	});
	$(".total").css('background-color','black');

	$("#btn_ofertar").click(function(e){
		ofertar();
		e.preventDefault();
	});
}

function selecciona(value){
	if(value == 1){
		$("#titulo_form").text("INICIO SESIÓN");
		$("#form_inicio_sesion").show();
		$("#form_registro").hide();
	}
	else{
		$("#titulo_form").text("REGISTRO");
		$("#form_registro").show();
		$("#form_inicio_sesion").hide();
	}
} 

function inicioSesion(){
	var user = $("#fis_email").val();
	var pass = $("#fis_password").val();
	$.post(
			"datos.php", {inicioSesion: true,"email": user, "password": pass},
			function(data,status) {
		 		if(data != '0'){
		 			alert("Bienvenid@ " + data);
		 			window.location = "index.php";
		 		}else
		 			alert("Inicio Sesión incorrecto");
	        }
	);
}

function registro(){
	var nombre = $("#fr_nombre").val();
	var apepat = $("#fr_apepat").val();
	var apemat = $("#fr_apemat").val();
	var dir = $("#fr_direccion").val();
	var tel = $("#fr_telefono").val();
	var r_email = $("#fr_email").val();
	var r_password = $("#fr_password").val();
	$.post(
			"datos.php", {registrar: true,"nombre": nombre, "apepat" : apepat, "apemat": apemat, "dir":dir, "tel": tel,
								"r_email": r_email, "r_password":r_password},
			function(data,status) {
		 		if(data >= 1){
		 			alert("Registro Correcto!");
		 			window.location = "index.php";
		 		}else
		 			alert("Registro fallido :(");
	        }
	);
}

function cerrarSesion(){
	$.post(
			"datos.php", {cerrarSesion: true},
			function(data,status) {
		 		if(data == '1'){
					$("#user_loggeado").text("");
					alert("Sesión cerrada");
				}
		 		else
		 			alert("Error! al cerrar sesión");
	        }
	);
}

function verCatalogo(){
	$("#catalogo").hide();
	$(".total").css('background-color','white');
	$.post(
			"datos.php", {verCatalogo: true},
			function(data,status) {
		 		$("#c").append(data);
	        }
	);
}

function verCarro(){
	$("#carro").hide();
	$(".total").css('background-color','white');
	$.post(
			"datos.php", {verCarro: true},
			function(data,status) {
				if(data == '0')
					alert("No se ha iniciado sesión");
				else
		 			$("#vc").append(data);
	        }
	);
}

function seleccionarCarro(value){
	$.post(
			"datos.php", {agregar_carro: true,"id_vehiculo":value},
			function(data,status) {
				alert(data);
				if(data == '*'){
					alert("Vehículo agregado a carro de compras");
		 			window.location = "index.php";
		 		}else
		 			alert("Error al agregar vehículo");
	        }
	);
}

function apartar(value){
	$.post(
			"datos.php", {apartar: true,"id_vehiculo":value},
			function(data,status) {
				alert(data);
		 		window.location = "index.php";
	        }
	);
}

function eliminar(value){
	$.post(
			"datos.php", {eliminar: true,"id_vehiculo":value},
			function(data,status) {
				var aux = data.charAt(136);
				if(aux == '*'){
					alert("Vehículo eliminado del carro");
		 			window.location = "index.php";
				}
				else
					alert("Error al eliminar");
	        }
	);
}

function ofertar(){
	var o_marca = $("#fo_marca").val();
	var o_modelo = $("#fo_modelo").val();
	var o_color = $("#fo_color").val();
	var o_precio = $("#fo_precio").val();
	var o_observaciones = $("#fo_observaciones").val();
	$.post(
			"datos.php", {ofertar: true,"o_marca": o_marca, "o_modelo": o_modelo, "o_color": o_color,"o_precio": o_precio,
						"o_observaciones": o_observaciones},
			function(data,status) {
				if(data == '*'){
					alert("Vehículo ofertado");
		 			window.location = "index.php";
				}
				else
					alert("Error al ofertar");
	        }
	);
}