<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Suscripción de autores</title>
</head>

<body style=" background-color: #268BE6; color: white; ">
<?php
session_start();
?>
	<form action="suscripcion.php" method="POST">
		<h1>Selecciona los autores a los que deseas suscribirte </h1>
		<ul style="list-style:none;">
			<li>
				<label>
					<input type="radio" name="author_id" value="1" />
					<span>Marta Robles</span>
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="author_id" value="2" />
					<span>Eduardo Inda</span>
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="author_id" value="3" />
					<span>Patricia Navarro</span>
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="author_id" value="4" />
					<span>Francisco Marguenda</span>
				</label>
			</li>
			<li>
				<label>
					<input type="radio" name="author_id" value="5" />
					<span>Agatha Ruiz de la Prada</span>
				</label>
			</li>
		</ul>
		<br>
		<input type="submit" value="Aceptar" style="background-color:white;border-radius:20px;text-align:center;color:#268BE6;font-size:15px;" />
	</form>
</body>

</html>