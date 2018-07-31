<?php
session_start();

$token = bin2hex(random_bytes(12));
 
$_SESSION['token'] = $token;
 
echo "el token de esta sesion es :", $_SESSION['token'];
?>
<br>
<h1>Bienvenido al servicio de suscripcion de autores</h1>
<a href="formulario.php">Ir al formulario</a>

