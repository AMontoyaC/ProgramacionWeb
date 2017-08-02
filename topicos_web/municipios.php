<?php
	$id_estado = $_POST["idEstado"];

	switch($id_estado){
		case "gto":
			$options = "
			<option value='cya'>Celaya</option>
			<option value='sal'>Salamanca</option>
			<option value='ap1'>Apaseo el Alto</option>
			<option value='ap2'>Apaseo el Grande</option>
			<option value='ira'>Irapuato</option>
			";
			break;
		case "jal":
			$options = "
			<option value='cya'>Ocotlan</option>
			<option value='sal'>Mascota</option>
			<option value='ap1'>Guadalajar</option>
			<option value='ap2'>Zapopan</option>
			<option value='ira'>Puerto Vallarta</option>
			";
			break;
		case "mich":
			$options = "
			<option value='pie'>La piedad</option>
			<option value='mas'>Yur&eacute;cuaro</option>
			<option value='zam'>Zamora</option>
			<option value='mor'>Morelia/option>
			<option value='ptz'>Patzcuaro</option>
			";
			break;

}

echo $options;

?>
