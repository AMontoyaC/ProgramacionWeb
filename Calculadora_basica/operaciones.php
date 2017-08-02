<?php
	$operacion = $_POST["opr"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$res = 0;
	$err = "<script type='text/javascript'>alert('Falta numero');</script>";
	$ind = "<script type='text/javascript'>alert('Indivisible');</script>";

	switch($operacion){
		case '+':
			if($num1 != null && $num2 != null)
				$res = $num1 + $num2;
			else
				echo $err;
			break;
		case '-':
			if($num1 != null && $num2 != null)
				$res = $num1 - $num2;
			else
				echo $err;
			break;
		case '/':
			if($num1 != null && $num2 != null){
				if($num2 != '0')
					$res = $num1 / $num2;
				else
					echo $ind;
			}
			else
				echo $err;
			break;
		case '*':
			if($num1 != null && $num2 != null)
				$res = $num1 * $num2;
			else
				echo $err;
			break;
}

echo $res;

?>
