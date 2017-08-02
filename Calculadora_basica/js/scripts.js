$(document).ready(inicializa);

function inicializa(){
	var x = $("#btnSuma");
	x.click(clickMensaje);
	var x = $("#btnResta");
	x.click(clickMensaje);
	var x = $("#btnDivision");
	x.click(clickMensaje);
	var x = $("#btnMultiplicacion");
	x.click(clickMensaje);

	$("#num1").numeric();
	$("#num2").numeric();
}

function clickMensaje(){
	//operacion tiene que operacion se dio click (+ , -, *, /)
	var operacion = $(this).val();
	
	//numeros de los input
	var num1 = $("#num1").val();
	var num2 = $("#num2").val();
	
	$.post("operaciones.php", {"opr": operacion, "num1": num1, "num2": num2},
				function(response){
					$("#res").html(response);
				}
		);
}

