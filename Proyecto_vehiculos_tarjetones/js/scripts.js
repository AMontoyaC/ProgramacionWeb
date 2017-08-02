$(document).ready(inicializa);

function inicializa(){
	$('#form_alta_propietarios').submit(function(){
      falta_propietarios();
      return false;
   	});

   


//aqui termina el del grafico
   	$('#btn_admin_propietarios_ver').click(VerPropietarios);
   	$('#btn_admin_vehiculos_ver').click(VerVehiculos);




   	//TARJETONES
   	var t_propietario = null;
   	var t_tipo = null;
   	var t_marca = null;
   	var t_modelo = null;
   	var t_placas = null;
   	var t_color = null;

   	//ALTA VEHICULOS OBTENER INFO PROPIETAROS
   	var tavp_nombre = null;
   	var tavp_apellidos = null;
   	var tavp_categoria = null;
   	var tavp_id_prop = null;

   	$('#btn_tarjetones_vehiculos_ver').prop('disabled',false);
   	$('#btn_tarjetones_vehiculos_ver').click(VerinfoTarjetones);
   	$('#btn_tarjetones_vehiculos_imprimir').click(ImprimirTarjeton);
   	$('#tabla_tarjetones_vehiculos').find('tr').click(obtenerinfoTarjeton);
   	$('#tarjeton').hide();
   	$('#btn_regresar').hide();
   	$('#btn_ver_pdf').hide();

   	//
   	$('#btn_ver_pdf').click(verPDF);
   	
   	$('#btn_regresar').click(btnRegresar);
	$('#btn_av_tablaP').prop('disabled', false);
   	$('#btn_av_tablaP').click(verTablaP_AV);
   	$('#btn_alta_vehiculos').prop('disabled',true);
	$('#btn_admin_propietarios_ver').prop('disabled', false);
	$('#btn_admin_vehiculos_ver').prop('disabled', false);
	$('#btn_admin_propietarios_actualizar').prop('disabled',true);
	$('#btn_admin_propietarios_eliminar').prop('disabled',true);
	$('#btn_admin_vehiculos_actualizar').prop('disabled',true);
	$('#btn_admin_vehiculos_eliminar').prop('disabled',true);


   	$('#btn_alta_vehiculos').click(function(e){
    	faltaVehiculos();
		e.preventDefault();
	});

	$("#btn_admin_propietarios_actualizar").click(function(e){
    	adminPropietario(1);
		e.preventDefault();
	});
	$("#btn_admin_propietarios_eliminar").click(function(e){
    	adminPropietario(2);
		e.preventDefault();
	});

	$("#btn_admin_vehiculos_actualizar").click(function(e){
    	adminVehiculo(1);
		e.preventDefault();
	});
	$("#btn_admin_vehiculos_eliminar").click(function(e){
    	adminVehiculo(2);
		e.preventDefault();
	});
}

function verPDF(){
	$.post(
			"base_datos.php", {T: true,"tp":t_propietario,"tt": t_tipo,"tm":t_marca,"tmo":t_modelo,
								"tpl":t_placas,"tc":t_color}
	);
	var myWindow = window.open("intento.php", "Tarjeton", "width=300, height=520");
	t_propietario = null;
	t_tipo = null;
	t_marca = null;
	t_modelo = null;
	t_placas = null;
	t_color = null;
}

function clickRB(id){
		switch(id){
			case 1:
				car1 = '1';
			break;
			case 2:
				car2 = '1';
			break;
			case 3:
				car3 = '1';
			break;
			case 4:
				car4 = '1';
			break;
			case 5:
				car5 = '1';
			break;
			case 6:
				car6 = '1';
			break;
		}
}

var car1 = '0';
var car2 = '0';
var car3 = '0';
var car4 = '0';
var car5 = '0';
var car6 = '0';

