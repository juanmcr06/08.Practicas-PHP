<?php include 'includes/header.php';

// in_array - Buscar elementos en un array

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));
echo "<br>";
var_dump( in_array('Auriculares', $carrito));
echo "<br>";

// Ordenar elementos de un array

$numeros = array(3, 5, 7, 8, 2, 1, 9, 0, 6);

sort($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<br>";

// Ordenar arreglo asociativo

$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
];

asort($cliente); // Ordena por tipo de valores (en orden alfabetico A-Z)
arsort($cliente); // Ordena por tipo de valores (en orden alfabetico Z-A)
ksort($cliente); // Ordena por orden alfabetico (A-Z)
krsort($cliente); // Ordena por orden alfabetico (Z-A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";


include 'includes/footer.php';