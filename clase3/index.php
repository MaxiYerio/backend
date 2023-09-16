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
echo "División: " . (int)($numero1 / $numero2) . "<br>";
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
echo "Ejercicio 5: Para el rectángulo:<br>";
echo "   Perímetro: $perimetrorectangulo cm<br>";
echo "   Área: $arearectangulo cm²<br>";

echo "<br>";

$radioCirculo = 30;
$pi = 3.14159;
$perimetroCirculo = 2 * $pi * $radioCirculo;
$areaCirculo = $pi * ($radioCirculo ** 2);
echo "   Para el círculo:<br>";
echo "   Perímetro: $perimetroCirculo cm<br>";
echo "   Área: $areaCirculo cm²<br>";
?>