function faltaVehiculos(){
	var marca;
	var modelo;
	var idt;
	var id_transmision = 1;
	var placas;
	var color = "";
	var año;
	var caracteristicas;
	var observaciones = "";
	

	marca = $('#marca').val();
	modelo = $('#modelo').val();

	idt = $('#transmision').val();
	switch(idt){
		case 'Autom&aacute;tica':
			id_transmision = 1;
			break;
		case 'Manual':
			id_transmision = 2;
		break;
	}

	placas = $('#placas').val();
	color  = $('#color').val();
	año = $('#año').val();
	observaciones = $('#observaciones').val();

	caracteristicas = car1 + car2 + car3 + car4 + car5 + car6;

	$.post(
			"base_datos.php", {añadir_AV: true,"tavp_id_prop": tavp_id_prop,"marca": marca, "modelo": modelo,
								"id_transmision": id_transmision,"placas": placas, "color": color, "año": año,
								"observaciones": observaciones,"caracteristicas": caracteristicas},
			function(data,status) {
		 		if(data.charAt(12) == 1)
					window.location = "index.php?action=registro";
		 		else
		 			alert("Registro fallido \nFavor de verificar");
	        }
	);
}

function verTablaP_AV(){
	var cadena="";
	$.post(
			"base_datos.php", {verTablaP_AV: true},
		 	function(data,status) {
		 		$("#tablaP").append(data);
		 		$('#btn_av_tablaP').prop('disabled', true);
	        }
	);
}

function falta_propietarios(){
	var nombre = $('#nombre').val();
	var apellidos = $('#apellidos').val();

	//
	var domicilio = "";
	var telefono = "";
	//

	domicilio = $('#domicilio').val();
	telefono = $('#telefono').val();
	var id_puesto = $("#Puesto option:selected").val();
	switch(id_puesto){
		case 'Maestro':
			id_puesto = 1;
			break;
		case 'Alumno':
			id_puesto = 2;
		break;
		case 'Empleado Administrativo':
			id_puesto = 3;
			break;
	}
	var no_licencia = $('#no_licencia').val();
	var tarjeta_circulacion = $('#tarjeta_circulacion').val();
	
	
	$.post(
			"base_datos.php", {añadir_AP: true, "nombre": nombre, "apellidos": apellidos,
								"domicilio": domicilio,"telefono": telefono, 
								"id_puesto": id_puesto, "no_licencia": no_licencia,
		 						"tarjeta_circulacion": tarjeta_circulacion},
		 	function(data,status) {
		 		if(data.charAt(11)>= 1)
					window.location = "index.php?action=registro";
		 		else
		 			alert("Registro fallido \nFavor de verificar");

	        }
	);
}


function VerPropietarios(){
	var cadena="";
	$.post(
			"base_datos.php", {verP_admin: true},
		 	function(data,status) {
		 		$("#tabla_admin_propietarios").append(data);
		 		$('#btn_admin_propietarios_ver').prop('disabled', true);
	        }
	);
}

function VerVehiculos(){
	var cadena="";
	$.post(
			"base_datos.php", {verV_admin: true},
		 	function(data,status) {
		 		$("#tabla_admin_vehiculos").append(data);
		 		$('#btn_admin_vehiculos_ver').prop('disabled', true);
	        }
	);
}

function obtenerinfoTarjeton(id){
	t_propietario = $('#'+id).find("#td_t_propietario").text();
	t_tipo = $('#'+id).find("#td_t_tipo").text();
	t_marca = $('#'+id).find("#td_t_marca").text();
	t_modelo = $('#'+id).find("#td_t_modelo").text();
	t_placas = $('#'+id).find("#td_t_placas").text();
	t_color = $('#'+id).find("#td_t_color").text();

	$('tr').find("#td_t_propietario").css('color','black');
	$('#'+id).find("#td_t_propietario").css('color','#1D663F');

	$("#btn_tarjetones_vehiculos_imprimir").prop('disabled', false);
}

