<?php
$numero = 8; // El número para el que deseas calcular el factorial
$factorial = 1; // Inicializa el factorial como 1

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i; // Multiplica el factorial por cada número desde 1 hasta $numero
}

echo "El factorial de $numero es $factorial";
?>
