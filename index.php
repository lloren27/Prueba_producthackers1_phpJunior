<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body style=" background-color: #268BE6; color: white;text-align:center; ">
<?php
session_start();

$token = bin2hex(random_bytes(12));
 
$_SESSION['token'] = $token;
 
?>
<br>
<h1>Bienvenido al servicio de suscripcion Younews</h1>
<div style="background-color:white;border-radius:30px;text-align:center;padding-top:10px;padding-bottom:10px;margin-left: 100px;margin-right: 100px;">
<a href="formulario.php"style="color: #268BE6;font-size:25px;text-decoration: none;">Ir al formulario</a>
</div>
</body>
</html>
