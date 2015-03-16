$(document).ready(function(){

	var rutaicono="img/icono1.png";

	//2jugadores
	var pal1;
	var jug1;
	var pal2;
	var jug2;

	$('#icono').hide();
	$('#titulo').hide();
	$('#menu').hide();
	$('#ayuda').hide();
	$('#creditos').hide();
	$('#opciones').hide();
	$('#cambiaricono').hide();
	$('#2jugadores').hide();

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

	$('#camicono_menu').click(function(){
		$('#menu').show();
		$('#cambiaricono').hide();
	});

	$('#btn2jug').click(function(){
		$('#menu').hide();
		$('#2jugadores').show();
	});

	$('#listo1').click(function(){
		pal1 = document.jug1.pal1.value;
		jug1 = document.jug1.nomjug1.value;

		if(pal1.length>10){
			$('#icono').hide();
			$('#titulo').hide();
			$('#2jugadores').hide();
			alert("Palabra mayor a 10 caracteres");
			$('#menu').show();
		}
		else{
			alert("all good");
		}
		 
	});

	//depende click icono guardar su ruta
	$('#i1').click(function(){
		rutaicono="img/icono1.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i2').click(function(){
		rutaicono="img/icono2.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i3').click(function(){
		rutaicono="img/icono3.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i4').click(function(){
		rutaicono="img/icono4.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i5').click(function(){
		rutaicono="img/icono5.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i6').click(function(){
		rutaicono="img/icono6.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i7').click(function(){
		rutaicono="img/icono7.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i8').click(function(){
		rutaicono="img/icono8.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i9').click(function(){
		rutaicono="img/icono9.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i10').click(function(){
		rutaicono="img/icono10.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i11').click(function(){
		rutaicono="img/icono11.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i12').click(function(){
		rutaicono="img/icono12.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
});
