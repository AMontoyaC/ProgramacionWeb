<?php
require('../modelo/canasta_class.php');

$cantidad=$_GET['cant'];
$total=$_GET['pre'];
$id_prod=$_GET['id'];
$id_cliente=$_GET['cli'];

$objCan = new Canasta($cantidad,$total,$id_prod,$id_cliente);


$objCan->insCanasta();


?>