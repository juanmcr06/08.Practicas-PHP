<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Juan', 'Pedro', 'Pablo');

// Empty - Revisa si un arreglo esta vacio

var_dump( empty($clientes));
echo "<br>";

var_dump( empty($clientes3));
echo "<br>";

// Isset - Revisa si un arreglo esta creado
// o una propiedad esta definida

var_dump( isset($clientes3));
echo "<br>";

var_dump( isset($clientes4));
echo "<br>";

var_dump( isset($clientes2));
echo "<br>";

var_dump( isset($clientes['nombre'])); // Revisa si la propiedad 'nombre' existe
echo "<br>";

include 'includes/footer.php';