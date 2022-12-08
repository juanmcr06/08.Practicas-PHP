<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util parar ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo $carrito[2]; // Imprime el elemento en el indice 2
echo "<br>";

// Añade un elemento en el indice 3 del arreglo

$carrito[3] = 'Smartphone';

// Añadir un elemento nuevo al final del indice

array_push($carrito, 'Auriculares');

// Añadir elemento al inicio del indice

array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

// Otra forma de crear arrays
// Utilizan los mismos metodos de arriba

$clientes = array('Cliente 1', 'Cliente 2' , 'Cliente 3');

echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";

echo $clientes[2];

include 'includes/footer.php';