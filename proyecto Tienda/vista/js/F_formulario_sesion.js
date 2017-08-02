$(document).ready(function(){

	$('#btnreg').show();
	$('#btnini').hide();
	$('#txtpassword').hide();
	$('#lblpassword').hide();

//saber si es nuevo usuario o si va a iniciar sesion
    $('#roi1').click(function() {
   		if($('#roi1').is(':checked')) { 
   			$('#lblnom').show();
			$('#txtnom').show();
			$('#txtapepat').show();
			$('#lblapepat').show();
			$('#txtapemat').show();
			$('#lblapemat').show();
			$('#lbldir').show();
			$('#txtdir').show();
			$('#lblciu').show();
			$('#txtciu').show();
			$('#lblcp').show();
			$('#txtcp').show();
			$('#lbltel').show();
			$('#txttel').show();
			$('#lblemail').show();
			$('#txtemail').show();

			$('#txtpassword').hide();
			$('#lblpassword').hide();

			$('#btnreg').show();
			$('#btnini').hide();

   		}
	});
	$('#roi2').click(function() {
   		if($('#roi2').is(':checked')) { 
   			$('#captcha').hide();
			$('#lblnom').hide();
			$('#txtnom').hide();
			$('#txtapepat').hide();
			$('#lblapepat').hide();
			$('#txtapemat').hide();
			$('#lblapemat').hide();
			$('#lbldir').hide();
			$('#txtdir').hide();
			$('#lblciu').hide();
			$('#txtciu').hide();
			$('#lblcp').hide();
			$('#txtcp').hide();
			$('#lbltel').hide();
			$('#txttel').hide();
			$('#lblemail').hide();
			$('#txtemail').hide();


			$('#txtpassword').show();
			$('#lblpassword').show();


			$('#btnini').show();
			$('#btnreg').hide();
   		}
	});

	$('#inicio').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/inicio.php?"); 
	});
	$('#qs').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/quienessomos.html"); 
	});
	$('#productos').click(function() {
		$(location).attr('href',"http://localhost/proyecto%20Tienda/vista/celulares.html"); 
	});
});
