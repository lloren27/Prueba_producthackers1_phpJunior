<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formaulario de invitacion</title>
</head>
<body>
<?php
session_start();
?>
    <form action="guardar.php" method="POST">
    <h1>Formulario para conseguir una invitación de suscripción</h1>
    <input type="email" REQUIRED name="email" placeholder="prueba@prueba.com" value=""/>
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <input type="submit" value="Aceptar"/>
    </form>
</body>
</html>