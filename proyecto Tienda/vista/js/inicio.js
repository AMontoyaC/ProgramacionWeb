$(document).ready(function(){


	$('#btnisesion').show();
	$('#btnisesion').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/formulario_sesion.html"); 
	});
	$('#qs').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/quienessomos.html"); 
	});
	$('#inicio').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/inicio.php"); 
	});
	$('#productos').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/celulares.html"); 
	});
	$('#contactanos').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/contactanos.html"); 
	});

	/*
	<?php
	if(empty($_SESSION[usuariosesion])) 
	{ 
		$('#btnisesion').show();
	}  
	else{
		$('#btnisesion').hide();
	}
	?>*/
});
