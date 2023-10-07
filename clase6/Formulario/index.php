<!DOCTYPE html>
<html>
<head>
    <title>Notas Automatica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    // Variables para almacenar los datos del formulario
    $nombre = "";
    $nota = "";
    $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Validar si se ingresó el nombre del alumno
        if (isset($_GET["nombre"]) && !empty($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
        } else {
            $mensaje = "Por favor, ingresa el nombre del alumno.";
        }

        // Validar si se ingresó la nota y si es un número
        if (isset($_GET["nota"]) && is_numeric($_GET["nota"])) {
            $nota = floatval($_GET["nota"]);

            // Validar si la nota está dentro del rango 0-10
            if ($nota >= 0 && $nota <= 10) {
                // Determinar la calificación
                if ($nota >= 0 && $nota <= 2) {
                    $calificacion = "Muy deficiente";
                } elseif ($nota >= 3 && $nota <= 5) {
                    $calificacion = "Insuficiente";
                } elseif ($nota >= 6 && $nota <= 7) {
                    $calificacion = "Bien";
                } elseif ($nota >= 8 && $nota <= 9) {
                    $calificacion = "Notable";
                } else {
                    $calificacion = "Sobresaliente";
                }

                $mensaje = "El alumno $nombre ha obtenido una calificación de $calificacion.";
            } else {
                $mensaje = "La nota debe estar entre 0 y 10.";
            }
        } else {
            $mensaje = "Por favor, ingresa una nota válida.";
        }
    }
    ?>

    <div class="cuadroform">
        <h2>Ingrese los datos del alumno</h2>
    <?php
    // Mostrar el mensaje de resultado o error
    if (!empty($mensaje)) {
        echo "<p class='mensaje'>$mensaje</p>";
    }
    ?>

        <form action="" method="get">
            <div class="usuario">
                <input type="text" name="nombre">
                <label>Alumno</label>
            </div>

            <div class="usuario">
                <input type="text" name="nota">
                <label>Nota</label>
            </div>

            <div>
                <input class="entrar" type="submit" value="Calcular">
            </div>
        </form>
    </div>
</body>
</html>