var id_prop_Padmin;
var nombre_Padmin;
var apellidos_Padmin;
var domicilio_Padmin;
var telefono_Padmin;
var id_tipo_Padmin;
var no_licencia_Padmin;
var tarjeta_circulacion_Padmin;

function obtenerinfo_Padmin(id){
	id_prop_Padmin = id;
	nombre_Padmin = $('#'+id).find("#tabla_nombre_Padmin").text();
	apellidos_Padmin = $('#'+id).find("#tabla_apellidos_Padmin").text();
	domicilio_Padmin = $('#'+id).find("#tabla_domicilio_Padmin").text();
	telefono_Padmin = $('#'+id).find("#tabla_telefono_Padmin").text();
	id_tipo_Padmin = $('#'+id).find("#tabla_tipo_Padmin").text();
	no_licencia_Padmin = $('#'+id).find("#tabla_no_licencia_Padmin").text();
	tarjeta_circulacion_Padmin = $('#'+id).find("#tabla_tarjeta_circulacion_Padmin").text();
	
	$('tr').find("#tabla_nombre_Padmin").css('color','black');
	$('#'+id).find("#tabla_nombre_Padmin").css('color','#1D663F');

	switch (id_tipo_Padmin) {
	    case 'Maestro':
				$('#op_Maestro').prop('selected',true);
	    	break;
	    case 'Alumno':
				$('#op_Alumno').prop('selected',true);
	    	break;
	    case 'Empleado Administrativo':
				$('#op_Empleado').prop('selected',true);
	    	break;
	}

	//colocar datos en formulario
	$('#admin_nombre').val(nombre_Padmin);
	$('#admin_apellidos').val(apellidos_Padmin);
	$('#admin_domicilio').val(domicilio_Padmin);
	$('#admin_telefono').val(telefono_Padmin);
	
	$('#admin_no_licencia').val(no_licencia_Padmin);
	$('#admin_tarjeta_circulacion').val(tarjeta_circulacion_Padmin);

	$('#btn_admin_propietarios_actualizar').prop('disabled',false);
	$('#btn_admin_propietarios_eliminar').prop('disabled',false);
}

var id_vehiculo_Vadmin;
var marca_Vadmin;
var modelo_Vadmin;
var transmision_Vadmin;
var placas_Vadmin;
var color_Vadmin;
var año_Vadmin;
var observaciones_Vadmin;
var caracteristicas_Vadmin;
var id_caracteristicas_Vadmin;

function obtenerinfo_Vadmin(id){
	$('#c1').prop('checked',false);
	$('#c2').prop('checked',false);
	$('#c3').prop('checked',false);
	$('#c4').prop('checked',false);
	$('#c5').prop('checked',false);
	$('#c6').prop('checked',false);


	id_vehiculo_Vadmin = id;
	marca_Vadmin = $('#'+id).find("#tabla_marca_Vadmin").text();
	modelo_Vadmin = $('#'+id).find("#tabla_modelo_Vadmin").text();
	transmision_Vadmin = $('#'+id).find("#tabla_transmision_Vadmin").text();
	placas_Vadmin = $('#'+id).find("#tabla_placas_Vadmin").text();
	color_Vadmin = $('#'+id).find("#tabla_color_Vadmin").text();
	año_Vadmin = $('#'+id).find("#tabla_año_Vadmin").text();
	observaciones_Vadmin = $('#'+id).find("#tabla_observaciones_Vadmin").text();
	caracteristicas_Vadmin = $('#'+id).find("#tabla_caracteristicas_Vadmin").text();
	id_caracteristicas_Vadmin = $('#'+id).find("#tabla_id_caracteristicas_Vadmin").text();
	
	$('tr').find("#tabla_propietario_Vadmin").css('color','black');
	$('#'+id).find("#tabla_propietario_Vadmin").css('color','#1D663F');

	switch (transmision_Vadmin) {
	    case 'Automática':
				$('#opAutomaticoV').prop('selected',true);
	    	break;
	    case 'Manual':
				$('#opManualV').prop('selected',true);
	    	break;
	}

	//colocar datos en formulario
	$('#marca').val(marca_Vadmin);
	$('#modelo').val(modelo_Vadmin);
	$('#placas').val(placas_Vadmin);
	$('#color').val(color_Vadmin);
	$('#observaciones').val(observaciones_Vadmin);

	$('#' + año_Vadmin).prop('checked',true);

	//$('#c1').prop('checked',true);
	for (var i = 0; i <= caracteristicas_Vadmin.length-1; i=i+2) {
		if(caracteristicas_Vadmin.charAt(i) == 1){
			switch(i){
				case 0:
					$('#c1').prop('checked',true);
				break;
				case 2:
					$('#c2').prop('checked',true);
				break;
				case 4:
					$('#c3').prop('checked',true);
				break;
				case 6:
					$('#c4').prop('checked',true);
				break;
				case 8:
					$('#c5').prop('checked',true);
				break;
				case 10:
					$('#c6').prop('checked',true);
				break;
			}
		}
	};

	$('#btn_admin_vehiculos_actualizar').prop('disabled',false);
	$('#btn_admin_vehiculos_eliminar').prop('disabled',false);
}

