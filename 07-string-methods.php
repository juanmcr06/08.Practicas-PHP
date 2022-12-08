<?php include 'includes/header.php';

$nombreCliente = "Juan Manuel Vivas";

// Conocer Extension de un String

echo strlen($nombreCliente);
echo "<br>";

// Eliminar espacios en Blanco

$texto = trim($nombreCliente);
echo $texto;
echo "<br>";
var_dump($texto);
echo "<br>";

// Convertir Texto a matusculas

echo strtoupper($nombreCliente);
echo "<br>";

// Covertir texto a minusculas

echo strtolower($nombreCliente);
echo "<br>";

// Ejemplo practico de comparar minusculas y mayusculas en un mail

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) == strtolower($mail2));
echo "<br>";

// Reemplazar texto de un String

echo str_replace('Juan Manuel', 'J. M.', $nombreCliente);
echo "<br>";

// Revisar si existe un String

echo strpos($nombreCliente, 'Vivas');
echo "<br>";

// Concatenar Strings modo 1

$tipoCliente = "Premium";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

// Concatenar Strings modo 2
// Solo Funciona con Comillas dobles "

echo "El Cliente {$nombreCliente} es {$tipoCliente}";
echo "<br>";

include 'includes/footer.php';