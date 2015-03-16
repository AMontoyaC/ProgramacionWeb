$(document).ready(function(){
	$('#icono').hide();
	$('#titulo').hide();
	$('#menu').hide();
	$('#ayuda').hide();
	$('#creditos').hide();
	$('#opciones').hide();
	$('#cambiaricono').hide();
	document.body.style.backgroundColor = "#FFFFFF";
	$('#entrar').click(function(){
		$('#gif1').hide();
		$('#entrar').hide();
    	document.body.style.backgroundImage = "url('img/fondo.png')";
    	$('#icono').show();
    	$('#titulo').show();
	});

	$('#titulo').click(function(){
		$('#icono').hide();
		$('#titulo').hide();
		$('#menu').show();
	});

	$('#btnayuda').click(function(){
		$('#menu').hide();
		$('#ayuda').show();
	});

	$('#ayuda_menu').click(function(){
		$('#menu').show();
		$('#ayuda').hide();
	});

	$('#btncreditos').click(function(){
		$('#menu').hide();
		$('#creditos').show();
	});

	$('#creditos_menu').click(function(){
		$('#menu').show();
		$('#creditos').hide();
	});

	$('#btnopc').click(function(){
		$('#menu').hide();
		$('#opciones').show();
	});

	$('#opciones_menu').click(function(){
		$('#menu').show();
		$('#opciones').hide();
	});

	$('#btncamicono').click(function(){
		$('#opciones').hide();
		$('#cambiaricono').show();
	});

	$('#cmicono_menu').click(function(){
		$('#menu').show();
		$('#cambiaricono').hide();
	});
});
