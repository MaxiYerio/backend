<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylecrud.css">
	<title>Document</title>
</head>

<body class="fondoalta">
	<div class="cuadroform">
		<h2>Agregar Productos</h2>

		<form action="validarDatos.php" method="POST">
			<div class="usuario">
				<input type="text" name="nombre" required>
				<label>Nombre del producto</label>
			</div>

			<div class="usuario">
				<input type="number" name="precio" required>
				<label>Precio </label>
			</div>

			<div class="usuario">
				<label>Descripción:</label>
				<br>
				<br>
				<textarea name="descripcion" rows="5" ></textarea>
			</div>

			<div>
				<input class="entrar" type="submit" value="Cancelar">
				<input class="entrar" type="submit" value="Aceptar">
			</div>
		</form>
	</div>

</body>

</html>