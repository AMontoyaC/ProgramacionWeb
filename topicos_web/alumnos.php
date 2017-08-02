<?php
	$no_control = $_GET["no_control"];

	switch($no_control){
		case "10030963";
			$nombre = "alumno 1 ";
			$carrera = "Ing. Sistemas";
			$semestre = "7";
		break;
		case "12030816";
			$nombre = "alumno 2 ";
			$carrera = "Ing. Sistemas";
			$semestre = "7";
		break;
	}

echo "<img src='images/FOTOS-ALUMNOS/$no_control" . ".jpg'> <br>";
echo "No. Control: " . $no_control . "<br>";
echo "Nombre:	" . $nombre . "<br>";
echo "Carrera:	" . $carrera . "<br>";
echo "Semestre:	" . $semestre . "<br>";

?>
