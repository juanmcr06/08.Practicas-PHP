<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";

// echo $cliente['nombre'];
// echo "<br>";
// echo $cliente['informacion']['tipo'];
// echo "<br>";

$cliente['id'] = 11212112;

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo "<br>";


include 'includes/footer.php';