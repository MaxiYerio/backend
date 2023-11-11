<!DOCTYPE html>
<html>

<head>
    <title>Tabla</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./stylecrud.css">
    <link rel="stylesheet" href="../ComercioComprador/assets/css/style.css">
    <link rel="stylesheet" href="../ComercioComprador/assets/css/fontawesome.css">
</head>

<body class="fondotabla">
    <div class="contenedor">

        <div class="tablaproducto">
            <h4 class="titulo">Tabla De Productos</h4>
            <div class="main-button titular">
                <div class="botones">
                <a href="./index.php">Agregar Producto</a>
                <a href="../ComercioComprador/index.html">Tienda</a>
                <a href="../home/home.php">Inicio</a>
                </div>
            </div>

            <table class="tabla">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
                <?php
                include('conexion.php');

                $consultaProductos = "SELECT * FROM productos";
                $resultado = mysqli_query($conexion, $consultaProductos);

                if ($resultado) {
                    if (mysqli_num_rows($resultado) > 0) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $fila['id'] . "</td>";
                            echo "<td>" . $fila['nombre'] . "</td>";
                            echo "<td>" . $fila['descripcion'] . "</td>";
                            echo "<td>" . $fila['precio'] . "</td>";
                            echo "<td>";
                            echo "<a href='editar.php?id=" . $fila['id'] . "'>Editar</a>";
                            echo " | ";
                            echo "<a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No se encontraron productos.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Error en la consulta: " . mysqli_error($conexion) . "</td></tr>";
                }

                mysqli_close($conexion);
                ?>
            </table>

        </div>
    </div>
</body>

</html>