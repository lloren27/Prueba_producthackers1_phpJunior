<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Suscripción de autores</title>
</head>

<body>
	<form action="suscripcion.php" method="POST">
		<h1>Selecciona los autores a los que deseas suscribirte </h1>
		<ul>
			<li>
				<label>
					<input type="checkbox" name="author_id" value="1" />
					<span>Marta Robles</span>
				</label>
			</li>
			<li>
				<label>
					<input type="checkbox" name="author_id" value="2" />
					<span>Eduardo Inda</span>
				</label>
			</li>
			<li>
				<label>
					<input type="checkbox" name="author_id" value="3" />
					<span>Patricia Navarro</span>
				</label>
			</li>
			<li>
				<label>
					<input type="checkbox" name="author_id" value="4" />
					<span>Francisco Marguenda</span>
				</label>
			</li>
			<li>
				<label>
					<input type="checkbox" name="author_id" value="5" />
					<span>Agatha Ruiz de la Prada</span>
				</label>
			</li>
		</ul>
		<br>
		<input type="submit" value="Aceptar" />
	</form>
</body>

</html>