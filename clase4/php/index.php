<?php
// Ejercicio 1
$num1 = 5; // Cambia el valor de num1 según lo que desees probar

if (is_numeric($num1) && $num1 > 0) {
    echo "El número ingresado es un número positivo";
    echo "<br>";
    echo "<br>";

}

// Ejercicio 2
$num2 = 7; // Cambia el valor de num2 según lo que desees probar

if (is_numeric($num2) && $num2 > 1 && $num2 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
    echo "<br>";
    echo "<br>";

}

// Ejercicio 3
$num3 = 15; // Cambia el valor de num3 según lo que desees probar

if ($num3 >= 10 || $num3 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
    echo "<br>";

} else {
    echo "El número ingresado no pudo ser validado";
}
    echo "<br>";

// Ejercicio 4
$numero1 = 8; // Cambia el valor de numero1 según lo que desees probar
$numero2 = 5; // Cambia el valor de numero2 según lo que desees probar

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "La suma de numero1 y numero2 es: $suma<br>";
    echo "<br>";

    echo "La resta de numero1 y numero2 es: $resta";
    echo "<br>";

} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division_entera = $numero1 / $numero2;
    $resto = $numero1 % $numero2;
    echo "La multiplicación de numero1 y numero2 es: $multiplicacion<br>";
    echo "La división entera de numero1 y numero2 es: $division_entera<br>";
    echo "El resto de la división de numero1 por numero2 es: $resto";
    
} else {
    echo "Los números ingresados son iguales";
}
?>
