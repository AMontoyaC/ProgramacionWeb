$(document).ready(inicializa);


function inicializa() {
	//$(".recuadro").click(asignaParticipante);
	inicializa_dialog();
	$("#Salir").click(Salir);
	$("#selectParticipantes").change(verificaUsuarioElegido);
	$( "#dialog" ).dialog( "open" );
	$("#btnSugerencias").click(function () {
		$( "#dialogSugerencias" ).dialog( "open" );
	});
	$('.fancybox').fancybox({
		width: 300,
		height: 300,
		autoSize: false,
	});
} 


function Salir(){
	$.post(
		"datos.php", {Salir: true},
		function(data,status) {
			if(data == '1')
				window.location.replace("index.html");
		}
	);
}

var password;
var user;

function verificaUsuarioElegido() {
	//Validar contrasenia
	$('#password').val('');
	$('#password').show();
	$('#password').focus();
	$('#password').attr('placeholder', 'Escribe tu nueva contraseña');
}


function inicializa_dialog () {
	$( "#dialog" ).dialog({
		autoOpen: false,
		closeOnEscape: true,
		modal:true,
		width: 400,
		position: {my: "top", at: "top+150",},
		buttons: [
			{
				text: "Ok",
				click: function() {
					var d = $( this ).dialog();
					d.dialog( "close" );

					user = $('#selectParticipantes').find(":selected").text();
					password = $('#password').val();
					//mandar a php para saber si es primera vez logeado	
					$.post(
						"datos.php", {Pass: true,"user":user,"password":password},
						function(data,status) {
							if(data == '0')
								nuevaContra(user,password);
							else
								inicioSesion(user,password);
						}
					);
				}
			},
		]
	});	

	$( "#dialogSugerencias" ).dialog({
		autoOpen: false,
		modal:true,
		width: 400,
		position: {my: "top", at: "top+150",},
		open: function(event, ui){
			$.post(
				"getSugerencias.php",{sugPart:true},
				function(data,status) {
					$("#txtSugerencias").val(data);
				}
			);
			
		},
		buttons: [
			{
				text: "Guardar",
				click: function() {
					var txtsug = $("#txtSugerencias").val();
					$.post(
						"guardaSugerencias.php",{"sugerencias": txtsug},
						function(data,status) {
							alert(data);
						}
					);
					$( this ).dialog( "close" );
				}
			},
			{
				text: "Cancelar",
				click: function() {
					$( this ).dialog( "close" );
				}
			}
		]
	});
}


function cuadros(){
	$.post(
		"datos.php", {Cuadros: true},
		function(data,status) {
			$("#section").append(data);
			$(".recuadro").click(asignaParticipante);
		}
	);
}

function revisarSugPart(){
	$.post(
		"datos.php", {revPartSug: true},
		function(data,status) {
			if(data == '0')
				cuadros();
			else
				seleccion();
		}
	);
}


function seleccion(){
	$.post(
		"getSugerencias.php",{sugPartSug:true},
		function(data,status) {
			$("#section").append(data);
		}
	);
}

function asignaParticipante() {
	var id_part = $(this).attr("id");
	var part = $("#"+id_part);
	var url = "url(images/participante" + id_part + ".jpg)";
	//part.css("background", url);

	$.ajax({
		url:'asigna.php',
		data:{id_participante_sugerido:id_part},
		type:'post',
		success: function(data) {
			if(data == 1){
				part.css("background", url);
				$("#section").empty();
				seleccion();
			}
			else{
				alert(data);
			}
		}
	});
}

function nuevaContra(nombre, password){
	$.post(
		"datos.php",{nuevaContra:true,"nombre":nombre,"password":password},
		function(data,status) {
			if(data == '0')
				$("#wrapper").empty();
			else{
				alert(data);
				revisarSugPart();
			}
		}
	);
}

function inicioSesion(nombre, passwrord){
	$.post(
		"datos.php",{inicioSesion:true,"nombre":nombre,"password":password},
		function(data,status) {
			if(data == '0'){
				//$("#wrapper").empty();
				alert("contraseña incorrecta");
				window.location.replace("index.html");
			}
			else{
				alert(data);
				revisarSugPart();
			}	
		}
	);

}