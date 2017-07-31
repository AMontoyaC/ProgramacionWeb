$(document).ready(function(){

//saber si es nuevo usuario o si va a iniciar sesion
    $('#roi1').click(function() {
   		if($('#roi1').is(':checked')) { 
   			$('#lblnom').show();
			$('#txtnom').show();
			$('#lblemail').show();
			$('#txtemail').show();
			$('#lblcemail').show();
			$('#txtcemail').show();
			$('#btnform').val("Registrarme");
   		}
	});
	$('#roi2').click(function() {
   		if($('#roi2').is(':checked')) { 
			$('#lblnom').hide();
			$('#txtnom').hide();
			$('#lblemail').hide();
			$('#txtemail').hide();
			$('#lblcemail').hide();
			$('#txtcemail').hide();

			$('#btnform').val("Iniciar sesión");
   		}
	});
});