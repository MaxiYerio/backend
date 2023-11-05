<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function calcularCuadrado($lado) {
    $perimetro = 4 * $lado;
    $superficie = $lado * $lado;
    echo "Cuadrado de lado $lado:<br>";
    echo "Perímetro: $perimetro<br>";
    echo "Superficie: $superficie<br>";
}

function convertirAMayusculas($cadena) {
    $mayusculas = strtoupper($cadena);
    return $mayusculas;
}

function convertirAMinusculas($cadena) {
    $minusculas = strtolower($cadena);
    return $minusculas;
}

function diasEnElMes($mes) {
    if ($mes >= 1 && $mes <= 12) {
        if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
            return "El mes $mes tiene 30 días.";
        } elseif ($mes != 2) {
            return "El mes $mes tiene 31 días.";
        } else {
            return "El mes 2 (febrero) puede tener 28 o 29 días.";
        }
    } else {
        return "Número de mes no válido.";
    }
}

calcularCuadrado(5);
$frase = "Hola, Mundo!";
echo "Mayúsculas: " . convertirAMayusculas($frase) . "<br>";
echo "Minúsculas: " . convertirAMinusculas($frase) . "<br>";
echo diasEnElMes(7);
?>

</body>
</html>