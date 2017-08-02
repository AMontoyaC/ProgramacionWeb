<?php
require('../modelo/buscap_class.php');

$id_prod=$_GET['id'];

$objCan = new Canasta($id_prod);

switch($_GET['id'])
{
	case 3:
	alert('sii');
	$objCan->busP();
	break;
}

?>