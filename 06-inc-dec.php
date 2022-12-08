<?php include 'includes/header.php';

$numero1 = 30;

echo ++$numero1; // Incremento en 1, poniendo adelante los signos ++
echo "<br>";

$numero2 = 11;

echo --$numero2; // Decremento en 1, poniendo adelante los signos --
echo "<br>";

$numero3 = 10;

echo $numero3 += 5; // Incremento por el numero que se indica despues del =

// Si se colocan los signos luego de la variable, este incrementa o decrementa
// Luego de imprimir la variable. Al imprimirla no hay cambio, pero en la segunda
// Vez que lo imprimimos si lo hace con el cambio ya.

include 'includes/footer.php';