<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
// a) Almacenar en un array los 10 primeros números pares y mostrarlos en pantalla uno debajo del otro.
echo "<h2>a) Almacenar y mostrar los 10 primeros números pares</h2>";
$numerospares = array();
for ($i = 2; count($numerospares) < 10; $i += 2) {
    $numerospares[] = $i;
}
foreach ($numerospares as $numero) {
    echo $numero . "<br>";
}

// b) Crear un array e introducir los valores: Pedro, Ana, 34 y 1. Mostrar el esquema del array con print_r().
echo "<h2>b) Crear un array con valores mixtos y mostrar su esquema</h2>";
$valoresmixtos = array("Pedro", "Ana", 34, 1);
echo "<pre>";
print_r($valoresmixtos);
echo "</pre>";

echo "<h2>c)</h2>";
$informacionpersonal = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
];
foreach ($informacionpersonal as $clave => $valor) {
    echo "$clave: $valor<br>";
}

echo "<h2>d)</h2>";
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre $ciudad<br>";
}

echo "<h2>e)</h2>";
$ciudadesasociativo = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
];
foreach ($ciudadesasociativo as $indice => $nombre) {
    echo "El índice de $nombre es $indice<br>";
}
?>

</body>
</html>