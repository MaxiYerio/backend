<?php

$nombre = $_POST['nombre'];

$descripcion = $_POST['descripcion'];

$precio = $_POST['precio'];



include('conexion.php');

$consultaDB = "INSERT INTO productos (nombre, descripcion, precio)
VALUES ('$nombre', '$descripcion', $precio)";

mysqli_query($conexion, $consultaDB);

mysqli_close($conexion);

header("location: tabla.php");

?>