function obtenerinfoPropietarioAVP(id){
	tavp_id_prop = id;
	tavp_nombre = $('#'+id).find("#tablaAVP_nombre").text();
	tavp_apellidos = $('#'+id).find("#tablaAVP_apellidos").text();
	tavp_categoria = $('#'+id).find("#tablaAVP_tipo").text();
	
	$('tr').find("#tablaAVP_nombre").css('color','black');
	$('#'+id).find("#tablaAVP_nombre").css('color','#1D663F');
	var id_cat;
 
	switch (tavp_categoria) {
	    case 'Maestro':
	    	id_cat = 1;
	    	break;
	    case 'Alumno':
	    	id_cat = 2;
	    	break;
	    case 'Empleado Administrativo':
	    	id_cat = 3;
	    	break;
	}
	$('#btn_alta_vehiculos').prop('disabled',false);
}

function ImprimirTarjeton(){
	$('#tarjeton').show();
	$('#btn_regresar').show();
	$('#btn_ver_pdf').show();
	$('#tabla_tarjetones_vehiculos').hide();
	$('#btn_tarjetones_vehiculos_ver').hide();
	$('#btn_tarjetones_vehiculos_imprimir').hide();
	verImprimirTarjeton();
	
	/*t_propietario = null;
	t_tipo = null;
	t_marca = null;
	t_modelo = null;
	t_placas = null;
	t_color = null;*/
	$("#btn_tarjetones_vehiculos_imprimir").prop('disabled', true);
}

function btnRegresar(){
	$('#tarjeton').hide();
	$('#btn_regresar').hide();
	$('#btn_ver_pdf').hide();
	$('#tabla_tarjetones_vehiculos').show();
	$('#btn_tarjetones_vehiculos_ver').show();
	$('#btn_tarjetones_vehiculos_imprimir').show();
}

function verImprimirTarjeton(){
	document.getElementById('tarjeton_propietario').innerHTML = t_propietario;
	document.getElementById('tarjeton_tipo').innerHTML = t_tipo;
	document.getElementById('tarjeton_marca').innerHTML = t_marca;
	document.getElementById('tarjeton_modelo').innerHTML = t_modelo;
	document.getElementById('tarjeton_placas').innerHTML = t_placas;
	document.getElementById('tarjeton_color').innerHTML = t_color;
}

function VerinfoTarjetones(){
	$.post(
			"base_datos.php", {verTabla_T: true},
		 	function(data,status) {
		 		$("#tabla_tarjetones_vehiculos").append(data);
		 		$('#btn_tarjetones_vehiculos_ver').prop('disabled', true);
	        }
	);
}

