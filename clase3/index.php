<?php
// Ejercicio 1
echo "Ejercicio 1: Hola mundo<br>";

echo "<br>";

// Ejercicio 2
$mensaje = "Hola mundo bonito";
echo "Ejercicio 2: " . $mensaje . "<br>";

echo "<br>";

// Ejercicio 3
$numero1 = 10;
$numero2 = 5;

echo "Ejercicio 3: <br>";
echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División entera: " . (int)($numero1 / $numero2) . "<br>";
echo "Entero: " . ($numero1 % $numero2) . "<br>";

echo "<br>";

// Ejercicio 4
$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;
echo "Ejercicio 4: $celsius °c son $fahrenheit °F<br>";

echo "<br>";

// Ejercicio 5 - rectángulo
$baserectangulo = 18;
$alturarectangulo = 12;
$perimetrorectangulo = 2 * ($baserectangulo + $alturarectangulo);
$arearectangulo = $baserectangulo * $alturarectangulo;
echo "Ejercicio 5 - Rectángulo:<br>";
echo "Perímetro del rectángulo: $perimetrorectangulo cm<br>";
echo "Área del rectángulo: $arearectangulo cm²<br>";

echo "<br>";

// Ejercicio 5 - círculo
$radiocirculo = 30;
$perimetrocirculo = 2 * M_PI * $radiocirculo;
$areacirculo = M_PI * pow($radiocirculo, 2);
echo "Círculo:<br>";
echo "Perímetro del círculo: " . round($perimetrocirculo, 2) . " cm<br>";
echo "Área del círculo: " . round($areacirculo, 2) . " cm²<br>";
?>
