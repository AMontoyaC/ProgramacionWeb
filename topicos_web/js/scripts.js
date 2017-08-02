$(document).ready(inicializa);

function inicializa(){
	/*
	var x = $("#mensaje");
	x.click(clickMensaje);
	*/

	/*
	var btnVocales = $ ("#btnVocales");
	var btnConsonantes = $ ("#btnConsonantes");
	btnVocales.click(marcaVocales);
	btnConsonantes.click(marcaConsonantes);
	*/


	/*	
	var x = $(".alumnos a");
	x.click(getDetalleAlumno);
	*/

	$("#estados").change(llenaMunicipios);
}

function llenaMunicipios(){
	$("#estados option:selected").each(function(){
		var id_estado = $(this).val();
		$.post(
			"municipios.php", {"idEstado": id_estado},
				function(data, status){
					$("#municipios").html(data);
				}
		);

	});

}

function getDetalleAlumno(){
	/*recuperar url que apunta, recupera el atributo que esta en href*/
	var pagina = $(this).attr("href");
	var detalle_alumno = $(".detalle_alumno");
	//detalle_alumno.load(pagina);

	//metodo get
	$.get(pagina, function(data, status){
		detalle_alumno.html(data);
	});

	/*evitar que se cargue el url*/
	return false;
}

function marcaVocales(){
	var claseVocales = $(".vocal");
	claseVocales.css("background-color", "black");
	claseVocales.css("color","white");
	claseVocales.css("font-size","15pt");
}

function marcaConsonantes(){
	desmarcaVocales();
	var claseConsonantes = $(".consonante");
	claseConsonantes.css("background-color", "green");
	claseConsonantes.css("color","yellow");
	claseConsonantes.css("font-size","15pt");
}

/*regresar al estado inicial (sin marcar)*/
function desmarcaVocales(){
	var claseVocales = $(".vocal");
	claseVocales.css("background-color", "");
	claseVocales.css("color","");
	claseVocales.css("font-size","");
}


function clickMensaje(){
	var x = $("#mensaje");
	x.css("color", "green");
	x.css("background-color", "yellow");
	x.css("width","300px");
	x.css("height","250px");
	x.css("font-size","24pt");
	x.css("border","1px solid #000");
}