function adminPropietario(btn){
	var id_propietario_P = id_prop_Padmin;
	var nombre_P = $("#admin_nombre").val();
	var apellidos_P = $("#admin_apellidos").val();
	var domicilio_P = $("#admin_domicilio").val();
	var telefono_P = $("#admin_telefono").val();
	var id_categoria_P = $("#admin_Puesto option:selected").val();
	switch(id_categoria_P){
		case 'Maestro':
			id_categoria_P = 1;
			break;
		case 'Alumno':
			id_categoria_P = 2;
		break;
		case 'Empleado Administrativo':
			id_categoria_P = 3;
			break;
	}
	var no_licencia_P = $("#admin_no_licencia").val();
	var tarjeta_circulacion_P = $("#admin_tarjeta_circulacion").val();
	var boton = btn;
	
	$.post(
			"base_datos.php", {formP_admin: true,"id_propietario_P": id_propietario_P,"nombre_P": nombre_P,
								"apellidos_P": apellidos_P,"domicilio_P": domicilio_P, "telefono_P": telefono_P,
								"id_categoria_P": id_categoria_P,"no_licencia_P": no_licencia_P,
								"tarjeta_circulacion_P": tarjeta_circulacion_P,"boton":boton},
		 	function(data,status) {
		 		if(data.charAt(data.length-1)== '*')
					window.location = "index.php?action=registro";
		 		else
		 			alert("Registro fallido");
	        }
	);
}

function adminVehiculo(btn){
	var id_vehiculo_V = id_vehiculo_Vadmin;
	var marca_V = $("#marca").val();
	var modelo_V = $("#modelo").val();
	var id_transmision_V = $("#transmision option:selected").val();
	switch(id_transmision_V){
		case 'Automática':
			id_transmision_V = 1;
			break;
		case 'Manual':
			id_transmision_V = 2;
		break;
	}
	var placas_V = $("#placas").val();
	var color_V = $("#color").val();
	var año_V = $("#año").val();

	car1 = '0'; 
	car2 = '0';
	car3 = '0';
	car4 = '0';
	car5 = '0';
	car6 = '0';
	if($("#c1").is(':checked'))
		car1='1';
	if($("#c2").is(':checked'))
		car2='1';
	if($("#c3").is(':checked'))
		car3='1';
	if($("#c4").is(':checked'))
		car4='1';
	if($("#c5").is(':checked'))
		car5='1';
	if($("#c6").is(':checked'))
		car6='1';

	var caracteristicas_V = car1 + car2 + car3 + car4 + car5 + car6;
	var id_caracteristicas_V = id_caracteristicas_Vadmin
	var observaciones_V = $("#observaciones").val();
	var boton = btn;

	$.post(
			"base_datos.php", {formV_admin: true,"id_vehiculo_V": id_vehiculo_V,"marca_V": marca_V,
								"modelo_V": modelo_V,"id_transmision_V": id_transmision_V, "placas_V": placas_V,
								"color_V": color_V,"año_V": año_V,"caracteristicas_V": caracteristicas_V,
								"id_caracteristicas_V": id_caracteristicas_V,"observaciones_V": observaciones_V,"boton":boton},
		 	function(data,status) {
		 		if(data.charAt(data.length-1)== '*')
					window.location = "index.php?action=registro";
		 		else
		 			alert("Registro fallido");
	        }
	);
}

google.load("visualization", "1", {packages:["corechart"]});
function cargar_datos_grafico() {
	    $.ajax({
	        url: 'obtener_datos.php', // provide correct url
	        type: 'POST',
	        data: {get_chart: true},
	        dataType: 'JSON', // <-- since youre expecting JSON
	        success: function(chartValues) {
	            console.log(chartValues); // take a peek on the values (browser console)
	            drawChart(chartValues); // call your drawing function!
	            alert("yeihh");
	        }
	    });
	}

	function drawChart(chartValues) {
        var data = google.visualization.arrayToDataTable(chartValues);
        var options = {
          title: 'Estadistica ITC'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
	}
