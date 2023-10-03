<?php
// Ejercicio 1: Mostrar los números del 1 al 9.
echo "Ejercicio 1: Mostrar los números del 1 al 9";
for ($i = 1; $i <= 9; $i++) {
    echo "<br>". $i . "<br>";
}

echo "<br>";

// Ejercicio 2: Mostrar los números del 9 al 1.
echo "Ejercicio 2: Mostrar los números del 9 al 1";
for ($i = 9; $i >= 1; $i--) {
    echo "<br>". $i . "<br>";
}

echo "<br>";


// Ejercicio 3: Mostrar los números pares del 1 al 20.
echo "Ejercicio 3: Mostrar los números pares del 1 al 20";
for ($i = 2; $i <= 20; $i += 2) {
    echo "<br>". $i . "<br>";
}

echo "<br>";


// Ejercicio 4: Mostrar los números impares del 1 al 20.
echo "Ejercicio 4: Mostrar los números impares del 1 al 20";
for ($i = 1; $i <= 20; $i += 2) {
    echo "<br>". $i . "<br>";
}
echo "<br>";

// Ejercicio 5: Mostrar la suma de los números del 1 al 20.
echo "Ejercicio 5: Mostrar la suma de los números del 1 al 20<br>";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
echo "<br>";

echo "La suma es: " . $suma;
echo "<br>";


// Ejercicio 6: Mostrar la suma de los números pares del 1 al 20.
echo "Ejercicio 6: Mostrar la suma de los números pares del 1 al 20 <br>";
$sumaPares = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $sumaPares += $i;
}

echo "<br>";

echo "La suma de los pares es: " . $sumaPares;

echo "<br>";
?>